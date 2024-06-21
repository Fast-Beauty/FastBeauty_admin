<?php
class EmployeesModel
{
    private $svc;

    public function __construct()
    {
        $this->svc = (new db())->conexion();
    }

    public function listar()
    {
        // Query para obtener los clientes
        $query = "SELECT u.id AS user_id, u.name AS user_name, u.lastname AS user_lastname, u.document, u.status, e.id AS employees_id FROM users u INNER JOIN employees e ON u.id = e.users_id LIMIT 0, 25;";
        if ($result = $this->svc->query($query)) {
            $datos = $result->fetch_all(MYSQLI_ASSOC);
            return $datos;
        } else {
            // Si hay un error en la consulta, muestra el error
            echo "Error en la consulta: " . $this->svc->error;
            return [];
        }
    }
    public function insert($user_id)
    {
        // Preparar la consulta SQL
        $sql = $this->svc->prepare("INSERT INTO employees (users_id) VALUES (?)");

        // Vincular los parámetros a los marcadores de posición
        $sql->bind_param("i",$user_id);

        // Ejecutar la consulta preparada
        $resultado = $sql->execute();

        // Verificar si la inserción fue exitosa
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }



    public function getEmployeesById($id)
    {
        $query = "SELECT * FROM employees WHERE id = ?";
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
        $sql = "UPDATE employees SET users_id='{$datos['users_id']}' WHERE id='{$datos['id']}'";

        if ($this->svc->query($sql)) {
            // La actualización fue exitosa
            return true;
        } else {
            // La actualización falló
            echo "Error al actualizar la cita: " . $this->svc->error;
            return false;
        }
    }
    public function updateStatus($employeeId, $status)
    {
        $employee = $this->getEmployeesById($employeeId);
        if ($employee) {
            $userId = $employee['users_id'];
            $sql = "UPDATE users SET status = ? WHERE id = ?";
            $stmt = $this->svc->prepare($sql);
            $stmt->bind_param('si', $status, $userId);

            return $stmt->execute();
        }
        return false;
    }

    public function delete($id)
    {
        $stmt = $this->svc->prepare("DELETE FROM employees WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }
    public function getUsers()
    {
        $query = "SELECT DISTINCT id, name, lastname, document, status FROM users WHERE status IN ('active', 'inactive')";
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
        $query = "SELECT DISTINCT status FROM users WHERE status IN ('active', 'inactive')";
        $result = $this->ejecutarConsulta($query);

        // Verificar si la consulta fue exitosa
        if ($result) {
            return $result; // Devolver el conjunto de resultados directamente
        } else {
            // Manejar el caso de consulta fallida
            return false; // o null, dependiendo de tu lógica
        }
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
