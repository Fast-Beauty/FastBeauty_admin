<?php

class LoginModel {
    private $svc;

    public function __CONSTRUCT() {
        $this->svc = (new db())->conexion();
    }

    public function insert($data) {
        $hashedPassword = password_hash($data['password'], PASSWORD_BCRYPT);
        $stmt = $this->svc->prepare("INSERT INTO users (name, lastname, email, phone, type_document, document, password, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssisiss", $data['name'], $data['lastname'], $data['email'], $data['phone'], $data['type_document'], $data['document'], $hashedPassword, $data['status']);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }        
    }
}