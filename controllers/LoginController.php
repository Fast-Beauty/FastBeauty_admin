<?php

require_once 'models/LoginModel.php';

class LoginController {

    private $modelosvc;

    public function __CONSTRUCT() {
        $this->modelosvc = new LoginModel();
    }

    public function login() {
        require_once('views/login/login.php');
    }

    public function create() {
        $data = json_decode(file_get_contents('php://input'), true);
        $result = $this->modelosvc->insert($data);
    
        if ($result) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false]);
        }    
    }
}