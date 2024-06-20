<?php

class UsersModel {
    private $svc;

    public function __CONSTRUCT() {
        $this->svc = (new db())->conexion();
    }

    public function listar() {
        $sql = $this->svc->query("select * from users"); 
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

    public function insert($name, $lastname, $email, $phone, $type_document, $document, $password, $status) {
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    
        $stmt = $this->svc->prepare("INSERT INTO users (name, lastname, email, phone, type_document, document, password, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssisiss", $name, $lastname, $email, $phone, $type_document, $document, $hashedPassword, $status);
    
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
    

    public function obtenerId($id) {
        $sql = $this->svc->query("select * from users where id=$id");
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

    public function update($datos) {
        $sql = $this->svc->query("UPDATE users SET name='{$datos['name']}', lastname='{$datos['lastname']}', email='{$datos['email']}', phone={$datos['phone']}, type_document='{$datos['type_document']}', document={$datos['document']}, status='{$datos['status']}' WHERE id={$datos['id']}");
    }

    public function delete($id) {
        $sql = $this->svc->query("DELETE FROM users WHERE id=$id");
    }


}