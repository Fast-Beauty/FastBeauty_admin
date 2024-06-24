<!-- Contenido -->
<div class="pcoded-content">

    <div class="page-header card">
        <div class="back-user">
            <a href="?c=Mark&m=index">
                <span class="feather icon-arrow-left"></span> Volver
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="">
                <div class="page-header-title">
                    <div class="d-inline">
                        <!-- Aquí se cambia el contenido -->
                    <form action="?c=Mark&m=createupdate" class="bg-white px-5 py-4 formulario-user" method="post">
                        <h3 class="mb-4 text-center">Editar Marca</h3>
                        <input type="hidden" value="<?=$_GET["id"]?>" name="id">
                        <?php foreach($this->modelosvc->obtenerId($_GET['id']) as $datos): ?>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="name">Nombre:</label>
                                <input id="name" type="text" placeholder="Nombre de la Marca" autocomplete="off" value="<?= $datos['name'] ?>" class="input-form-user py-3 px-2" name="name">
                            </div>

                        <?php endforeach; ?>

                        <input type="submit" value="Guardar" class="submit-user w-100 mt-4 py-3 text-white" name="btnEditar">
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