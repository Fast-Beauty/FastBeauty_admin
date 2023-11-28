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
$sql = $conn->query("select * from productos where id=$id");
echo $id;
?>
<div class="pcoded-content">

    <div class="page-header card">
        <div class="back-user">
            <a href="?c=Products&m=index">
                <span class="feather icon-arrow-left"></span> Volver
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="">
                <div class="page-header-title">
                    <div class="d-inline">
                        <!-- Aquí se cambia el contenido -->
                        <form action="views/products/code/code_edit.php" method="post" class="bg-white px-5 py-4 formulario-user">
                        <h3 class="mb-4 text-center">Editar Producto</h3>
                        <input type="hidden" value="<?=$_GET["id"]?>" name="id">
                            <?php
                            while($datos=$sql->fetch_object()) {
                                ?>
                        <div class="d-flex flex-column mt-2 campo">
                            <label for="nombre">Nombre:</label>
                            <input id="nombre" type="text" name="name" placeholder="Nombre Completo" autocomplete="off" value="<?=$datos->name?>" class="input-form-user py-3 px-2">
                        </div>

                        <div class="d-flex flex-column mt-2 campo">
                            <label for="precio">Precio:</label>
                            <input id="precio" type="text" name="precio" placeholder="Precio Producto" autocomplete="off" value="<?=$datos->price?>" class="input-form-user py-3 px-2">
                        </div>

                        <div class="d-flex flex-column mt-2 campo">
                            <label for="descripcion">Descripción:</label>
                            <input id="descripcion" type="text" name="descripcion" placeholder="Descripción" autocomplete="off" value="<?=$datos->description?>" class="input-form-user py-3 px-2">
                        </div>

                        <div class="d-flex flex-column mt-2 campo">
                            <label for="imagen">Imagen:</label>
                            <input id="imagen" type="file" class="input-form-user py-3 px-2">
                        </div>
                        <?php } ?>
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
