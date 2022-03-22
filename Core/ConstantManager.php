<?php

namespace App\Core;

/**
 * Class ConstantManager
 * @package App\Core
 * Class that manages and defines the environment constants of the project
 */
class ConstantManager
{

	private $envFile = ".env";
	private $data = [];

	public function __construct(){
		if(!file_exists($this->envFile)) {
		    return;
        }

		$this->parseFile($this->envFile);
		if(!empty($this->data["env"])){
			$this->parseFile($this->envFile.".".$this->data["env"]);
		}

		$this->defineConstants();
	}

	/**
	 * defineConstants
	 * @return void
	 * Recognizes all environment files (.env/.env.dev/.end.prod) and sends their data to the defineConstant() function
	 */
	public function defineConstants(){
		foreach ($this->data as $key => $value) {
			$this->defineConstant($key, $value);
		}
	}
	
	/**
	 * defineConstant
	 * @param  mixed $key
	 * @param  mixed $value
	 * @return void
	 * Set environment variables from environment files sent to it
	 */
	public static function defineConstant($key, $value) {
		$key = str_replace(" ", "_", mb_strtoupper(trim($key)));
		if(!defined($key)){
			define($key, trim($value));
		}else{
			die("Attention la constante ".$key." existe déjà");
		}
	}

	/**
	 * parseFile
	 * @param  mixed $file
	 * @return void
	 * Browse the sent file and define the indexes and their values in an array $this->data
	 */
	public function parseFile($file){
		$handle = fopen($file, "r");
		if(!empty($handle)){

			while (!feof($handle)) {
				$line = trim(fgets($handle));
				preg_match("/([^=]*)=([^#]*)/", $line, $results);
				if(!empty($results[1]) && !empty($results[2])){
					$this->data[$results[1]] = $results[2];
				}
			}

		}

	}

}