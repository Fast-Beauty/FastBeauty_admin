<!-- Contenido -->
<div class="pcoded-content">

    <div class="page-header card">
        <div class="back-user">
            <a href="?c=products&m=index">
                <span class="feather icon-arrow-left"></span> Volver
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="">
                <div class="page-header-title">
                    <div class="d-inline">
                        <!-- Aquí se cambia el contenido -->
                    <form action="?c=Products&m=createupdate" class="bg-white px-5 py-4 formulario-user" method="post">
                        <h3 class="mb-4 text-center">Nuevo Producto</h3>
                        <div class="d-flex flex-column mt-2 campo">
                            <label for="nombre">Nombre:</label>
                            <input id="nombre" type="text" placeholder="Nombre Completo" autocomplete="off" class="input-form-user py-3 px-2" name="name">
                        </div>
                        
                        <div class="d-flex flex-column mt-2 campo">
                            <label for="description">Descripción:</label>
                            <input id="description" type="text" placeholder="Descripción" autocomplete="off" class="input-form-user py-3 px-2" name="description">
                        </div>

                        <div class="d-flex flex-column mt-2 campo">
                            <label for="precio">Precio:</label>
                            <input id="precio" type="text" placeholder="Precio Producto" autocomplete="off" class="input-form-user py-3 px-2" name="price">
                        </div>

                        <div class="d-flex flex-column mt-2 campo">
                            <label for="quantity">Cantidad:</label>
                            <input id="quantity" type="number" placeholder="Cantidad del producto" autocomplete="off" class="input-form-user py-3 px-2" name="quantity">
                        </div>

                        <div class="d-flex flex-column mt-2 campo">
                            <label for="date">Fecha:</label>
                            <input id="date" type="date" placeholder="Fecha de producto" autocomplete="off" class="input-form-user py-3 px-2" name="date">
                        </div>

                        <div class="d-flex flex-column mt-2 campo">
                            <label for="category">Categoría:</label>
                            <input id="category" type="text" placeholder="Categoría del producto" autocomplete="off" class="input-form-user py-3 px-2" name="category">
                        </div>

                        <div class="d-flex flex-column mt-2 campo">
                            <label for="mark_id">Marca:</label>
                            <select name="mark_id" id="mark_id" class="input-form-user py-3 px-2">
                                <option value="" selected disabled>Seleccione la marca</option>
                                <?php foreach($this->modelosvc->obtenerMarcas() as $datos): ?>
                                    <option value="<?=$datos['id']?>"><?=$datos['name']?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="d-flex flex-column mt-2 campo">
                            <label for="branch_office_id">Sucursal:</label>
                            <select name="mark_id" id="mark_id" class="input-form-user py-3 px-2">
                                <option value="" selected disabled>Seleccione la sucursal</option>
                                <?php foreach($this->modelosvc->obtenerSucursales() as $datos): ?>
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
