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
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $fecha__nac = $_POST["date_birth"];

    $sql = "INSERT INTO users (name, email, phone) VALUES ('$name', '$email' ,'$phone')";

    if ($conn->query($sql) === TRUE) {
        echo "Nuevo usuario agregado correctamente.";
    } else {
        echo "Error al agregar el usuario: " . $conn->error;
    }
}

$conn->close();
?>