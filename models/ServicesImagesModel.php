<?php

class ServicesImagesModel {
    private $svc;

    public function __CONSTRUCT() {
        $this->svc = (new db())->conexion();
    }

    public function listar() {    
        $sql = $this->svc->query("select * from services_images"); 
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

    public function insert($imagen, $tipo_imagen, $services_id) {
        $stmt = $this->svc->prepare("INSERT INTO services_images (imagen, tipo_imagen, services_id) VALUES (?, ?, ?)");

        $stmt->bind_param("bsi", $imagen, $tipo_imagen, $services_id);

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
        $sql = $this->svc->query("select * from services_images where id=$id");
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

    public function update($id, $imagen, $tipo_imagen, $services_id) {
        $stmt = $this->svc->prepare("UPDATE services_images SET imagen = ?, tipo_imagen = ?, services_id = ? WHERE id = ?");
    
        $stmt->bind_param("bsii", $imagen, $tipo_imagen, $services_id, $id);

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
        $sql = $this->svc->query("DELETE FROM services_images WHERE id=$id");
    }

    public function obtenerServicio($id) {
        $sql = $this->svc->query("SELECT  
                    services.name AS services
                FROM 
                    services_images
                INNER JOIN 
                    services ON services_images.services_id = services.id
                WHERE 
                    services_images.id = $id");
        $datos = $sql->fetch_assoc();
        return $datos['services'];
    }

    public function obtenerServicios() {
        $sql = $this->svc->query("select * from services"); 
        $datos = $sql->fetch_all(MYSQLI_ASSOC);
        return $datos;
    }

}