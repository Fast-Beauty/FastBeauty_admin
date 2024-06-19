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
                        <h3 class="mb-4 text-center">Editar Servicio</h3>
                        <input type="hidden" value="<?=$_GET["id"]?>" name="id">
                        <?php foreach($this->modelosvc->obtenerId($_GET['id']) as $datos): ?>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="name">Nombre:</label>
                                <input id="name" type="text" placeholder="Nombre del Servicio" autocomplete="off" value="<?= $datos['name'] ?>" class="input-form-user py-3 px-2" name="name">
                            </div>
                            
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="description">Descripción:</label>
                                <input id="description" type="text" placeholder="Descripción" autocomplete="off" value="<?= $datos['description'] ?>" class="input-form-user py-3 px-2" name="description">
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="precio">Precio:</label>
                                <input id="precio" type="text" placeholder="Precio Servicio" autocomplete="off" value="<?= $datos['price'] ?>" class="input-form-user py-3 px-2" name="price">
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="time">Tiempo:</label>
                                <input id="time" type="text" placeholder="Tiempo del Servicio" autocomplete="off" value="<?= $datos['time'] ?>" class="input-form-user py-3 px-2" name="time">
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="branch_office_id">Sucursal:</label>
                                <select name="branch_office_id" id="branch_office_id" class="input-form-user py-3 px-2">
                                    <?php 
                                    foreach($this->modelosvc->obtenerSucursales() as $data):
                                        if ($data['id'] == $datos['branch_office_id'] ) {?>
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