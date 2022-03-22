<?php

namespace App\Core;
use App\Core\Helpers;

class Database
{

	private $pdo;
	private $table;

    /**
     * Database constructor.
     * @param null $class
     * Connection to the database
     */
    public function __construct($class = null)
    {
        try {
            $this->pdo = new \PDO(DBDRIVER . ":dbname=" . DBNAME . ";host=" . DBHOST, DBUSER, DBPWD);
            $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->pdo->setAttribute(\PDO::ATTR_EMULATE_PREPARES, false);
        } catch (Exception $e) {
            die ("Erreur SQL " . $e->getMessage());
        }

        $classExploded = $class !== null ? $class : explode("\\", get_called_class());
        $this->table = ($class !== null ? $class : end($classExploded));
    }

    public function getParentFields()
    {
        return array_keys(get_class_vars(__CLASS__));
    }

    /**
     * @param array $requestedParams
     * @param array $filter
     * @param string $filterString
     * @param string $moreString
     * @return array
     * Method to create a SELECT query
     * $requestedParams contains the columns we want to return and the condition filters
     */
    public function query($requestedParams = [], $filter = [], $filterString = '', $moreString = '')
    {
        $columnFilter = [];
        foreach ($filter as $key => $value) {
            if (!is_null($value)) {
                if($key[0] !== "!") {
                    $columnFilter[] = $key . "=:" . $key;
                } else {
                    $columnFilter[] = ltrim($key, $key[0]) . "!=:" . ltrim($key, $key[0]);
                }
            }
        }
        $sql = "SELECT " . implode(",", $requestedParams) . " FROM " . $this->table
            . (count($filter) ? " WHERE " . implode(" AND ", $columnFilter) : '')
            . ($filterString ? (count($filter) ? " AND " : ' WHERE ') . $filterString : '')
            . ($moreString ? $moreString : '');
        $query = $this->pdo->prepare($sql);
        foreach ($filter as $key => $value) {
            if (!is_null($value)) {
                if($key[0] !== "!") {
                    $query->bindValue(":".$key, $value);
                } else {
                    $query->bindValue(":".ltrim($key, $key[0]), $value);
                }
            }
        }
        $query->execute();
        return $query->fetchAll();
    }
    
    public function multiQuery($entry)
    {
        $sql = $entry;
        $query = $this->pdo->prepare($sql);
        $query->execute();
        return $query->fetchAll(\PDO::FETCH_ASSOC);
    }

    /**
     * @param $id
     * Function to "delete" an item
     */
    public function delete($id)
    {
        $query = $this->pdo->prepare("DELETE FROM " . $this->table . " WHERE id = " . $id);
        $query->execute();
    }

    /**
     * Method to save the information in the database
     * If an id exists, an UPDATE request is executed, otherwise an INSERT INTO request is executed
     */
    public function save()
    {
        $data = array_diff_key(
            get_object_vars($this),
            get_class_vars(get_class())
        );

        
        $data = array_filter($data, function($value, $key) {
            if (!in_array($key, $this->get_foreignKeys())) {
                return [$key => $value];
            }
        }, ARRAY_FILTER_USE_BOTH);

        $columns = array_keys($data);
        $values = array_values($data);

        $columnForUpdate = [];
       if (is_null($this->getId())) {
            //INSERT
            unset($columns[0]);
            unset($data["id"]);
            $query = $this->pdo->prepare("INSERT INTO " . $this->table . " (
                                            " . implode(",", $columns) . "
                                            ) OVERRIDING SYSTEM VALUE VALUES (
                                            :" . implode(",:", $columns) . "
                                            )");
            $query->execute($data);
       } else {
            foreach ($data as $key => $value) {
                if (!is_null($value)) {
                    $columnForUpdate[] = $key . "=:" . $key;
                }
            }

            $sql = "UPDATE " . $this->table . " SET " . implode(",", $columnForUpdate) . " WHERE id=" . $this->getId();
            $query = $this->pdo->prepare($sql);
            foreach ($data as $key => $value) {
                if (!is_null($value)) {
                    $query->bindValue(":$key", $value);
                }

            }
           $query->execute();
        }
    }

    /**
     * @return array
     * Function to return de foreign key, used to save values in tables that contains foreign keys
     */
    public function get_foreignKeys()
    {
        return [];
    }

}