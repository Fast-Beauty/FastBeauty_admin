<div class="pcoded-content">

    <div class="page-header card my-0">
        <div class="d-flex justify-content-between align-items-center pt-3">
            <h3 class="font-weight-bolder">Tabajador</h3>
            <div class="page-header-breadcrumb">
                <ul class=" breadcrumb breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="?c=Dashboard&m=dashboard"><i class="feather icon-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Tabajador</a> </li>
                </ul>
            </div>
        </div>
        <div class="d-flex justify-content-end align-items-center border-bottom pb-3">
            <a href="?c=EmployeesImages&m=create" class="py-3 px-5 rounded text-white add">Nuevo</a> 
        </div>
        <div class="row align-items-start">
            <div class="col-lg-12">
                <div class="page-header-title">
                    <div class="d-inline">
                        <table class="table table-hover table-borderless">
                            <thead>
                                <tr class="">
                                    <th scope="col">id</th>
                                    <th scope="col">Empleado</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Imagen</th>
                                    <th scope="col">Tipo de imagen</th>
                                    <th scope="col" class="text-center">Estado</th>
                                    <th scope="col" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($this->modelosvc->listar() as $datos): ?>
                                    <tr class="bg-white">
                                        <td><?= $datos['id'] ?></td>
                                        <td><?= $datos['Employees_id'] ?></td>
                                        <td><?= $datos['user_name'] . ' ' . $datos['user_lastname'] ?></td>
                                        <td>
                                                <?php if (!empty($datos['imagen'])): ?>
                                                    <img src="data:image/jpeg;base64,<?= $datos['imagen'] ?>" alt="Imagen del Trabajador" style="max-width: 100px;">
                                                <?php else: ?>
                                                    <p>No hay imagen disponible</p>
                                                <?php endif; ?>
                                            </td>
                                        <td><?= $datos['tipo_imagen'] ?></td>
                                        <td><div class="bg-success text-center p-1 rounded"><?= $datos['status'] ?></div></td>
                                        <td>
                                            <div class="d-flex justify-content-around icon-table">
                                                <a href="?c=EmployeesImages&m=show&id=<?= $datos['id'] ?>">
                                                    <span class="feather icon-eye">
                                                        <p class="d-inline text-icn">Detalles</p>
                                                    </span>
                                                </a>
                                                <a href="?c=EmployeesImages&m=edit&id=<?= $datos['id'] ?>">
                                                    <span class="feather icon-edit-2">
                                                        <p class="d-inline">Editar</p>
                                                    </span>
                                                </a>
                                                <a href="?c=EmployeesImages&m=delete&id=<?= $datos['id'] ?>">
                                                    <span class="feather icon-trash=">
                                                        <p class="d-inline">Eliminar</p>
                                                    </span>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
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