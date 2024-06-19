<?php

require_once 'models/MarkModel.php';

class MarkController{

    private $modelosvc;

    public function __CONSTRUCT() {
        $this->modelosvc = new MarkModel();
    }

    public function index(){  
        require_once('views/components/layout/head.php');
        require_once('views/mark/index.php');
        require_once('views/components/layout/footer.php');
    }

    public function show(){

        require_once('views/components/layout/head.php');
        require_once('views/mark/show.php');
        require_once('views/components/layout/footer.php');

    }
    
    public function edit(){
        require_once('views/components/layout/head.php');
        require_once('views/mark/edit.php');
        require_once('views/components/layout/footer.php');

    }

    public function create(){

        require_once('views/components/layout/head.php');
        require_once('views/mark/create.php');
        require_once('views/components/layout/footer.php');

    }

    public function createupdate() {
        $name = $_POST['name'];
        $data = "'".$name."'";

        if(!empty($_POST["btnEditar"])) {

            $id = $_POST['id'];
            $datos = array(
                'name' => $name,
                'id' => $id
            );

            $this->modelosvc->update($datos);
        } else {
            $this->modelosvc->insert($data);
        }

        header("location:?c=Mark&m=index");
    }
    
    public function delete() {
        $this->modelosvc->delete($_GET['id']);
        
        header("location:?c=Mark&m=index");
    }

}
