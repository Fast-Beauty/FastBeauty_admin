<?php
class EmployeesImagesModel
{
    private $svc;

    public function __construct()
    {
        $this->svc = (new db())->conexion();
    }

    public function listar()
    {
        $query = "SELECT ei.id, ei.Employees_id, ei.imagen, ei.tipo_imagen, e.users_id, u.name AS user_name, u.lastname AS user_lastname, u.status
                  FROM employees_images ei 
                  INNER JOIN employees e ON ei.Employees_id = e.id 
                  INNER JOIN users u ON e.users_id = u.id 
                  LIMIT 0, 25;";
        if ($result = $this->svc->query($query)) {
            $datos = $result->fetch_all(MYSQLI_ASSOC);
            return $datos;
        } else {
            echo "Error en la consulta: " . $this->svc->error;
            return [];
        }
    }

    public function insert($Employees_id, $imagen, $tipo_imagen)
    {
        // Verificar si el Employees_id existe en la tabla employees
        $query = "SELECT id FROM employees WHERE id = ?";
        $stmt = $this->svc->prepare($query);
        $stmt->bind_param("i", $Employees_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            throw new Exception("El ID de empleado no existe en la tabla employees.");
        }

        // Si existe, proceder a insertar
        $sql = $this->svc->prepare("INSERT INTO employees_images (Employees_id, imagen, tipo_imagen) VALUES (?, ?, ?)");
        $sql->bind_param("iss", $Employees_id, $imagen, $tipo_imagen);
        if ($sql->execute()) {
            return true;
        } else {
            throw new Exception("Error al insertar la imagen: " . $this->svc->error);
        }
    }

    public function getEmployeesImageById($id)
    {
        $query = "SELECT * FROM employees_images WHERE id = ?";
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
    public function employeeExists($employee_id)
    {
        $query = "SELECT id FROM employees WHERE id = ?";
        $stmt = $this->svc->prepare($query);
        $stmt->bind_param("i", $employee_id);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->num_rows > 0;
    }
    public function getEmployeesWithUserInfo()
    {
        $query = "SELECT e.id, e.users_id, u.name AS user_name, u.lastname AS user_lastname, u.status 
                  FROM employees e
                  INNER JOIN users u ON e.users_id = u.id";
        if ($result = $this->svc->query($query)) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            echo "Error en la consulta: " . $this->svc->error;
            return [];
        }
    }
    public function obtenerPorId($id) {
        $query = "SELECT ei.id, ei.Employees_id, ei.imagen, ei.tipo_imagen, e.users_id, u.name AS user_name, u.lastname AS user_lastname, u.status
                  FROM employees_images ei 
                  INNER JOIN employees e ON ei.Employees_id = e.id 
                  INNER JOIN users u ON e.users_id = u.id 
                  WHERE ei.id = ?";
        
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
        $sql = "UPDATE employees_images SET ";
        $params = [];
        $types = '';

        if (!is_null($datos['imagen'])) {
            $sql .= "imagen = ?, tipo_imagen = ?, ";
            $params[] = base64_decode($datos['imagen']); // Decodificar la imagen base64 antes de guardarla
            $params[] = $datos['tipo_imagen'];
            $types .= 'ss';
        }

        $sql = rtrim($sql, ', ') . " WHERE id = ?";
        $params[] = $datos['id'];
        $types .= 'i';

        $stmt = $this->svc->prepare($sql);
        $stmt->bind_param($types, ...$params);

        if ($stmt->execute()) {
            return true;
        } else {
            echo "Error al actualizar la imagen: " . $this->svc->error;
            return false;
        }
    }
    public function getUsers()
    {
        $query = "SELECT DISTINCT id, name, lastname, document, status FROM users WHERE status IN ('active', 'inactive')";
        return $this->ejecutarConsulta($query);
    }

    public function delete($id)
    {
        $stmt = $this->svc->prepare("DELETE FROM employees_images WHERE id = ?");
        $stmt->bind_param("i", $id);
        if ($stmt->execute()) {
            return true; // Eliminación exitosa
        } else {
            echo "Error al eliminar la imagen: " . $stmt->error;
            return false; // Error al eliminar
        }
        $stmt->close();
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
