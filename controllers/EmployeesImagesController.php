<?php
require_once 'models/EmployeesImagesModel.php';

class EmployeesImagesController
{
    private $modelosvc;

    public function __construct()
    {
        $this->modelosvc = new EmployeesImagesModel();
    }

    public function index()
    {
        require_once ('views/components/layout/head.php');
        require_once ('views/employees_images/index.php');
        require_once ('views/components/layout/footer.php');
    }

    public function show()
    {
        if (!isset($_GET['id']) || empty($_GET['id'])) {
            // Manejar el caso donde no se proporciona el ID
            // Redireccionar a una página de error o a la lista de empleados
            header('Location: ?c=EmployeesImages&m=index');
            exit();
        }

        $id = $_GET['id'];

        // Obtener los detalles del empleado por su ID usando el método del modelo
        $datosEmpleado = $this->modelosvc->obtenerPorId($id);

        if ($datosEmpleado) {
            // Mostrar la vista con los detalles del empleado
            require_once ('views/components/layout/head.php');
            require_once ('views/employees_images/show.php');
            require_once ('views/components/layout/footer.php');
        } else {
            // Manejar el caso donde no se encontraron detalles del empleado
            echo "No se encontraron detalles del empleado.";
        }
    }


    public function create()
    {
        // Obtener la lista de usuarios activos/inactivos
        $employees = $this->modelosvc->getEmployeesWithUserInfo();        require_once ('views/components/layout/head.php');
        require_once ('views/employees_images/create.php');
        require_once ('views/components/layout/footer.php');
    }

    public function createupdate()
{
    $employee_id = $_POST['employee_id'];
    $tipo_imagen = mime_content_type($_FILES['imagen']['tmp_name']);
    $imagen = file_get_contents($_FILES['imagen']['tmp_name']);

    // Validar que el ID del empleado exista en la tabla `employees`
    if (!$this->modelosvc->employeeExists($employee_id)) {
        echo "Error: El ID de empleado no existe en la tabla employees.";
        return;
    }

    $insertado = $this->modelosvc->insert($employee_id, $imagen, $tipo_imagen);

    if ($insertado) {
        header("location:?c=EmployeesImages&m=index");
    } else {
        echo "Error al insertar la imagen";
    }
}

    public function edit()
    {
        // Verificar si se proporcionó un ID válido en la URL
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id'];

            // Obtener los datos de la imagen por su ID desde el modelo
            $datosEmpleado = $this->modelosvc->obtenerPorId($id);

            // Verificar si se encontraron datos de la imagen
            if ($datosEmpleado) {
                // Incluir los archivos de la plantilla (head, vista edit, footer)
                require_once ('views/components/layout/head.php');
                require_once ('views/employees_images/edit.php');
                require_once ('views/components/layout/footer.php');
            } else {
                echo "No se encontró la imagen con el ID proporcionado.";
            }
        } else {
            echo "ID de imagen inválido";
        }
    }

    public function update()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id = $_POST['id'];
            $tipo_imagen = $_POST['tipo_imagen'];
    
            // Verificar si se subió una nueva imagen
            if ($_FILES['imagen']['size'] > 0) {
                $imagen = file_get_contents($_FILES['imagen']['tmp_name']);
                $imagen = base64_encode($imagen);
            } else {
                // Si no se subió una nueva imagen, mantener la imagen actual en la base de datos
                $imagen = null; // O asignar la imagen actual almacenada en la base de datos
            }
            $datos = ['id' => $id, 'imagen' => $imagen, 'tipo_imagen' => $tipo_imagen];
            $actualizado = $this->modelosvc->update($datos);
    
            if ($actualizado) {
                header("location:?c=EmployeesImages&m=index");
            } else {
                echo "Error al actualizar la imagen";
            }
        }
    }
    

    public function delete()
    {
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id'];
            $eliminado = $this->modelosvc->delete($id);
            if ($eliminado) {
                header("location:?c=EmployeesImages&m=index");
            } else {
                echo "Error al eliminar la imagen.";
            }
        } else {
            echo "ID de imagen inválido.";
        }
    }

}
