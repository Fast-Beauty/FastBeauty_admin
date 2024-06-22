<?php

require_once 'models/ServiceModel.php';

class ServicesController{

    private $modelosvc;

    public function __CONSTRUCT() {
        $this->modelosvc = new ServiceModel();
    }

    public function index(){  
        require_once('views/components/layout/head.php');
        require_once('views/services/index.php');
        require_once('views/components/layout/footer.php');
    }

    public function show(){

        require_once('views/components/layout/head.php');
        require_once('views/services/show.php');
        require_once('views/components/layout/footer.php');

    }
    
    public function edit(){
        require_once('views/components/layout/head.php');
        require_once('views/services/edit.php');
        require_once('views/components/layout/footer.php');

    }

    public function create(){

        require_once('views/components/layout/head.php');
        require_once('views/services/create.php');
        require_once('views/components/layout/footer.php');

    }

    public function createupdate() {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $time = $_POST['time'];
        $data = "'".$name."', '".$description."', ".$price.", ".$time;

        if(!empty($_POST["btnEditar"])) {

            $id = $_POST['id'];
            $datos = array(
                'name' => $name,
                'description' => $description,
                'price' => $price,
                'time' => $time,
                'id' => $id
            );

            $this->modelosvc->update($datos);
        } else {
            $this->modelosvc->insert($data);
        }

        header("location:?c=Services&m=index");
    }
    
    public function delete() {
        $this->modelosvc->delete($_GET['id']);
        
        header("location:?c=Services&m=index");
    }

}

?>