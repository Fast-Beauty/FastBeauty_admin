<!-- Contenido -->
<div class="pcoded-content">

    <div class="page-header card">
        <div class="back-user">
            <a href="?c=Branch&m=index">
                <span class="feather icon-arrow-left"></span> Volver
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="">
                <div class="page-header-title">
                    <div class="d-inline">
                        <!-- Aquí se cambia el contenido -->
                    <form action="?c=Services&m=createupdate" class="bg-white px-5 py-4 formulario-user" method="post">
                        <h3 class="mb-4 text-center">Sucursal</h3>
                        <input type="hidden" value="<?=$_GET["id"]?>" name="id">
                        <?php foreach($this->modelosvc->obtenerId($_GET['id']) as $datos): ?>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="nombre">Nombre:</label>
                                <input id="nombre" type="text" placeholder="Nombre Sucursal" autocomplete="off" value="<?= $datos['name'] ?>" class="input-form-user py-3 px-2" name="name" disabled>
                            </div>
                            
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="nit">NIT:</label>
                                <input id="nit" type="number" placeholder="Nit" autocomplete="off" value="<?= $datos['nit'] ?>" class="input-form-user py-3 px-2" name="nit" disabled>
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="addres">Direccion:</label>
                                <input id="addres" type="text" placeholder="Direccion" autocomplete="off" value="<?= $datos['addres'] ?>" class="input-form-user py-3 px-2" name="addres" disabled>
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="google_location">Ubicacion:</label>
                                <input id="google_location" type="text" placeholder="Ubicacion" autocomplete="off" value="<?= $datos['google_location'] ?>" class="input-form-user py-3 px-2" name="google_location" disabled>
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="phone">Celular:</label>
                                <input id="phone" type="text" placeholder="Telefono" autocomplete="off" value="<?= $datos['phone'] ?>" class="input-form-user py-3 px-2" name="phone" disabled>
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