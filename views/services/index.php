<!-- Contenido -->
<div class="pcoded-content">

    <div class="page-header card my-0">
        <div class="d-flex justify-content-between align-items-center pt-3">
            <h3 class="font-weight-bolder">Servicios</h3>
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="?c=dashboard&m=dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Servicios</a> </li>
                    </ul>
                </div>
        </div>
        <div class="d-flex justify-content-end align-items-center border-bottom pb-3">
            <a href="?c=services&m=create" class="py-3 px-5 rounded text-white add">Nuevo</a>
        </div>
        <div class="row align-items-end">
            <div class="col-12">  
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive mt-4">
                                    <table class="table table-border table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>NOMBRE</th>
                                                <th>DESCRIPCIÓN</th>
                                                <th></th>
                                                <th>PRECIO</th>
                                                <th>IMAGEN</th>
                                                <th width="260">ACCIONES</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php for($i = 1; $i <10;$i++){ ?>
                                            <tr>
                                                <td>Corte</td>
                                                <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                                                </td>
                                                <td></td>
                                                <td>20.000</td>
                                                <td>P</td>
                                                <td>
                                                    <a href="?c=services&m=show"class="btn btn-sn btn-info">Detalles</a>
                                                    <a href="?c=services&m=edit"class="btn btn-sn btn-warning">Editar</a>
                                                    <a href="?c=services&m=delete"class="btn btn-sn btn-danger">Eliminar</a>
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
</div>

</div>
</div>
</div>
</div>