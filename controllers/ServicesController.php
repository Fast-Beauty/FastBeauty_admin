<?php

require_once 'models/ServicesModel.php';

class ServicesController{

    private $modelosvc;

    public function __CONSTRUCT() {
        $this->modelosvc = new ServicesModel();
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
        $branch_office_id = $_POST['branch_office_id'];
        $data = "'".$name."', '".$description."', '".$price."', '".$time."', ".$branch_office_id;

        if(!empty($_POST["btnEditar"])) {

            $id = $_POST['id'];
            $datos = array(
                'name' => $name,
                'description' => $description,
                'price' => $price,
                'time' => $time,
                'branch_office_id' => $branch_office_id,
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