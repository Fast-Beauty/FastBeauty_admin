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

if(!empty($_POST["btnEditar"])) {
    $name = $_POST["name"];
    $id = $_POST["id"];
    $nit = $_POST["nit"];
    $phone = $_POST["phone"];
    $addres = $_POST["addres"];


    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = $conn->prepare("UPDATE branch_office SET name=?, nit=?, phone=?, addres=? WHERE id=?");
    $sql->bind_param("ssssi", $name, $nit, $phone, $addres, $id);

    if ($sql->execute()) {
        echo 'Sucursal modificada correctamente';
    } else {
        echo "Error al modificar Sucursal";
    }
}

$url = $_SERVER['HTTP_REFERER'];
header("LOCATION:$url");

?>