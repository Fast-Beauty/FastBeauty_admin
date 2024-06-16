<div class="pcoded-content">
    <div class="page-header card my-0">
        <div class="d-flex justify-content-between align-items-center pt-3">
            <h3 class="font-weight-bolder">Detalles del Trabajador</h3>
            <div class="page-header-breadcrumb">
                <ul class="breadcrumb breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="?c=Dashboard&m=dashboard"><i class="feather icon-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="?c=EmployeesImages">Trabajadores</a></li>
                    <li class="breadcrumb-item"><a href="#!">Detalles</a></li>
                </ul>
            </div>
        </div>
        <div class="row align-items-start">
            <div class="col-lg-12">
                <div class="page-header-title">
                    <div class="d-inline">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Detalles del Trabajador</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">
                                        <strong>ID del Trabajador:</strong> <?= $datos['Employees_id'] ?>
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Nombre:</strong> <?= $datos['user_name'] ?> <?= $datos['user_lastname'] ?>
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Estado:</strong> <?= $datos['status'] ?>
                                    </li>
                                    <li class="list-group-item">
                                        <strong>Imagen:</strong><br>
                                        <?php if (!empty($datos['imagen'])): ?>
                                            <img src="data:image/jpeg;base64,<?= $datos['imagen'] ?>" alt="Imagen del Trabajador" style="max-width: 300px;">
                                        <?php else: ?>
                                            <p>No hay imagen disponible</p>
                                        <?php endif; ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer text-right">
                                <a href="?c=EmployeesImages" class="btn btn-secondary">Volver</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
