<?php 
require_once 'util.php';
class Connection {
    private const DB_HOST = "localhost";
    private const DB_NAME = "myRupee";
    private const DB_USER = "myrupee54";
    private const DB_PASSWORD = "Tortlinkos@12";
    private $dsn = "mysql::host=".self::DB_HOST.";dbname=".self::DB_NAME."";
    protected $conn;


    // method for connection to the database
    public function __construct(){
        try{
            $this->conn = new PDO ($this->dsn,self::DB_USER,self::DB_PASSWORD);
            $this->conn -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        }catch(PDOException $e){
            die('Eror'.$e->getMessage());
        }
    }
}


?>