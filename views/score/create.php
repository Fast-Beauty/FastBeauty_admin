<!-- Contenido -->
<div class="pcoded-content">

    <div class="page-header card">
        <div class="back-user">
            <a href="?c=score&m=index">
                <span class="feather icon-arrow-left"></span> Volver
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="">
                <div class="page-header-title">
                    <div class="d-inline">
                        <!-- Aquí se cambia el contenido -->
                    <form action="?c=Score&m=create" class="bg-white px-5 py-4 formulario-user" method="post">
                        <h3 class="mb-4 text-center">Nuevo Puntaje</h3>
                        <div class="d-flex flex-column mt-2 campo">
                            <label for="nombre">Puntaje:</label>
                            <input id="nombre" type="text" placeholder="Nombre Completo" autocomplete="off" class="input-form-user py-3 px-2" name="name">
                        </div>

                        <div class="d-flex flex-column mt-2 campo">
                            <label for="services_id">Servicio:</label>
                            <select name="services_id" id="services_id" class="input-form-user py-3 px-2">
                                <option value="" selected disabled>Seleccione el servicio</option>
                                <?php foreach ($services as $service): ?>
                                        <option value="<?php echo $service['id']; ?>"><?php echo $service['name']; ?>
                                        </option>
                                    <?php endforeach; ?>
                            </select>
                        </div>

                        <div class="d-flex flex-column mt-2 campo">
                            <label for="clients_id">Clientes:</label>
                            <select name="clients_id" id="clients_id" class="input-form-user py-3 px-2">
                                <option value="" selected disabled>Seleccione el cliente</option>
                                <?php foreach ($clients as $client): ?>
                                        <option value="<?php echo $client['clients_id']; ?>">
                                            <?php echo $client['name'] . ' ' . $client['lastname']; ?>
                                        </option>
                                    <?php endforeach; ?>
                            </select>
                        </div>

                        <input type="submit" value="Añadir Puntaje" class="submit-user w-100 mt-4 py-3 text-white">
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