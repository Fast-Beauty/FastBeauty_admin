<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fastbeauty_db";

// conxeion db
$conn = new mysqli($servername, $username, $password, $dbname);

// verficar conexion
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
    $id=$_GET["id"];



    $sql = "DELETE FROM branch_office WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Eliminado correctamente.";
    } else {
        echo "Error al Eliminar el Sucursal: " . $conn->error;
    }

$conn->close();

 $url = $_SERVER['HTTP_REFERER'];
 header("LOCATION:$url");

?>