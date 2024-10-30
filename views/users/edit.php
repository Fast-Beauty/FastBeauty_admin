<!-- Contenido -->
<div class="pcoded-content">

    <div class="page-header card">
        <div class="back-user">
            <a href="?c=Users&m=index">
                <span class="feather icon-arrow-left"></span> Volver
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="">
                <div class="page-header-title">
                    <div class="d-inline">
                        <!-- Aquí se cambia el contenido -->
                        <form action="?c=Users&m=createupdate" class="bg-white px-5 py-4 formulario-user" method="post">
                            <h3 class="mb-4 text-center">Editar Usuario</h3>
                            <input type="hidden" value="<?= $_GET["id"] ?>" name="id">
                            <?php foreach ($this->modelosvc->obtenerId($_GET['id']) as $datos): ?>
                                <div class="d-flex flex-column mt-2 campo">
                                    <label for="nombre">Nombre:</label>
                                    <input id="name" name="name" type="text" placeholder="Nombre Completo" value="<?= $datos['name'] ?>"
                                        autocomplete="off" class="input-form-user py-3 px-2">
                                </div>

                                <div class="d-flex flex-column mt-2 campo">
                                    <label for="nombre">Apellido:</label>
                                    <input id="lastname" name="lastname" type="text" placeholder="Nombre Completo" value="<?= $datos['lastname'] ?>"
                                        autocomplete="off" class="input-form-user py-3 px-2">
                                </div>

                                <div class="d-flex flex-column mt-2 campo">
                                    <label for="email">Email:</label>
                                    <input id="email" name="email" type="email" placeholder="Email" autocomplete="off" value="<?= $datos['email'] ?>"
                                        class="input-form-user py-3 px-2" disabled>
                                </div>

                                <div class="d-flex flex-column mt-2 campo">
                                    <label for="tel">Teléfono:</label>
                                    <input id="phone" name="phone" type="number" placeholder="Teléfono" autocomplete="off" value="<?= $datos['phone'] ?>"
                                        class="input-form-user py-3 px-2">
                                </div>

                                <div class="d-flex flex-column mt-2 campo">
                                    <label for="type_document">Tipo de documento:</label>
                                    <input id="type_document" name="type_document" type="text" placeholder="Teléfono" value="<?= $datos['type_document'] ?>"
                                        autocomplete="off" class="input-form-user py-3 px-2">
                                </div>

                                <div class="d-flex flex-column mt-2 campo">
                                    <label for="document">Documento:</label>
                                    <input id="document" name="document" type="number" placeholder="Número de documento" value="<?= $datos['document'] ?>"
                                        autocomplete="off" class="input-form-user py-3 px-2">
                                </div>

                                <div class="d-flex flex-column mt-2 campo">
                                    <label for="status">Estado:</label>
                                    <select id="status" name="status" placeholder="Estado"
                                        class="input-form-user py-3 px-2">
                                        <?php foreach ($status as $option): ?>
                                            <option value="<?= $option['status'] ?>" <?= $option['status'] == $users['status'] ? 'selected' : '' ?>>
                                                <?= $option['status'] ?>
                                            </option>
                                        <?php endforeach; ?>
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