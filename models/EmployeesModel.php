<?php

class EmployeesModel {
    private $svc;

    public function __construct() {
        $this->svc = (new db())->conexion();
    }

    public function obtenerTrabajadores() {
        $query = "SELECT u.id, u.name, u.lastname 
FROM users u
INNER JOIN employees e ON u.id = e.users_id
LIMIT 0, 25;
";
        $result = $this->svc->query($query);
        $trabajadores = [];

        while ($row = $result->fetch_assoc()) {
            $trabajadores[$row['id']] = $row['name'] . ' ' . $row['lastname'];
        }

        return $trabajadores;
    }
}

