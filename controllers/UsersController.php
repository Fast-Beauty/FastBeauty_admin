<?php

require_once 'models/UserModel.php';

class UsersController {

    private $modelouser;

    public function __CONSTRUCT() {
        $this->modelouser = new UserModel();
    }

    public function index() {
        require_once('views/components/layout/head.php');
        require_once('views/users/index.php');
        require_once('views/components/layout/footer.php');
    }

    public function show() {
        require_once('views/components/layout/head.php');
        require_once('views/users/show.php');
        require_once('views/components/layout/footer.php');
    }
    
    public function edit() {
        require_once('views/components/layout/head.php');
        require_once('views/users/edit.php');
        require_once('views/components/layout/footer.php');
    }

    public function create() {
        require_once('views/components/layout/head.php');
        require_once('views/users/create.php');
        require_once('views/components/layout/footer.php');
    }

    public function delete() {
        require_once('views/users/code/code_delete.php');
    }

    public function update() {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $document = $_POST['document'];

        $id = $_POST['id'];
        $datos = array(
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'document' => $document,
            'id' => $id
        );

        $this->modelouser->update($datos);

        header("location:?c=Users&m=index");
    }
}