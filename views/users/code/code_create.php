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
?>
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = md5($_POST["password"]);
    $fecha__nac = $_POST["date_birth"];

    $sql = "INSERT INTO users (name, email, phone, password) VALUES ('$name', '$email' ,'$phone', '$password')";

  

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