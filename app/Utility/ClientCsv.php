<?php

namespace App\Utility;

class ClientCsv {

    private $path;
    private $filename;
    private $lastId;
    
    function __construct($path, $filename) {
        $this->path = $path;
        $this->filename = $filename;
    }

    /*returns a full path to the csv file*/
    public function fullPath() {
        return $_SERVER['DOCUMENT_ROOT'].'/'. $this->path.'/'. $this->filename;
    }

    /*returns client data as an array*/
    public function all() {
        $csv = array_map('str_getcsv', file($this->fullPath()));
        
        $clients = [];
        $header = array_shift($csv);

        foreach($csv as $data) {
           $res = $this->manageArray($header, $data);
           $clients[] = $res;
        }

        return $clients;
    }

    /*function to make key-value pair*/
    public function manageArray($key, $value) {
        return array_combine($key, $value);
    }

    /*save single row of data in csv file with an unique id*/
    public function save($data) {
        $csv = array_map('str_getcsv', file($this->fullPath()));
        $file = fopen($this->fullPath(),'a');
        if (count($csv) < 1) {
            $arr = array_keys($data);
            array_unshift($arr , 'id');
            fputcsv($file,$arr);
        } else {
            $arr = array_values($data);
            $id = uniqid(15);
            array_unshift($arr , $id);
            fputcsv($file,$arr);
        }

        fclose($file);
    }
}