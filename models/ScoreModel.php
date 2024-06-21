<?php

class ScoreModel
{
    private $svc;

    public function __CONSTRUCT()
    {
        $this->svc = (new db())->conexion();
    }

    public function listar()
    {
        $query = "
            SELECT 
                a.id, a.punctuation,
                u_cliente.name AS nombre_cliente, 
                u_cliente.lastname AS apellido_cliente, 
                s.name AS nombre_servicio 
            FROM 
                score a INNER JOIN clients c ON a.clients_id = c.id 
            INNER JOIN 
                users u_cliente ON c.users_id = u_cliente.id 
            INNER JOIN 
                services s ON a.services_id = s.id LIMIT 0, 25";

        if ($result = $this->svc->query($query)) {
        $datos = $result->fetch_all(MYSQLI_ASSOC);
        return $datos;
        } else {
        // Si hay un error en la consulta, muestra el error
        echo "Error en la consulta: " . $this->svc->error;
        return [];
        }
}


public function insert( $punctuation,  $services_id, $clients_id)
{
    // Preparar la consulta SQL
    $sql = $this->svc->prepare("INSERT INTO score (punctuation, clients_id, services_id) VALUES (?, ?, ?)");

    // Vincular los parámetros a los marcadores de posición
    $sql->bind_param("ssiiii", $punctuation,  $services_id, $clients_id );

    // Ejecutar la consulta preparada
    $resultado = $sql->execute();

    // Verificar si la inserción fue exitosa
    if ($resultado) {
        return true;
    } else {
        return false;
    }
}



public function getScoreById($id)
{
    $query = "SELECT * FROM score WHERE id = ?";
    $stmt = $this->svc->prepare($query);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}


public function update($datos)
{
    $sql = "UPDATE score SET punctuation='{$datos['punctuation']}', services_id='{$datos['services_id']}', clients_id='{$datos['clients_id']}' WHERE id='{$datos['id']}'";

    if ($this->svc->query($sql)) {
        // La actualización fue exitosa
        return true;
    } else {
        // La actualización falló
        echo "Error al actualizar el puntaje " . $this->svc->error;
        return false;
    }
}

public function delete($id)
{
    $stmt = $this->svc->prepare("DELETE FROM score WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
}

public function getPunctuation()
{
    $query = "
        SELECT id, punctuation FROM score 
    ";

    return $this->ejecutarConsulta($query);
}

public function getServices_id()
{
    $query = "SELECT c.id AS services_id, u.id, u.name FROM services u INNER JOIN score c ON u.id = c.services_id LIMIT 25;";
    

    return $this->ejecutarConsulta($query);
}

public function getClients_id()
{
    $query = "SELECT c.id AS clients_id, u.id, u.name, u.lastname FROM users u INNER JOIN clients c ON u.id = c.users_id LIMIT 25";

    return $this->ejecutarConsulta($query);
}




private function ejecutarConsulta($query)
{
    if ($result = $this->svc->query($query)) {
        $datos = $result->fetch_all(MYSQLI_ASSOC);
        return $datos;
    } else {
        // Si hay un error en la consulta, muestra el error
        echo "Error en la consulta: " . $this->svc->error;
        return [];
    }
}
}