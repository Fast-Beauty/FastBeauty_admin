<?php

class ServicesModel {
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
        $sql = $this->svc->query("INSERT INTO services (name, description, price, time, branch_office_id) VALUES ($data)"); 
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

    public function update($datos) {
        $sql = $this->svc->query("UPDATE services SET name='{$datos['name']}', description='{$datos['description']}', price={$datos['price']}, time={$datos['time']}, branch_office_id='{$datos['branch_office_id']}' WHERE id={$datos['id']}");
    }

    public function delete($id) {
        $sql = $this->svc->query("DELETE FROM services WHERE id=$id");
    }

    public function obtenerSucursal($id) {
        $sql = $this->svc->query("SELECT  
                    branch_office.name AS sucursal_servicio
                FROM 
                    services
                INNER JOIN 
                    branch_office ON services.branch_office_id = branch_office.id
                WHERE 
                    services.id = $id");
        $datos = $sql->fetch_assoc();
        return $datos['sucursal_servicio'];
    }


    public function obtenerSucursales() {
        $sql = $this->svc->query("select * from branch_office"); 
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

}