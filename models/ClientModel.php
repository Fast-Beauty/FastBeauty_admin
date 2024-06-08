<?php
class ClientModel {
    private $svc;

    public function __construct() {
        $this->svc = (new db())->conexion();
    }

    public function obtenerClientes() {
        // Query para obtener los clientes
        $query = "SELECT u.id, u.name, u.lastname 
        FROM users u
        INNER JOIN clients c ON u.id = c.users_id
        LIMIT 0, 25;";
        $result = $this->svc->query($query);
        $clientes = [];
        var_dump($clientes);

        // Almacenar los resultados en un array
        while ($row = $result->fetch_assoc()) {
            $clientes[$row['id']] = $row['name'] . ' ' . $row['lastname'];
        }
  
        return $clientes;
    }
}
