<?php
class StatusModel {
    private $svc;

    public function __construct() {
        $this->svc = (new db())->conexion();
    }

    public function obtenerEstados() {
        // Query para obtener los estados
        $query = "SELECT DISTINCT status FROM appointments";
        $result = $this->svc->query($query);
        $estados = [];

        // Almacenar los resultados en un array
        while ($row = $result->fetch_assoc()) {
            $estados[] = $row['status'];
        }

        return $estados;
    }
}
