<?php 
use App\core\Controller;
use App\config\Config;
class Home extends Controller{
    public function index(){
        $this->view('home/index');
        
    }
    public function register(){
        $user = $this->model('Users');
        $user->register();
        $config = new Config();
        $baseURL = $config->getBaseURL();
        header('location: ' . $baseURL . '/');
        exit;
    }
}
?>