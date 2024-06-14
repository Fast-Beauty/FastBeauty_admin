<?php

require_once 'models/ProductsImagesModel.php';

class ProductsImagesController {

    private $modelosvc;

    public function __CONSTRUCT() {
        $this->modelosvc = new ProductsImagesModel();
    }

    public function index() {
        require_once('views/components/layout/head.php');
        require_once('views/products_images/index.php');
        require_once('views/components/layout/footer.php');
    }

    public function show(){
        require_once('views/components/layout/head.php');
        require_once('views/products_images/show.php');
        require_once('views/components/layout/footer.php');
    }

    public function create(){
        require_once('views/components/layout/head.php');
        require_once('views/products_images/create.php');
        require_once('views/components/layout/footer.php');
    }

    public function createupdate() {
        $imagen = file_get_contents($_FILES['imagen']['tmp_name']);
        $tipo_imagen = mime_content_type($_FILES['imagen']['tmp_name']);
        $productos_id = $_POST['productos_id'];

        if(!empty($_POST["btnEditar"])) {

            $id = $_POST['id'];

            $this->modelosvc->update($id, $imagen, $tipo_imagen, $productos_id);
        } else {
            $this->modelosvc->insert($imagen, $tipo_imagen, $productos_id);
        }

        header("location:?c=ProductsImages&m=index");
    }

    public function edit(){
        require_once('views/components/layout/head.php');
        require_once('views/products_images/edit.php');
        require_once('views/components/layout/footer.php');
    }
    public function delete() {
        $this->modelosvc->delete($_GET['id']);
        
        header("location:?c=ProductsImages&m=index");
    }
}