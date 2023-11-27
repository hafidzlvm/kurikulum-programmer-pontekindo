<?php 
class Connection {
    const DB_HOST = "localhost";
    const DB_NAME = "KuroMartlesson";
    const DB_USER = "lessonPHP07";
    const DB_PASSWORD = "belajarK@romasfandy21";

    function ___construct(){
        try{
            $this->pdo = new PDO ("mysql:host=".self::DB_HOST.";dbname=".self::DB_name."",self::DB_USER,self::DB_PASSWORD);
        }catch(PDOException $e){
            echo $e->getMessage();
        }
    }




}

?>