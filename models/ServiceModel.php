<?php

class ServiceModel {
    private $svc;

    public function __CONSTRUCT() {
        $this->svc = (new db())->conexion();
    }

    public function listar() {
        $sql = $this->svc->query("select * from services"); 
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

    public function insert($data) {
        $sql = $this->svc->query("INSERT INTO services (name, description, price, time) VALUES ($data)"); 
        if($sql) {
            return true;
        } else {
            return false;
        }
    }
}