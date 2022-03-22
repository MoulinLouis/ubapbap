<?php

namespace App\Core;

class UploadManager {
    
    protected $file;

    protected $file_name;
    protected $file_type;
    protected $file_tmp_name;
    protected $file_error;
    protected $file_size;
    protected $file_extension;

    protected $mime_types_authorized;
    protected $max_file_size;
    protected $save_path;

    public function __construct() {
        $this->mime_types_authorized = [
            'application/vnd.ms-excel', // [xls]
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet', // [xlsx]
        ];
        $this->setMaxFileSize('5240000'); // 5Mo
        $this->setSavePath(self::getDefaultSavePath());
    }

    /**
     * Compare file type with authorized mime_types_authorized array
     * @return bool
     */
    public function isTypeAuthorized() {
        if(in_array($this->getFileType(), $this->getMimeTypesAuthorized())) {
            return true;
        }
        return false;
    }

    /**
     * Compare file size with max file size authorized
     * @return bool
     */
    public function validateFileSize() {
        if($this->keepOnlyDigit($this->getMaxFileSize()) >= $this->keepOnlyDigit($this->getFileSize())) {
            return true;
        }
        return false;
    }

    public function save($filename = null, $target = null) {
        $filename = is_null($filename) ? $this->getFileName() : $filename;
        $target = is_null($target) ? $this->getSavePath() : $target;
        move_uploaded_file($this->getFileTmpName(), $target . $filename);
    }

    public function deleteFile() {
        unlink($this->save_path.$this->file_name);
    }

    public function getFullPath() {
        return $this->save_path.$this->file_name;

    }

    /**
     * @return array
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * @param $_FILES $file
     * @return uploadManager
     */
    public function setFile(array $file, $index = null)
    {
        $this->setFileName($file['name'][$index]);
        $this->setFileExtension($file['name'][$index]);
        $this->setFileType($file['type'][$index]);
        $this->setFileTmpName($file['tmp_name'][$index]);
        $this->setFileError($file['error'][$index]);
        $this->setFileSize($file['size'][$index]);
        $this->file = $file;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileName(): string
    {
        return $this->file_name;
    }

    /**
     * @param string $file_name
     * @return uploadManager
     */
    public function setFileName(string $file_name): uploadManager
    {
        $this->file_name = $file_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileType(): string
    {
        return $this->file_type;
    }

    /**
     * @param string $file_type
     * @return uploadManager
     */
    public function setFileType(string $file_type): uploadManager
    {
        $this->file_type = $file_type;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileTmpName(): string
    {
        return $this->file_tmp_name;
    }

    /**
     * @param string $file_tmp_name
     * @return uploadManager
     */
    public function setFileTmpName(string $file_tmp_name): uploadManager
    {
        $this->file_tmp_name = $file_tmp_name;
        return $this;
    }

    /**
     * @return int
     */
    public function getFileError(): int
    {
        return $this->file_error;
    }

    /**
     * @param int $file_error
     * @return uploadManager
     */
    public function setFileError(int $file_error): uploadManager
    {
        $this->file_error = $file_error;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFileSize()
    {
        return $this->file_size;
    }

    /**
     * @param mixed $file_size
     * @return uploadManager
     */
    public function setFileSize($file_size): uploadManager
    {
        $this->file_size = $file_size;
        return $this;
    }

    /**
     * @return string
     */
    public function getFileExtension()
    {
        return $this->file_extension;
    }

    /**
     * @param string $file_extension
     * @return uploadManager
     */
    public function setFileExtension($file_name)
    {
        $file_name_exploded = explode('.', $file_name);
        $this->file_extension = end($file_name_exploded);
        return $this;
    }


    /**
     * @return array
     */
    public function getMimeTypesAuthorized(): array
    {
        return $this->mime_types_authorized;
    }

    /**
     * @param array $mime_types
     * @return uploadManager
     */
    public function setMimeTypesAuthorized(array $mime_types_authorized): uploadManager
    {
        $this->mime_types_authorized = array_merge($this->mime_types_authorized, $mime_types_authorized);
        return $this;
    }

    /**
     * @return string
     */
    public function getMaxFileSize()
    {
        return $this->max_file_size;
    }

    /**
     * @param string $max_file_size
     * @return uploadManager
     */
    public function setMaxFileSize(string $max_file_size)
    {
        $this->max_file_size = $max_file_size;
        return $this;
    }

    private function keepOnlyDigit($str) {
        return preg_replace("/[^0-9\.]/", "", $str);
    }

    /**
     * @return string
     */
    public static function getDefaultSavePath()
    {
        return './public/Ressources/uploads/';
    }

    /**
     * @return string
     */
    public function getSavePath()
    {
        return $this->save_path;
    }

    /**
     * @param string $save_path
     * @return uploadManager
     */
    public function setSavePath($save_path)
    {
        $this->save_path = $save_path;
        return $this;
    }

}