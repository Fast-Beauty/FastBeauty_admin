<!-- Contenido -->
<div class="pcoded-content">

    <div class="page-header card">
        <div class="back-user">
            <a href="?c=Products&m=index">
                <span class="feather icon-arrow-left"></span> Volver
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="">
                <div class="page-header-title">
                    <div class="d-inline">
                        <!-- Aquí se cambia el contenido -->
                        <form action="?c=Products&m=createupdate" class="bg-white px-5 py-4 formulario-user" method="post">
                        <h3 class="mb-4 text-center">Editar Producto</h3>
                        <input type="hidden" value="<?=$_GET["id"]?>" name="id">
                        <?php foreach($this->modelosvc->obtenerId($_GET['id']) as $datos): ?>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="nombre">Nombre:</label>
                                <input id="nombre" type="text" placeholder="Nombre Completo" autocomplete="off" value="<?= $datos['name'] ?>" class="input-form-user py-3 px-2" name="name">
                            </div>
                            
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="description">Descripción:</label>
                                <input id="description" type="text" placeholder="Descripción" autocomplete="off" value="<?= $datos['description'] ?>" class="input-form-user py-3 px-2" name="description">
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="precio">Precio:</label>
                                <input id="precio" type="text" placeholder="Precio Producto" autocomplete="off" value="<?= $datos['price'] ?>" class="input-form-user py-3 px-2" name="price">
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="quantity">Cantidad:</label>
                                <input id="quantity" type="number" placeholder="Cantidad del producto" autocomplete="off" value="<?= $datos['quantity'] ?>" class="input-form-user py-3 px-2" name="quantity">
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="date">Fecha:</label>
                                <input id="date" type="date" placeholder="Fecha de producto" autocomplete="off" value="<?= $datos['date'] ?>" class="input-form-user py-3 px-2" name="date">
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="category">Categoría:</label>
                                <input id="category" type="text" placeholder="Categoría del producto" autocomplete="off" value="<?= $datos['category'] ?>" class="input-form-user py-3 px-2" name="category">
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="mark_id">Marca:</label>
                                <input id="mark_id" type="text" placeholder="Marca del producto" autocomplete="off" value="<?= $datos['mark_id'] ?>" class="input-form-user py-3 px-2" name="mark_id">
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="branch_office_id">Sucursal:</label>
                                <input id="branch_office_id" type="text" placeholder="Sucursal" autocomplete="off" value="<?= $datos['branch_office_id'] ?>" class="input-form-user py-3 px-2" name="branch_office_id">
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
