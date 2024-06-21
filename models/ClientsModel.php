<?php
class ClientModel
{
    private $svc;

    public function __construct()
    {
        $this->svc = (new db())->conexion();
    }

    public function listar()
    {
        // Query para obtener los clientes
        $query = "SELECT u.id AS user_id, u.name AS user_name, u.lastname AS user_lastname, u.status, c.id AS client_id, c.gender, c.date_birth FROM users u INNER JOIN clients c ON u.id = c.users_id LIMIT 0, 25;";
        if ($result = $this->svc->query($query)) {
            $datos = $result->fetch_all(MYSQLI_ASSOC);
            return $datos;
        } else {
            // Si hay un error en la consulta, muestra el error
            echo "Error en la consulta: " . $this->svc->error;
            return [];
        }
    }
    public function insert($user_id, $client_gender, $client_datebirth)
    {
        // Preparar la consulta SQL
        $sql = $this->svc->prepare("INSERT INTO clients (users_id, gender, date_birth) VALUES (?, ?, ?)");

        // Vincular los parámetros a los marcadores de posición
        $sql->bind_param("iss",$user_id, $client_gender, $client_datebirth);

        // Ejecutar la consulta preparada
        $resultado = $sql->execute();

        // Verificar si la inserción fue exitosa
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }



    public function getClientsById($id)
    {
        $query = "SELECT * FROM clients WHERE id = ?";
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
        $sql = "UPDATE clients SET date_birth='{$datos['date_birth']}', gender='{$datos['gender']}', users_id='{$datos['users_id']}' WHERE id='{$datos['id']}'";

        if ($this->svc->query($sql)) {
            // La actualización fue exitosa
            return true;
        } else {
            // La actualización falló
            echo "Error al actualizar la cita: " . $this->svc->error;
            return false;
        }
    }

    public function delete($id)
    {
        $stmt = $this->svc->prepare("DELETE FROM clients WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }

    public function getClients()
    {
        $query = "SELECT c.id AS clients_id, u.id, u.name, u.lastname FROM users u INNER JOIN clients c ON u.id = c.users_id LIMIT 25";

        return $this->ejecutarConsulta($query);
    }
    public function getUsers()
    {
        $query = "SELECT id, name, lastname, document, status FROM users";
        return $this->ejecutarConsulta($query);
    }
    public function getUserById($userId)
    {
        $query = "SELECT id, name, lastname, document, status FROM users WHERE id = ?";
        $stmt = $this->svc->prepare($query);
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows === 1) {
            return $result->fetch_assoc();
        } else {
            return null;
        }
    }
    

    public function getStatus()
    {
        // Ejecutar la consulta SQL para obtener los estados
        $query = "SELECT DISTINCT status FROM users";
        $result = $this->ejecutarConsulta($query);

        // Verificar si la consulta fue exitosa
        if ($result) {
            return $result; // Devolver el conjunto de resultados directamente
        } else {
            // Manejar el caso de consulta fallida
            return false; // o null, dependiendo de tu lógica
        }
    }
    public function getGenders()
{
    $query = "SELECT DISTINCT gender FROM clients";
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
