<!-- Contenido -->
<div class="pcoded-content">

    <div class="page-header card">
        <div class="back-user">
            <a href="?c=BranchImages&m=index">
                <span class="feather icon-arrow-left"></span> Volver
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="">
                <div class="page-header-title">
                    <div class="d-inline">
                        <!-- Aquí se cambia el contenido -->
                    <form action="?c=BranchImages&m=createupdate" class="bg-white px-5 py-4 formulario-user" method="post">
                        <h3 class="mb-4 text-center">Imagen de Sucursal</h3>
                        <input type="hidden" value="<?=$_GET["id"]?>" name="id">
                        <?php foreach($this->modelosvc->obtenerId($_GET['id']) as $datos): ?>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="nombre">Imagen:</label>
                                <img src="data:<?= $datos['tipo_imagen']; ?>;base64,<?= base64_encode($datos['imagen']); ?>" alt="Imagen" style="width: 200px;margin: 0 auto;">
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