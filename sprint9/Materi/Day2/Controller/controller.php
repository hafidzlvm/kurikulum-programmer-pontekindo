<?php 
include_once "../Model/conn.php";

class Products extends Connection {
    var $satu;
    public $dua;
    protected $tiga = "tiga";
    private string $name = "Hanif";

    public function getName() { //getter
        return $this->name;
    }

    public function setName(string $name):void{ //setter                
        $this->name = $name;
    }

    function index(){
        $index = "SELECT * FROM product_detail";
        $statement = $this->pdo->query($index);
        $products = $statement->fetchAll(PDO::FETCH_OBJ);
        return $products;
    }

    protected function tampilNama(){        
        echo $this->name;
    }
}

class Detail extends Products{
    public function tampilTiga(){        
        echo $this->tiga;
    }
    public function tampilNama(){        
        echo $this->name;
    }
}


?>