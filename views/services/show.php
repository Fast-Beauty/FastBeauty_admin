<!-- Contenido -->
<div class="pcoded-content">

    <div class="page-header card">
        <div class="back-user">
            <a href="?c=Services&m=index">
                <span class="feather icon-arrow-left"></span> Volver
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="">
                <div class="page-header-title">
                    <div class="d-inline">
                        <!-- Aquí se cambia el contenido -->
                    <form action="?c=Services&m=createupdate" class="bg-white px-5 py-4 formulario-user" method="post">
                        <h3 class="mb-4 text-center">Servicio</h3>
                        <input type="hidden" value="<?=$_GET["id"]?>" name="id">
                        <?php foreach($this->modelosvc->obtenerId($_GET['id']) as $datos): ?>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="nombre">Nombre:</label>
                                <input id="nombre" type="text" placeholder="Nombre Servicio" autocomplete="off" value="<?= $datos['name'] ?>" class="input-form-user py-3 px-2" name="name" disabled>
                            </div>
                            
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="description">Descripción:</label>
                                <input id="description" type="text" placeholder="Descripción" autocomplete="off" value="<?= $datos['description'] ?>" class="input-form-user py-3 px-2" name="description" disabled>
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="precio">Precio:</label>
                                <input id="precio" type="text" placeholder="Precio Servicio" autocomplete="off" value="<?= $datos['price'] ?>" class="input-form-user py-3 px-2" name="price" disabled>
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="time">Tiempo:</label>
                                <input id="time" type="text" placeholder="Duración del Servicio" autocomplete="off" value="<?= $datos['time'] ?>" class="input-form-user py-3 px-2" name="time" disabled>
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="branch_office_id">Sucursal:</label>
                                <input id="branch_office_id" type="text" placeholder="Sucursal" autocomplete="off" value="<?= $this->modelosvc->obtenerSucursal($datos['id']) ?>" class="input-form-user py-3 px-2" name="branch_office_id" disabled>
                            </div>
                        <?php endforeach; ?>
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