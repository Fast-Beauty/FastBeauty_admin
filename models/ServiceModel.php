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

    public function obtenerId($id) {
        $sql = $this->svc->query("select * from services where id=$id");
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

    public function update($datos, $id) {
        $sql = $this->svc->query("update services set name='$name', description='$description', price=$price, time=$time where id=$id");
    }
}