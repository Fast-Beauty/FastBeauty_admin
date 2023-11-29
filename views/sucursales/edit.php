<!-- Contenido -->
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


$id = $_GET["id"];
$sql = $conn->query("select * from branch_office where id=$id");
echo $id;
?>
<div class="pcoded-content">

    <div class="page-header card">
        <div class="back-user">
            <a href="?c=Sucursales&m=index">
                <span class="feather icon-arrow-left"></span> Volver
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="back-">
                <div class="?c=Sucursales&m=index">
                    <div class="d-inline">
                        <!-- Aquí se cambia el contenido -->
                        <form action="views/sucursales/code/code_edit.php" class="bg-white px-5 py-4 formulario-user" method="post">
                            <h3 class="mb-4 text-center">Editar Sucursal</h3>
                            <input type="hidden" value="<?=$_GET["id"]?>" name="id">
                            <?php
                            while($datos=$sql->fetch_object()) {?>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="nombre">Nombre:</label>
                                <input id="nombre" type="text" placeholder="Nombre Completo" autocomplete="off" class="input-form-user py-3 px-2" name="name" value="<?=$datos->name?>">
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="nit">NIT:</label>
                                <input id="nit" type="text" placeholder="NIT de la empresa" autocomplete="off" class="input-form-user py-3 px-2" name="nit" value="<?=$datos->nit?>">
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="direccion">Dirección:</label>
                                <input id="direccion" type="text" placeholder="Dirección de la sucursal" autocomplete="off" class="input-form-user py-3 px-2" name="addres" value="<?=$datos->addres?>">
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="tel">Teléfono:</label>
                                <input id="tel" type="tel" placeholder="Telefono" autocomplete="off" class="input-form-user py-3 px-2" name="phone" value="<?=$datos->phone?>">
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="imagen">Imagen:</label>
                                <input id="imagen" type="file" class="input-form-user py-3 px-2">
                            </div>
                            <?php }
                            ?>
                            <input type="submit" value="Guardar" class="submit-user w-100 mt-4 py-3 text-white" name="btnEditar">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>