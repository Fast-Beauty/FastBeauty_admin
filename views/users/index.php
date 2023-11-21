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

$sql = $conn->query("select * from users");
$datos = $sql->fetch_object();

?>

<div class="pcoded-content">

    <div class="page-header card my-0">
        <div class="d-flex justify-content-between align-items-center pt-3">
            <h3 class="font-weight-bolder">Usuarios</h3>
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="?c=Dashboard&m=dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Usuarios</a> </li>
                    </ul>
                </div>
        </div>
        <div class="d-flex justify-content-end align-items-center border-bottom pb-3">
            <a href="?c=Users&m=create" class="py-3 px-5 rounded text-white add">Nuevo</a>
        </div>
        <div class="row align-items-start">
            <div class="col-lg-12">
                <div class="page-header-title">
                    <div class="d-inline">
                        <table class="table table-hover table-borderless">
                            <thead>
                                <tr class="">
                                    <th scope="col"></th>
                                    <th scope="col">id</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Teléfono</th>
                                    <th scope="col">Fecha de nacimiento</th>
                                    <th scope="col" class="text-center">Estado</th>
                                    <th scope="col" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-white">
                                    <td>Imagen</td>
                                    <td>1</td>
                                    <td>Alejandro Betancourth</td>
                                    <td>correo@correo.com</td>
                                    <td>333 333</td>
                                    <td>18/01/2002</td>
                                    <td><div class="bg-success text-center p-1 rounded">Activo</div></td>
                                    <td>
                                        <div class="d-flex justify-content-around icon-table">
                                            <a href="#" class="fs-1">
                                                <span class="feather icon-eye">
                                                    <p class="d-inline text-icn">Detalles</p>
                                                </span>
                                            </a>
                                            <a href="?c=Users&m=edit&id=1">
                                                <span class="feather icon-edit-2">
                                                    <p class="d-inline">Editar</p>    
                                                </span>
                                            </a>
                                            <a href="#">
                                                <span class="feather icon-trash">
                                                    <p class="d-inline">Eliminar</p>
                                                </span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-2">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Usuarios</a> </li>
                    </ul>
                </div>
            </div> -->
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>