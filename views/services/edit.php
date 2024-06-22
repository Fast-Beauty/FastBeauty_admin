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
                            <label for="nombre">Nombre:</label>
                            <input id="nombre" type="text" placeholder="Nombre Completo" autocomplete="off" value="<?= $datos['name'] ?>" class="input-form-user py-3 px-2" name="name">
                        </div>
                        
                        <div class="d-flex flex-column mt-2 campo">
                            <label for="descripcion">Descripción:</label>
                            <input id="descripcion" type="text" placeholder="Descripción" autocomplete="off" value="<?= $datos['description'] ?>" class="input-form-user py-3 px-2" name="description">
                        </div>

                        <div class="d-flex flex-column mt-2 campo">
                            <label for="precio">Precio:</label>
                            <input id="precio" type="text" placeholder="Precio Servicio" autocomplete="off" value="<?= $datos['price'] ?>" class="input-form-user py-3 px-2" name="price">
                        </div>

                        <div class="d-flex flex-column mt-2 campo">
                            <label for="time">Tiempo:</label>
                            <input id="time" type="text" placeholder="Tiempo servicio" autocomplete="off" value="<?= $datos['time'] ?>" class="input-form-user py-3 px-2" name="time">
                        </div>

                        <div class="d-flex flex-column mt-2 campo">
                            <label for="imagen">Imagen:</label>
                            <input id="imagen" type="file" class="input-form-user py-3 px-2">
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
