<?php

class ServicesController{

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


}

?>