<?php
if(!empty($_POST["btnEditar"])) {
    $name = $_POST["name"];
    $id = $_POST["id"];
    $nit = $_POST["nit"];
    $phone = $_POST["phone"];
    $addres = $_POST["addres"];

    $sql = $conn->query("update branch_office set name='$name', nit='$nit', phone=$phone, addres=$addres where id=$id");
    if($sql==1) {
        // echo '<script>window.location.href = "index.php";</script>';
    } else {
        echo "Error al modificar usuario";
    }
}