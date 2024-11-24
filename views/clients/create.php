<!-- Contenido -->
<div class="pcoded-content">
    <div class="page-header card">
        <div class="back-user">
            <a href="?c=Clients&m=index">
                <span class="feather icon-arrow-left"></span> Volver
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="">
                <div class="page-header-title">
                    <div class="d-inline">
                        <!-- Aquí se cambia el contenido -->
                        <form action="?c=Clients&m=createupdate" id="formularioClientes" class="bg-white px-5 py-4 formulario-user" method="post">
                            <h3 class="mb-4 text-center">Nuevo Cliente</h3>
                            
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="user_id">Usuario:</label>
                                <select id="user_id" class="input-form-user py-3 px-2" name="user_id" required>
                                    <option value="" selected disabled>Seleccione un usuario</option>
                                    <?php foreach ($users as $user): ?>
                                        <option value="<?= $user['id'] ?>"><?= $user['name'] . ' ' . $user['lastname'] . ' (' . $user['status'] . ')' ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="date">Fecha de cumpleaños:</label>
                                <input id="client_datebirth" type="date" placeholder="Fecha cita" autocomplete="off" class="input-form-user py-3 px-2" name="client_datebirth">
                            </div>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="client_gender">Género del Cliente:</label>
                                <select id="client_gender" class="input-form-user py-3 px-2" name="client_gender">
                                    <option value="" selected disabled>Seleccione el genero</option>
                                    <option value="FEMENINO">Femenino</option>
                                    <option value="MASCULINO">Masculino</option>
                                    <option value="OTRO">Otro</option>
                                </select>
                            </div>

                            <input type="submit" value="Crear Cliente" class="submit-user w-100 mt-4 py-3 text-white">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="assets/js/ClientsValidation.js"></script>
