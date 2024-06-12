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
            $employees = $this->modelosvc->getClientsById($id); // Obtener la información del cliente por su ID
            if ($employees) {
                // Obtener la información adicional del usuario desde la tabla 'users'
                $user = $this->modelosvc->getUserById($client['users_id']); 
                if ($user) {
                    // Fusionar los datos del cliente y del usuario en un solo array
                    $clientDetails = array_merge($client, $user);
    
                    require_once ('views/components/layout/head.php');
                    require_once ('views/Clients/show.php'); // Pasar los datos del cliente a la vista show.php
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
        $employees = $this->modelosvc->getClientsById($id); // Obtener datos del cliente por su ID
         // Obtener todos los usuarios disponibles 
        if ($employees) {
            $users = $this->modelosvc->getUsers();
            $status = $this->modelosvc->getStatus();
            $genders = $this->modelosvc->getGenders(); 
            //$clientDetails = array_merge($status, $users);

            require_once('views/components/layout/head.php');
            require_once('views/clients/edit.php');
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
        require_once ('views/clients/create.php');
        require_once ('views/components/layout/footer.php');
    }

    public function createupdate()
    {
        $user_id = $_POST['user_id']; // ID del usuario seleccionado
        $client_gender = $_POST['client_gender']; // Género del cliente
        $client_datebirth = $_POST['client_datebirth'];

        // Llamar al método insert() del modelo y pasar los datos
        $insertado = $this->modelosvc->insert($user_id, $client_gender, $client_datebirth);

        // Verificar si la inserción fue exitosa
        if ($insertado) {
            // Redireccionar después de la inserción exitosa
            header("location:?c=Clients&m=index");
        } else {
            // Manejar el caso de inserción fallida, si es necesario
            // Por ejemplo, mostrar un mensaje de error
            echo "Error al insertar el cliente";
        }
    }
    public function update()
    {
        // Verificar si se recibió un ID válido para la cita a editar
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            // Recoger los datos del formulario
            $id = $_POST['id'];
            $date_birth = $_POST['date_birth'];
            $gender = $_POST['gender'];
            $users_id = $_POST['users_id'];
            // Crear un array con los datos actualizados
            $datos = array(
                'id' => $id,
                'date_birth' => $date_birth,
                'gender' => $gender,
                'users_id' => $users_id,
            );

            // Llamar al método update() del modelo y pasar los datos actualizados
            $actualizado = $this->modelosvc->update($datos);

            // Verificar si la actualización fue exitosa
            if ($actualizado) {
                // Redireccionar después de la actualización exitosa
                header("location:?c=Clients&m=index");
            } else {
                // Manejar el caso de actualización fallida, si es necesario
                // Por ejemplo, mostrar un mensaje de error
                echo "Error al actualizar la cliente";
            }
        } else {
            // Manejar el caso de no recibir un ID válido
            // Por ejemplo, redireccionar a una página de error
            echo "ID de cliente inválido";
        }
    }

    public function delete()
    {
        $this->modelosvc->delete($_GET['id']);

        header("location:?c=Clients&m=index");
    }




}
