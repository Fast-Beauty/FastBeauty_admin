<?php

class LoginModel
{
    private $svc;

    public function __CONSTRUCT()
    {
        $this->svc = (new db())->conexion();
    }

    public function insert($data)
    {
        $hashedPassword = password_hash($data['password'], PASSWORD_BCRYPT);
        $stmt = $this->svc->prepare("INSERT INTO users (name, lastname, email, phone, type_document, document, password, status, rol_rol_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssisissi", $data['name'], $data['lastname'], $data['email'], $data['phone'], $data['type_document'], $data['document'], $hashedPassword, $data['status'], $data['rol_rol_id']);
        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }
}