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
                    <form action="?c=ProductsImages&m=createupdate" class="bg-white px-5 py-4 formulario-user" method="post" enctype="multipart/form-data">
                        <h3 class="mb-4 text-center">Nueva imagen de producto</h3>
                        <div class="d-flex flex-column mt-2 campo">
                            <label for="imagen">Imagen:</label>
                            <input id="imagen" type="file" placeholder="Imagen del producto" autocomplete="off" class="input-form-user py-3 px-2" name="imagen">
                        </div>

                        <div class="d-flex flex-column mt-2 campo">
                            <label for="productos_id">Producto:</label>
                            <select name="productos_id" id="productos_id" class="input-form-user py-3 px-2">
                                <option value="" selected disabled>Seleccione el producto</option>
                                <?php foreach($this->modelosvc->obtenerProductos() as $datos): ?>
                                    <option value="<?=$datos['id']?>"><?=$datos['name']?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <input type="submit" value="Añadir Producto" class="submit-user w-100 mt-4 py-3 text-white">
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
