<?php
require_once 'models/ScoreModel.php';

class HelpController
{
    private $modelosvc;
    public function __construct()
    {
        $this->modelosvc = new ScoreModel();
    }

    public function index()
    {
        require_once ('views/components/layout/head.php');
        require_once ('views/help/index.php');
        require_once ('views/components/layout/footer.php');
    }

  /*  public function show()
    {
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id']; // Obtener el ID de la cita de la URL
            $score = $this->modelosvc->getScoreById($id);

            if ($score) {
                $punctuation = $this->modelosvc->getPunctuation	();
                $services_id = $this->modelosvc->getServices_id(); 
                $clients_id = $this->modelosvc->getClients_id();

                require_once ('views/components/layout/head.php');
                require_once ('views/sco/show.php');
                require_once ('views/components/layout/footer.php');
            } else {
                // Manejar el caso de no encontrar la cita con el ID proporcionado
                // Redireccionar a una página de error o mostrar un mensaje de error amigable
                echo "No se encontró el puntaje con el ID proporcionado.";
            }
        } else {
            // Manejar el caso de no recibir un ID válido en la URL
            // Redireccionar a una página de error o mostrar un mensaje de error amigable
            echo "ID del puntaje inválido";
        }
    }
*/ /*
    public function edit()
    {
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $id = $_GET['id']; // Obtener el ID de la cita de la URL
            $score = $this->modelosvc->getScoreById($id);

            if ($score) {
                $punctuation = $this->modelosvc->getPunctuation	();
                $services_id = $this->modelosvc->getServices_id(); 
                $clients_id = $this->modelosvc->getClients_id();

                require_once('views/components/layout/head.php');
                require_once('views/score/edit.php');
                require_once('views/components/layout/footer.php');
            } else {
                // Manejar el caso de no encontrar la cita con el ID proporcionado
                // Redireccionar a una página de error o mostrar un mensaje de error amigable
                echo "No se encontró el puntaje con el ID proporcionado.";
            }
        } else {
            // Manejar el caso de no recibir un ID válido en la URL
            // Redireccionar a una página de error o mostrar un mensaje de error amigable
            echo "ID del puntaje inválido";
        }
    }
*/
/*
    public function create()
    {
        $modelo = new ScoreModel();

        // Consulta para obtener los clientes
        $punctuation = $this->modelosvc->getPunctuation	();
        $services_id = $this->modelosvc->getServices_id(); 
        $clients_id = $this->modelosvc->getClients_id();

        // Incluir la vista
        //header("location:?c=Score&m=create");

        require_once ('views/components/layout/head.php');
        require_once ('views/score/create.php');
        require_once ('views/components/layout/footer.php');
    }
*/
  /*  public function createupdate()
    {
        // Recoger los datos del formulario
        $punctuation = $_POST['punctuation'];
        $services_id = $_POST['services_id'];
        $clients_id = $_POST['clients_id'];
        

        // Llamar al método insert() del modelo y pasar los datos
        $insertado = $this->modelosvc->insert($punctuation, $services_id, $clients_id);

        // Verificar si la inserción fue exitosa
        if ($insertado) {
            // Redireccionar después de la inserción exitosa
            header("location:?c=Score&m=index");
        } else {
            // Manejar el caso de inserción fallida, si es necesario
            // Por ejemplo, mostrar un mensaje de error
            echo "Error al insertar el puntaje";
        }
    } */
   /*
    public function update()
    {
        // Verificar si se recibió un ID válido para la cita a editar
        if (isset($_POST['id']) && !empty($_POST['id'])) {
            // Recoger los datos del formulario
            $id = $_POST['id'];
            $punctuation = $_POST['punctuation'];
            $services_id = $_POST['services_id'];
            $clients_id = $_POST['clients_id'];
            

            // Crear un array con los datos actualizados
            $datos = array(
                'id' => $id,
                'punctuation' => $punctuation,
                'services_id' => $services_id,
                'clients_id' => $clients_id,
                
            );

            // Llamar al método update() del modelo y pasar los datos actualizados
            $actualizado = $this->modelosvc->update($datos);

            // Verificar si la actualización fue exitosa
            if ($actualizado) {
                // Redireccionar después de la actualización exitosa
                header("location:?c=Score&m=index");
            } else {
                // Manejar el caso de actualización fallida, si es necesario
                // Por ejemplo, mostrar un mensaje de error
                echo "Error al actualizar el puntaje";
            }
        } else {
            // Manejar el caso de no recibir un ID válido
            // Por ejemplo, redireccionar a una página de error
            echo "ID de puntaje inválido";
        }
    }
        */
/*
    public function delete()
    {
        $this->modelosvc->delete($_GET['id']);

        header("location:?c=Score&m=index");
    }



*/
}
