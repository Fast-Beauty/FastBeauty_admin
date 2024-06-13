<?php

require_once 'models/ProductsModel.php';

class ProductsController {

    private $modelosvc;

    public function __CONSTRUCT() {
        $this->modelosvc = new ProductsModel();
    }

    public function index() {
        require_once('views/components/layout/head.php');
        require_once('views/products/index.php');
        require_once('views/components/layout/footer.php');
    }

    public function show(){
        require_once('views/components/layout/head.php');
        require_once('views/products/show.php');
        require_once('views/components/layout/footer.php');
    }

    public function create(){
        require_once('views/components/layout/head.php');
        require_once('views/products/create.php');
        require_once('views/components/layout/footer.php');
    }

    public function createupdate() {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];
        $date = $_POST['date'];
        $category = $_POST['category'];
        $mark_id = $_POST['mark_id'];
        $branch_office_id = $_POST['branch_office_id'];
        $data = "'".$name."', '".$description."', '".$price."', '".$quantity."', '".$date."', '".$category."', '".$mark_id."', ".$branch_office_id;

        if(!empty($_POST["btnEditar"])) {

            $id = $_POST['id'];
            $datos = array(
                'name' => $name,
                'description' => $description,
                'price' => $price,
                'quantity' => $quantity,
                'date' => $date,
                'category' => $category,
                'mark_id' => $mark_id,
                'branch_office_id' => $branch_office_id,
                'id' => $id
            );

            $this->modelosvc->update($datos);
        } else {
            $this->modelosvc->insert($data);
        }

        header("location:?c=Products&m=index");
    }

    public function edit(){
        require_once('views/components/layout/head.php');
        require_once('views/products/edit.php');
        require_once('views/components/layout/footer.php');
    }
    public function delete() {
        $this->modelosvc->delete($_GET['id']);
        
        header("location:?c=Products&m=index");
    }
}