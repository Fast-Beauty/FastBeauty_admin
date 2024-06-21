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

if (!empty($_POST["btnEditar"])) {
    $name = $_POST["name"];
    $id = $_POST["id"];
    $precio = $_POST["precio"];
    $descripcion = $_POST["descripcion"];

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = $conn->prepare("UPDATE productos SET name=?, price=?, description=? WHERE id=?");
    $sql->bind_param("sssi", $name, $precio, $descripcion, $id);

    if ($sql->execute()) {
        echo 'producto modificado correctamente';
    } else {
        echo "Error al modificar producto";
    }

    $sql->close();
}
