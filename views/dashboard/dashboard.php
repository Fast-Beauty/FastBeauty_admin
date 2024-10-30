<div class="pcoded-content">
    <?php
    //session_start(); // Asegúrate de que esté al principio

    if (isset($_SESSION['nombre'])) {
        echo "Hola, " . $_SESSION['nombre']; // Accede a la variable de sesión
    } else {
        echo "No hay usuario conectado.";
    }
    ?>
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Dashboard</h5>
                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                    </div>
                </div>
            </div>

            <div class="row align-items-start">
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

            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Dashboard</a> </li>
                    </ul>
                    <div class="row align-items-start">
                    <div class="col-lg-12">
                        <div class="page-header-title">
                            <div class="d-inline">
                                <table class="table table-hover table-borderless">
                                    <thead>
                                        <tr class="">
                                            <th scope="col">id</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Hora</th>
                                            <th scope="col">clients_id</th>
                                            <th scope="col">Employees_id</th>
                                            <th scope="col">services_id</th>
                                            <th scope="col" class="text-center">Estado</th>
                                            <th scope="col" class="text-center">Acciones</th>
                                        </tr>
                                    </thead>
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
</div>

</div>
</div>
</div>
</div>