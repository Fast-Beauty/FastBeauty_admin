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
        <div class="row align-items-start">
            <div class="col-lg-12">
                <div class="page-header-title">
                    <div class="d-inline">
                        <table class="table table-hover table-borderless">
                            <thead>
                                <tr class="">
                                    <th class="text-center" scope="col">id</th>
                                    <th class="text-center" scope="col">Nombre</th>
                                    <th class="text-center" scope="col">Descripción</th>
                                    <th class="text-center" scope="col">Precio</th>
                                    <th class="text-center" scope="col">Cantidad</th>
                                    <th class="text-center" scope="col">Fecha</th>
                                    <th class="text-center" scope="col">Categoría</th>
                                    <th class="text-center" scope="col">mark_id</th>
                                    <th class="text-center" scope="col">branch_office_id</th>
                                    <th class="text-center" scope="col" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($this->modelosvc->listar() as $datos): ?>
                                    <tr>
                                        <td class="text-center"><?=$datos['id']?></td>
                                        <td class="text-center"><?=$datos['name']?></td>
                                        <td class="text-center"><?=$datos['description']?></td>
                                        <td class="text-center"><?=$datos['price']?></td>
                                        <td class="text-center"><?=$datos['quantity']?></td>
                                        <td class="text-center"><?=$datos['date']?></td>
                                        <td class="text-center"><?=$datos['category']?></td>
                                        <td class="text-center"><?=$this->modelosvc->obtenerMarca($datos['id'])?></td>
                                        <td class="text-center"><?=$this->modelosvc->obtenerSucursal($datos['id'])?></td>
                                        <td>
                                            <div class="d-flex justify-content-around icon-table">
                                                <a href="?c=Products&m=show&id=<?= $datos['id'] ?>">
                                                    <span class="feather icon-eye">
                                                        <p class="d-inline text-icn">Detalles</p>
                                                    </span>
                                                </a>
                                                <a href="?c=Products&m=edit&id=<?= $datos['id'] ?>">
                                                    <span class="feather icon-edit-2">
                                                        <p class="d-inline">Editar</p>
                                                    </span>
                                                </a>
                                                <a href="?c=Products&m=delete&id=<?= $datos['id'] ?>">
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
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>