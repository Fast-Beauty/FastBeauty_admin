<?php

class UserModel {
    private $user;

    public function __CONSTRUCT() {
        $this->user = (new db())->conexion();
    }

    public function obtenerId($id) {
        $sql = $this->user->query("select * from users where id=$id");
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

    public function update($datos) {
        $sql = $this->user->query("UPDATE users SET name='{$datos['name']}', email='{$datos['email']}', phone={$datos['phone']}, document={$datos['document']} WHERE id={$datos['id']}");
    }
}