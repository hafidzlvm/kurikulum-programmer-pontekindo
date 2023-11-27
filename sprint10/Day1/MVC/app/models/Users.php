<?php
use App\core\Database;
class Users extends Database
{
    private $table = 'users';
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    public function register()
    {
        // Check if the form is submitted
        if (isset($_POST['submit'])) {
            $name = $_POST['username'];
            // $email = $_POST['email'];
            $password = $_POST['password'];
            $query = "INSERT INTO $this->table (role_id ,username, password) VALUES ( 3,'$name', '$password')";
            $this->db->query($query);
            $this->db->execute();
        }
    }

}
?>