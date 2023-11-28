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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $precio = $_POST["precio"];
    $descripcion = $_POST["descripcion"];
    $image = $_POST["image"];

    $sql = "INSERT INTO products (name, description, price) VALUES ('$name', '$descripcion' ,'$precio')";

    if ($conn->query($sql) == TRUE) {
        echo "Nuevo producto agregado correctamente.";
    } else {
        echo "Error al agregar producto: " . $conn->error;
    }
}

$conn->close();
?>