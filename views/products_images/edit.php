<!-- Contenido -->
<div class="pcoded-content">

    <div class="page-header card">
        <div class="back-user">
            <a href="?c=ProductsImages&m=index">
                <span class="feather icon-arrow-left"></span> Volver
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="">
                <div class="page-header-title">
                    <div class="d-inline">
                        <!-- Aquí se cambia el contenido -->
                    <form action="?c=ProductsImages&m=createupdate" id="formularioProductoImg" class="bg-white px-5 py-4 formulario-user" method="post" enctype="multipart/form-data">
                        <h3 class="mb-4 text-center">Editar Producto</h3>
                        <input type="hidden" value="<?=$_GET["id"]?>" name="id">
                        <?php foreach($this->modelosvc->obtenerId($_GET['id']) as $datos): ?>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="nombre">Imagen:</label>
                                <img src="data:<?= $datos['tipo_imagen']; ?>;base64,<?= base64_encode($datos['imagen']); ?>" alt="Imagen" style="width: 200px;margin: 0 auto;">
                                <input id="imagen" type="file" placeholder="Imagen del producto" autocomplete="off" class="input-form-user py-3 px-2" name="imagen">
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="productos_id">Producto:</label>
                                <select name="productos_id" id="productos_id" class="input-form-user py-3 px-2">
                                    <?php 
                                    foreach($this->modelosvc->obtenerProductos() as $data):
                                        if ($data['id'] == $datos['productos_id'] ) {?>
                                            <option value="<?=$data['id']?>" selected><?=$data['name']?></option>
                                        <?php } else { ?>
                                            <option value="<?=$data['id']?>"><?=$data['name']?></option>
                                        <?php }
                                    endforeach; ?>
                                </select>
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
<script src="assets/js/ProductsImgValidation.js"></script>
