<?php

require_once 'models/BranchImagesModel.php';

class BranchImagesController {

    private $modelosvc;

    public function __CONSTRUCT() {
        $this->modelosvc = new BranchImagesModel();
    }

    public function index() {
        require_once('views/components/layout/head.php');
        require_once('views/branch_images/index.php');
        require_once('views/components/layout/footer.php');
    }

    public function show(){
        require_once('views/components/layout/head.php');
        require_once('views/branch_images/show.php');
        require_once('views/components/layout/footer.php');
    }

    public function create(){
        require_once('views/components/layout/head.php');
        require_once('views/branch_images/create.php');
        require_once('views/components/layout/footer.php');
    }

    public function createupdate() {
        $imagen = file_get_contents($_FILES['imagen']['tmp_name']);
        $tipo_imagen = mime_content_type($_FILES['imagen']['tmp_name']);
        $branch_office_id = $_POST['branch_office_id'];

        if(!empty($_POST["btnEditar"])) {

            $id = $_POST['id'];

            $this->modelosvc->update($id, $imagen, $tipo_imagen, $branch_office_id);
        } else {
            $this->modelosvc->insert($imagen, $tipo_imagen, $branch_office_id);
        }

        header("location:?c=BranchImages&m=index");
    }

    public function edit(){
        require_once('views/components/layout/head.php');
        require_once('views/branch_images/edit.php');
        require_once('views/components/layout/footer.php');
    }
    public function delete() {
        $this->modelosvc->delete($_GET['id']);
        
        header("location:?c=BranchImages&m=index");
    }
}