<?php
require_once 'models/AppointmentsModel.php';



class AppointmentsController
{
    private $modelosvc;
    public function __construct()
    {
        $this->modelosvc = new AppointmentsModel();
    }

    public function index()
    {
        require_once ('views/components/layout/head.php');
        require_once ('views/appointments/index.php');
        require_once ('views/components/layout/footer.php');
    }

    public function show()
    {
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id']; // Obtener el ID de la cita de la URL
            $appointment = $this->modelosvc->getAppointmentById($id);

            if ($appointment) {
                $clients = $this->modelosvc->getClients();
                $status = $this->modelosvc->getStatus(); 
                $employees = $this->modelosvc->getEmployees();
                $services = $this->modelosvc->getServices();

                require_once ('views/components/layout/head.php');
                require_once ('views/appointments/show.php');
                require_once ('views/components/layout/footer.php');
            } else {
                // Manejar el caso de no encontrar la cita con el ID proporcionado
                // Redireccionar a una página de error o mostrar un mensaje de error amigable
                echo "No se encontró la cita con el ID proporcionado.";
            }
        } else {
            // Manejar el caso de no recibir un ID válido en la URL
            // Redireccionar a una página de error o mostrar un mensaje de error amigable
            echo "ID de cita inválido";
        }

       
    }
    public function edit()
    {
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id']; // Obtener el ID de la cita de la URL
            $appointment = $this->modelosvc->getAppointmentById($id);

            if ($appointment) {
                $clients = $this->modelosvc->getClients();
                $status = $this->modelosvc->getStatus(); 
                $employees = $this->modelosvc->getEmployees();
                $services = $this->modelosvc->getServices();

                require_once('views/components/layout/head.php');
                require_once('views/appointments/edit.php');
                require_once('views/components/layout/footer.php');
            } else {
                // Manejar el caso de no encontrar la cita con el ID proporcionado
                // Redireccionar a una página de error o mostrar un mensaje de error amigable
                echo "No se encontró la cita con el ID proporcionado.";
            }
        } else {
            // Manejar el caso de no recibir un ID válido en la URL
            // Redireccionar a una página de error o mostrar un mensaje de error amigable
            echo "ID de cita inválido";
        }
    }


    public function create()
    {
        $modelo = new AppointmentsModel();

        // Consulta para obtener los clientes
        $clients = $this->modelosvc->getClients();
        $statuses = $this->modelosvc->getStatus();
        $employees = $this->modelosvc->getEmployees();
        $services = $this->modelosvc->getServices();

        // Incluir la vista
        //header("location:?c=Appointments&m=create");

        require_once ('views/components/layout/head.php');
        require_once ('views/appointments/create.php');
        require_once ('views/components/layout/footer.php');
    }

    public function createupdate()
    {
        // Recoger los datos del formulario
        $status = $_POST['status'];
        $date = $_POST['date'];
        $hora = $_POST['hora'];
        $clients_id = $_POST['clients_id'];
        $Employees_id = $_POST['Employees_id'];
        $services_id = $_POST['services_id'];

        // Llamar al método insert() del modelo y pasar los datos
        $insertado = $this->modelosvc->insert($status, $date, $hora, $clients_id, $Employees_id, $services_id);

        // Verificar si la inserción fue exitosa
        if ($insertado) {
            // Redireccionar después de la inserción exitosa
            header("location:?c=Appointments&m=index");
        } else {
            // Manejar el caso de inserción fallida, si es necesario
            // Por ejemplo, mostrar un mensaje de error
            echo "Error al insertar la cita";
        }
    }
    public function update()
    {
        // Verificar si se recibió un ID válido para la cita a editar
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            // Recoger los datos del formulario
            $id = $_POST['id'];
            $status = $_POST['status'];
            $date = $_POST['date'];
            $hora = $_POST['hora'];
            $clients_id = $_POST['clients_id'];
            $Employees_id = $_POST['Employees_id'];
            $services_id = $_POST['services_id'];

            // Crear un array con los datos actualizados
            $datos = array(
                'id' => $id,
                'status' => $status,
                'date' => $date,
                'hora' => $hora,
                'clients_id' => $clients_id,
                'Employees_id' => $Employees_id,
                'services_id' => $services_id
            );

            // Llamar al método update() del modelo y pasar los datos actualizados
            $actualizado = $this->modelosvc->update($datos);

            // Verificar si la actualización fue exitosa
            if ($actualizado) {
                // Redireccionar después de la actualización exitosa
                header("location:?c=Appointments&m=index");
            } else {
                // Manejar el caso de actualización fallida, si es necesario
                // Por ejemplo, mostrar un mensaje de error
                echo "Error al actualizar la cita";
            }
        } else {
            // Manejar el caso de no recibir un ID válido
            // Por ejemplo, redireccionar a una página de error
            echo "ID de cita inválido";
        }
    }

    public function delete()
    {
        $this->modelosvc->delete($_GET['id']);

        header("location:?c=Appointments&m=index");
    }




}
