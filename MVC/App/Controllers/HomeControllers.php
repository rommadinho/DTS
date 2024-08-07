<?php

class HomeControllers{
    private $userModel;
    public function __construct(){
        $this->userModel = new User();
    }
    public function index(){
        $users = $this->userModel->getAllUsers();
        require '../App/views/Home.php';
        // require '../Views/Home.php';
    }
}
?>