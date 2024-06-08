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



    $sql = "DELETE FROM productos WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Eliminado correctamente.";
    } else {
        echo "Error al agregar el usuario: " . $conn->error;
    }

$conn->close();

// if($conn){
//     Header("Location: views/users/index.php");
// }else{

// }

?>

