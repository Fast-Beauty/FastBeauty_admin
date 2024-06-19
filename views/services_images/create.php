<div class="pcoded-content">

    <div class="page-header card">
        <div class="back-user">
            <a href="?c=ServicesImages&m=index">
                <span class="feather icon-arrow-left"></span> Volver
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="">
                <div class="page-header-title">
                    <div class="d-inline">
                        <!-- Aquí se cambia el contenido -->
                    <form action="?c=ServicesImages&m=createupdate" class="bg-white px-5 py-4 formulario-user" method="post" enctype="multipart/form-data">
                        <h3 class="mb-4 text-center">Nueva imagen de Servicio</h3>
                        <div class="d-flex flex-column mt-2 campo">
                            <label for="imagen">Imagen:</label>
                            <input id="imagen" type="file" placeholder="Imagen del servicio" autocomplete="off" class="input-form-user py-3 px-2" name="imagen">
                        </div>

                        <div class="d-flex flex-column mt-2 campo">
                            <label for="services_id">Servicio:</label>
                            <select name="services_id" id="services_id" class="input-form-user py-3 px-2">
                                <option value="" selected disabled>Seleccione el Servicio</option>
                                <?php foreach($this->modelosvc->obtenerServicios() as $datos): ?>
                                    <option value="<?=$datos['id']?>"><?=$datos['name']?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <input type="submit" value="Añadir Servicio" class="submit-user w-100 mt-4 py-3 text-white">
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