<?php
namespace App\config;
class Config
{
    protected const BASEURL = "http://localhost/KurikulumProgrammerPontekindo/sprint10/Day1/MVC/public";
    private $db = [
        'host' => 'localhost',
        'user' => 'hfdzlvm',
        'pass' => 'sundatila12',
        'db' => 'rs'
    ];
    public function getDb(){
        return $this->db;
    }
    public function getBaseURL(){
        return self::BASEURL;
    }
}
?>