<?php
if(!empty($_POST["btnEditar"])) {
    $name = $_POST["name"];
    $id = $_POST["id"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $document = $_POST["document"];

    $sql = $conn->query("update users set name='$name', email='$email', phone=$phone, document=$document where id=$id");
    if($sql==1) {
        // echo '<script>window.location.href = "index.php";</script>';
    } else {
        echo "Error al modificar usuario";
    }
}


?>