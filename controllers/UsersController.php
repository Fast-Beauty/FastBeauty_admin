<?php

require_once 'models/UsersModel.php';

class UsersController {
    
    private $modelosvc;

    public function __CONSTRUCT() {
        $this->modelosvc = new UsersModel();
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
        $this->modelosvc->delete($_GET['id']);
        
        header("location:?c=Users&m=index");
    }

    public function createupdate() {
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $type_document = $_POST['type_document'];
        $document = $_POST['document'];
        $status = $_POST['status'];

        if(!empty($_POST["btnEditar"])) {

            $id = $_POST['id'];
            $datos = array(
                'name' => $name,
                'lastname' => $lastname,
                'email' => $email,
                'phone' => $phone,
                'type_document' => $type_document,
                'document' => $document,
                'status' => $status,
                'id' => $id
            );

            $this->modelosvc->update($datos);
        } else {
            $password = $_POST['password'];
            $this->modelosvc->insert($name, $lastname, $email, $phone, $type_document, $document, $password, $status);
        }
        header("location:?c=Users&m=index");
    }
}