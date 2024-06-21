<!-- Contenido -->
<div class="pcoded-content">

    <div class="page-header card">
        <div class="back-user">
            <a href="?c=Score&m=index">
                <span class="feather icon-arrow-left"></span> Volver
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="">
                <div class="page-header-title">
                    <div class="d-inline">
                        <!-- Aquí se cambia el contenido -->
                    <form action="?c=Score&m=createupdate" class="bg-white px-5 py-4 formulario-user" method="post">
                        <h3 class="mb-4 text-center">Puntaje</h3>
                        <input type="hidden" value="<?=$_GET["id"]?>" name="id">
                        <?php foreach($this->modelosvc->obtenerId($_GET['id']) as $datos): ?>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="nombre">Puntaje:</label>
                                <input id="nombre" type="text" placeholder="Nombre Servicio" autocomplete="off" value="<?= $datos['name'] ?>" class="input-form-user py-3 px-2" name="name" disabled>
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="services_id">Servicios:</label>
                                <input id="services_id" type="text" placeholder="Servicios" autocomplete="off" value="<?= $this->modelosvc->obtenerServicio($datos['id']) ?>" class="input-form-user py-3 px-2" name="services_id" disabled>
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="clients_id">Clientes:</label>
                                <input id="clients_id" type="text" placeholder="Clientes" autocomplete="off" value="<?= $this->modelosvc->obtenerClientes($datos['id']) ?>" class="input-form-user py-3 px-2" name="clients_id" disabled>
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