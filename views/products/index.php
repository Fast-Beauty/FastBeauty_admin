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

$sql = $conn->query("select * from services");


?>

<div class="pcoded-content">

    <div class="page-header card my-0">
        <div class="d-flex justify-content-between align-items-center pt-3">
            <h3 class="font-weight-bolder">Productos</h3>
            <div class="page-header-breadcrumb">
                <ul class=" breadcrumb breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="?c=Dashboard&m=dashboard"><i class="feather icon-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Productos</a> </li>
                </ul>
            </div>
        </div>
        <div class="d-flex justify-content-end align-items-center border-bottom pb-3">
            <a href="?c=Products&m=create" class="py-3 px-5 rounded text-white add">Nuevo</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <table class="table table-striped table-borderless">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>PRECIO</th>
                                <th>descripcion</th>
                                <th>Estado</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while ($date = $sql->fetch_object()) {
                            ?>
                            <tr class="bg-white">
                                    <td><?=$datos->id?></td>
                                    <td><?=$datos->name?></td>
                                    <td><?=$datos->price?></td>
                                    <td><?=$datos->description?></td>
                                    <td><div class="bg-success text-center p-1 rounded">Activo</div></td>
                                    <td>
                                        <div class="d-flex justify-content-around icon-table">
                                            <a href="#" class="fs-1">
                                                <span class="feather icon-eye">
                                                    <p class="d-inline text-icn">Detalles</p>
                                                </span>
                                            </a>
                                            <a href="?c=Products&m=edit&id=<?=$datos->id?>">
                                                <span class="feather icon-edit-2">
                                                    <p class="d-inline">Editar</p>    
                                                </span>
                                            </a>
                                            <a href="?c=Products&m=delete&id=<?=$datos->id?>">
                                                <span class="feather icon-trash">
                                                    <p class="d-inline">Eliminar</p>
                                                </span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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

<!-- Aquí finalmente se cierran todas las etiquetas -->