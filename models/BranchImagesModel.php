<?php

class BranchImagesModel {
    private $svc;

    public function __CONSTRUCT() {
        $this->svc = (new db())->conexion();
    }

    public function listar() {    
        $sql = $this->svc->query("select * from branch_images"); 
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

    public function insert($imagen, $tipo_imagen, $branch_office_id) {
        $stmt = $this->svc->prepare("INSERT INTO branch_images (imagen, tipo_imagen, branch_office_id) VALUES (?, ?, ?)");

        $stmt->bind_param("bsi", $imagen, $tipo_imagen, $branch_office_id);

        $stmt->send_long_data(0, $imagen);

        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } else {
            $stmt->close();
            return false;
        }
    }

    public function obtenerId($id) {
        $sql = $this->svc->query("select * from branch_images where id=$id");
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

    public function update($id, $imagen, $tipo_imagen, $branch_office_id) {
        $stmt = $this->svc->prepare("UPDATE branch_images SET imagen = ?, tipo_imagen = ?, branch_office_id = ? WHERE id = ?");
    
        $stmt->bind_param("bsii", $imagen, $tipo_imagen, $branch_office_id, $id);

        $stmt->send_long_data(0, $imagen);

        if ($stmt->execute()) {
            $stmt->close();
            return true;
        } else {
            $stmt->close();
            return false;
        }
    }

    public function delete($id) {
        $sql = $this->svc->query("DELETE FROM branch_images WHERE id=$id");
    }

    public function obtenerSucursal($id) {
        $sql = $this->svc->query("SELECT  
                    branch_office.name AS branch_office
                FROM 
                    branch_images
                INNER JOIN 
                    branch_office ON branch_images.branch_office_id = branch_office.id
                WHERE 
                    branch_images.id = $id");
        $datos = $sql->fetch_assoc();
        return $datos['branch_office'];
    }

    public function obtenerSucursales() {
        $sql = $this->svc->query("select * from branch_office"); 
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

}