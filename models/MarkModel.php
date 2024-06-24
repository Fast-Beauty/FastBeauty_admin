<?php

class MarkModel {
    private $svc;

    public function __CONSTRUCT() {
        $this->svc = (new db())->conexion();
    }

    public function listar() {
        $sql = $this->svc->query("select * from mark"); 
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

    public function insert($data) {
        $sql = $this->svc->query("INSERT INTO mark (name) VALUES ($data)"); 
        if($sql) {
            return true;
        } else {
            return false;
        }
    }

    public function obtenerId($id) {
        $sql = $this->svc->query("select * from mark where id=$id");
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

    public function update($datos) {
        $sql = $this->svc->query("UPDATE mark SET name='{$datos['name']}' WHERE id={$datos['id']}");
    }

    public function delete($id) {
        $sql = $this->svc->query("DELETE FROM mark WHERE id=$id");
    }
}