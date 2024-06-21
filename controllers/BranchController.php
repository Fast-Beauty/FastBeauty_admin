<?php

require_once 'models/BranchModel.php';
class BranchController {

    private $modelosvc;
    public function __CONSTRUCT() {
        $this->modelosvc = new BranchModel();
    }

    public function index() {
        require_once('views/components/layout/head.php');
        require_once('views/branch/index.php');
        require_once('views/components/layout/footer.php');
    }

    public function show() {
        require_once('views/components/layout/head.php');
        require_once('views/branch/show.php');
        require_once('views/components/layout/footer.php');
    }

    public function edit() {
        require_once('views/components/layout/head.php');
        require_once('views/branch/edit.php');
        require_once('views/components/layout/footer.php');
    }

    public function create() {
        require_once('views/components/layout/head.php');
        require_once('views/branch/create.php');
        require_once('views/components/layout/footer.php');
    }

    public function createupdate() {
        $name = $_POST['name'];
        $nit = $_POST['nit'];
        $addres = $_POST['addres'];
        $google_location = $_POST['google_location'];
        $phone = $_POST['phone'];
        $data = "'".$name."', '".$nit."', '".$addres."', '".$google_location."', '".$phone;

        if(!empty($_POST["btnEditar"])) {

            $id = $_POST['id'];
            $datos = array(
                'name' => $name,
                'nit' => $nit,
                'addres' => $addres,
                'google_location' => $google_location,
                'phone' => $phone,
                'id' => $id
            );

            $this->modelosvc->update($datos);
        } else {
            $this->modelosvc->insert($data);
        }

        header("location:?c=Branch&m=index");
    }
    
    public function delete() {
        $this->modelosvc->delete($_GET['id']);
        
        header("location:?c=Branch&m=index");
    }

}
?>

    
