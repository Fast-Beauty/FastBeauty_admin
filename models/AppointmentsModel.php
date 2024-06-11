<?php
class AppointmentsModel
{
    private $svc;

    public function __construct()
    {
        $this->svc = (new db())->conexion();
    }

    public function listar()
    {
        $query = "
            SELECT 
                a.id,
                a.date,
                a.hora,
                u_cliente.name AS nombre_cliente,
                u_cliente.lastname AS apellido_cliente,
                u_empleado.name AS nombre_empleado,
                u_empleado.lastname AS apellido_empleado,
                s.name AS nombre_servicio,
                a.status
            FROM 
                appointments a
            INNER JOIN 
                clients c ON a.clients_id = c.id
            INNER JOIN 
                users u_cliente ON c.users_id = u_cliente.id
            INNER JOIN 
                employees e ON a.Employees_id = e.id
            INNER JOIN 
                users u_empleado ON e.users_id = u_empleado.id
            INNER JOIN 
                services s ON a.services_id = s.id
            LIMIT 0, 25
        ";

        if ($result = $this->svc->query($query)) {
            $datos = $result->fetch_all(MYSQLI_ASSOC);
            return $datos;
        } else {
            // Si hay un error en la consulta, muestra el error
            echo "Error en la consulta: " . $this->svc->error;
            return [];
        }
    }
    public function insert($status, $date, $hora, $clients_id, $Employees_id, $services_id)
    {
        // Preparar la consulta SQL
        $sql = $this->svc->prepare("INSERT INTO appointments (status, date, hora, clients_id, Employees_id, services_id) VALUES (?, ?, ?, ?, ?, ?)");

        // Vincular los parámetros a los marcadores de posición
        $sql->bind_param("ssiiii", $status, $date, $hora, $clients_id, $Employees_id, $services_id);

        // Ejecutar la consulta preparada
        $resultado = $sql->execute();

        // Verificar si la inserción fue exitosa
        if ($resultado) {
            return true;
        } else {
            return false;
        }
    }



    public function getAppointmentById($id)
    {
        $query = "SELECT * FROM appointments WHERE id = ?";
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
        $sql = "UPDATE appointments SET status='{$datos['status']}', date='{$datos['date']}', hora='{$datos['hora']}', clients_id='{$datos['clients_id']}', Employees_id='{$datos['Employees_id']}', services_id='{$datos['services_id']}' WHERE id='{$datos['id']}'";

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
        $stmt = $this->svc->prepare("DELETE FROM appointments WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $stmt->close();
    }

    public function getClients()
    {
        $query = "SELECT c.id AS clients_id, u.id, u.name, u.lastname FROM users u INNER JOIN clients c ON u.id = c.users_id LIMIT 25";

        return $this->ejecutarConsulta($query);
    }

    public function getStatus()
    {
        // Ejecutar la consulta SQL para obtener los estados
        $query = "SELECT DISTINCT status FROM appointments";
        $result = $this->ejecutarConsulta($query);

        // Verificar si la consulta fue exitosa
        if ($result) {
            return $result; // Devolver el conjunto de resultados directamente
        } else {
            // Manejar el caso de consulta fallida
            return false; // o null, dependiendo de tu lógica
        }
    }


    public function getEmployees()
    {
        $query = "SELECT e.id AS employee_id, u.id, u.name, u.lastname 
            FROM users u
            INNER JOIN employees e ON u.id = e.users_id
            LIMIT 25;
        ";

        return $this->ejecutarConsulta($query);
    }

    public function getServices()
    {
        $query = "
            SELECT id, name FROM services 
        ";

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

