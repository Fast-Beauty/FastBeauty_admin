<?php
require_once 'models/EmployeesModel.php';



class EmployeesController
{
    private $modelosvc;
    public function __construct()
    {
        $this->modelosvc = new EmployeesModel();
    }

    public function index()
    {
        require_once ('views/components/layout/head.php');
        require_once ('views/employees/index.php');
        require_once ('views/components/layout/footer.php');
    }

    public function show()
    {
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id']; 
            $employees = $this->modelosvc->getEmployeesById($id); // Obtener la información del cliente por su ID
            if ($employees) {
                // Obtener la información adicional del usuario desde la tabla 'users'
                $user = $this->modelosvc->getUserById($employees['users_id']); 
                if ($user) {
                    // Fusionar los datos del cliente y del usuario en un solo array
                    $employeesDetails = array_merge($employees, $user);
    
                    require_once ('views/components/layout/head.php');
                    require_once ('views/employees/show.php'); // Pasar los datos del cliente a la vista show.php
                    require_once ('views/components/layout/footer.php');
                } else {
                    echo "No se encontró la información del usuario asociado al cliente.";
                }
            } else {
                echo "No se encontró el cliente con el ID proporcionado.";
            }
        } else {
            echo "ID de cliente inválido";
        }
    }
    
    public function edit()
{
    if (isset($_GET['id']) && !empty($_GET['id'])) {
        $id = $_GET['id']; // Obtener el ID del cliente de la URL
        $employees = $this->modelosvc->getEmployeesById($id); // Obtener datos del cliente por su ID
         // Obtener todos los usuarios disponibles 
        if ($employees) {
            $users = $this->modelosvc->getUsers();
            $status = $this->modelosvc->getStatus();

            //$clientDetails = array_merge($status, $users);

            require_once('views/components/layout/head.php');
            require_once('views/employees/edit.php');
            require_once('views/components/layout/footer.php');
        } else {
            echo "No se encontró el cliente con el ID proporcionado.";
        }
    } else {
        echo "ID de cliente inválido";
    }
}


    public function create()
    {

        // Consulta para obtener los usuarios
        $users = $this->modelosvc->getUsers(); // Obtener usuarios

        // Incluir la vista
        //header("location:?c=Appointments&m=create");

        require_once ('views/components/layout/head.php');
        require_once ('views/employees/create.php');
        require_once ('views/components/layout/footer.php');
    }

    public function createupdate()
    {
        $user_id = $_POST['user_id']; // ID del usuario seleccionado
        // Llamar al método insert() del modelo y pasar los datos
        $insertado = $this->modelosvc->insert($user_id);

        // Verificar si la inserción fue exitosa
        if ($insertado) {
            // Redireccionar después de la inserción exitosa
            header("location:?c=Employees&m=index");
        } else {
            // Manejar el caso de inserción fallida, si es necesario
            // Por ejemplo, mostrar un mensaje de error
            echo "Error al insertar el cliente";
        }
    }
    public function update()
    {
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            $id = $_POST['id'];
            $status = $_POST['status'];

            $actualizado = $this->modelosvc->updateStatus($id, $status);

            if ($actualizado) {
                header("location:?c=Employees&m=index");
            } else {
                echo "Error al actualizar el cliente";
            }
        } else {
            echo "ID de cliente inválido";
        }
    }

    public function delete()
    {
        $this->modelosvc->delete($_GET['id']);

        header("location:?c=Employees&m=index");
    }




}
