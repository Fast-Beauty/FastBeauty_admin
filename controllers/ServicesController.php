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

    public function createCode() {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $time = $_POST['time'];
        $data = "'".$name."', '".$description."', ".$price.", ".$time;
        $this->modelosvc->insert($data);

        header("location:?c=Services&m=index");
    }

}

?>