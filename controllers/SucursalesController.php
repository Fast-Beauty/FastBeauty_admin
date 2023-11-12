<?php

class SucursalesController {
    public function index() {
        require_once('views/components/layout/head.php');
        require_once('views/sucursales/index.php');
        require_once('views/components/layout/footer.php');
    }

    public function show() {
        require_once('views/components/layout/head.php');
        require_once('views/sucursales/show.php');
        require_once('views/components/layout/footer.php');
    }
    
    public function edit() {
        require_once('views/components/layout/head.php');
        require_once('views/sucursales/edit.php');
        require_once('views/components/layout/footer.php');
    }

    public function create() {
        require_once('views/components/layout/head.php');
        require_once('views/sucursales/create.php');
        require_once('views/components/layout/footer.php');
    }
}