<?php 
class Connection {
    private const DB_HOST = "localhost";
    private const DB_NAME = "myRupee";
    private const DB_USER = "myrupee54";
    private const DB_PASSWORD = "Tortlinkos@12";
    private $pdo = "mysql::host=".self::DB_HOST.";dbname=".self::DB_name."";
    private $conn = Null;
    

    function ___construct(){
        try{
            $this->pdo = new PDO ("mysql:host=".self::DB_HOST.";dbname=".self::DB_name."",self::DB_USER,self::DB_PASSWORD);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }




}
// class yang berisikan query untuk mengambil data dari class conn masukkan query read
class Query extends Connection {
    public function index(){
        $index = "SELECT * FROM transaksi";
        $result = $this->parent::pdo->query($index);
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            // Lakukan sesuatu dengan data
            $rows[]=$row;
        }
        return $rows;

        // $steatment = $this->pdo->query($index);
        // var_dump($steatment);
        // $products = $steatment ->fetchAll(PDO::FETCH_OBJ);
        // return $products;
    }
}
?>