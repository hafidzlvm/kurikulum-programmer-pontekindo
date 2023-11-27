<?php
namespace App\core;

use PDO;
use PDOException;
use App\config\Config;

class Database extends Config
{
    private $dsn;
    private $db;
    private $pdo;
    private $stat;

    public function __construct()
    {
        
        $config = new Config();
        $this->db = $config->getDb();
        $this->dsn = "mysql:host=".$this->db['host'].";dbname=".$this->db['db'].";charset=UTF8";
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        try {
            $this->pdo = new PDO($this->dsn, $this->db['user'], $this->db['pass'], $option);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }


    public function query($query){
        return $this->stat=$this->pdo->prepare($query);
    }
    public function execute(){
        return $this->stat->execute();
    }
    public function bind($param, $value, $type = null){
        
    }
}
?>