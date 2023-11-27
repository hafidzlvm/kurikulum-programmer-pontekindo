<?php
namespace App\core;

class Controller
{
    public function view($fileName, $data = []){
        require_once '../app/views/' . $fileName . '.php';
    }
    public function model($modelName){
        require_once '../app/models/' . $modelName . '.php';
        return new $modelName();
    }
}
?>