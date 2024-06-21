<!-- Contenido -->
<div class="pcoded-content">

    <div class="page-header card">
        <div class="back-user">
            <a href="?c=Score&m=index">
                <span class="feather icon-arrow-left"></span> Volver
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="">
                <div class="page-header-title">
                    <div class="d-inline">
                        <!-- Aquí se cambia el contenido -->
                    <form action="?c=Score&m=update" class="bg-white px-5 py-4 formulario-user" method="post">
                        <h3 class="mb-4 text-center">Editar Puntaje</h3>
                        <input type="hidden" value="<?=$_GET["id"]?>" name="id">
                        <?php foreach($this->modelosvc->obtenerId($_GET['id']) as $datos): ?>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="puntaje">Puntaje:</label>
                                <input id="puntaje" type="text" placeholder="Puntaje" autocomplete="off" value="<?= $datos['punctuation'] ?>" class="input-form-user py-3 px-2" name="name">
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="services_id">Servicio:</label>
                                <select name="services_id" id="services_id" class="input-form-user py-3 px-2">
                                <?php foreach ($services as $service): ?>
                                    <option value="<?= $service['id'] ?>" <?= $service['id'] == $score['services_id'] ? 'selected' : '' ?>>
                                        <?= $service['name'] ?>
                                    </option>
                                <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="clients_id">Clientes:</label>
                                <select name="clients_id" id="clients_id" class="input-form-user py-3 px-2">
                                <?php foreach ($clients as $client): ?>
                                        <option value="<?= $client['clients_id'] ?>" <?= $client['clients_id'] == $score['clients_id'] ? 'selected' : '' ?>>
                                            <?= $client['name']. ' ' . $client['lastname']?>
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