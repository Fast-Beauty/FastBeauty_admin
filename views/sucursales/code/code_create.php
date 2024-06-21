<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "fastbeauty_db";

        // conxeion ddb
        $conn = new mysqli($servername, $username, $password, $dbname);

        // verficaf conexion
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }
?>

<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $nit = $_POST["nit"];
    $phone = $_POST["phone"];
    $addres = $_POST["addres"];

    $sql = "INSERT INTO branch_office (name, nit, phone, addres) VALUES ('$name', '$nit' ,'$phone', '$addres')";


    if ($conn->query($sql) === TRUE) {
        echo "Nuevo usuario agregado correctamente.";
    } else {
        echo "Error al agregar el usuario: " . $conn->error;
    }
}

$conn->close();

$url = $_SERVER['HTTP_REFERER'];
header("LOCATION:$url");



?>