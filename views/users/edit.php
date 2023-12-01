<!-- Contenido -->

<div class="pcoded-content">

    <div class="page-header card">
        <!-- <div class="back-user">
            <a href="?c=users&m=index">
                <span class="feather icon-arrow-left"></span> Volver
            </a>
        </div> -->
        <div class="d-flex justify-content-between align-items-center">
                <div class="back-user">
                    <a href="?c=Users&m=index">
                        <span class="feather icon-arrow-left"></span> Volver
                    </a>
                </div>
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Usuarios</a> </li>
                    </ul>
                </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="">
                <div class="page-header-title">
                    <div class="d-inline">
                        <!-- Aquí se cambia el contenido -->
                        <form action="?c=Users&m=update" class="bg-white px-5 py-4 formulario-user" method="post">
                            <h3 class="mb-4 text-center">Editar Usuario</h3>
                            <input type="hidden" value="<?=$_GET["id"]?>" name="id">
                            <?php foreach($this->modelouser->obtenerId($_GET['id']) as $datos): ?>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="nombre">Nombre:</label>
                                <input id="nombre" type="text" placeholder="Nombre Completo" autocomplete="off" class="input-form-user py-3 px-2" name="name" value="<?=$datos['name']?>">
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="email">Email:</label>
                                <input id="email" type="email" placeholder="Tu Email" autocomplete="off" class="input-form-user py-3 px-2" name="email" value="<?=$datos['email']?>">
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="tel">Teléfono:</label>
                                <input id="tel" type="tel" placeholder="Tu Teléfono" autocomplete="off" class="input-form-user py-3 px-2" name="phone" value="<?=$datos['phone']?>">
                            </div>
                            
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="document">Documento:</label>
                                <input id="document" type="document" placeholder="Tu Documento" autocomplete="off" class="input-form-user py-3 px-2" name="document" value="<?=$datos['document']?>">
                            </div>

                            <?php endforeach;
                            ?>

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