<!-- Contenido -->
<div class="pcoded-content">
    <div class="page-header card">
        <div class="back-user">
            <a href="?c=Appointments&m=index">
                <span class="feather icon-arrow-left"></span> Volver
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="">
                <div class="page-header-title">
                    <div class="d-inline">
                        <!-- Aquí se cambia el contenido -->
                        <form action="?c=Appointments&m=createupdate" id="formularioUserCreate" class="bg-white px-5 py-4 formulario-user"
                            method="post">
                            <h3 class="mb-4 text-center">Nueva Cita</h3>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="status">Estado:</label>
                                <select id="status" class="input-form-user py-3 px-2" name="status id">
                                    <option selected>Open this select menu</option>
                                    <option value="ESPERA">Espera</option>
                                    <option value="CONFIRMADO">Confirmado</option>
                                    <option value="RECHAZADO">Rechazado</option>
                                </select>
                            </div>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="date">Fecha:</label>
                                <input id="date" type="date" placeholder="Fecha cita" autocomplete="off"
                                    class="input-form-user py-3 px-2" name="date">
                            </div>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="hora">Hora:</label>
                                <input id="hora" type="time" placeholder="Hora" autocomplete="off"
                                    class="input-form-user py-3 px-2" name="hora">
                            </div>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="clients_id">Cliente:</label>
                                <select id="clients_id" class="input-form-user py-3 px-2" name="clients_id">
                                    <option selected>Open this select menu</option>
                                    <?php foreach ($clients as $client): ?>
                                        <option value="<?php echo $client['clients_id']; ?>">
                                            <?php echo $client['name'] . ' ' . $client['lastname']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="Employees_id">Trabajador:</label>
                                <select id="Employees_id" class="input-form-user py-3 px-2" name="Employees_id">
                                    <option selected disabled>Selecciona un trabajador</option>
                                    <?php foreach ($employees as $employee): ?>
                                        <option value="<?php echo $employee['employee_id']; ?>">
                                            <?php echo $employee['name'] . ' ' . $employee['lastname']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>


                            <div class="d-flex flex-column mt-2 campo">
                                <label for="services_id">Servicio:</label>
                                <select id="services_id" class="input-form-user py-3 px-2" name="services_id">
                                    <option selected>Open this select menu</option>
                                    <?php foreach ($services as $service): ?>
                                        <option value="<?php echo $service['id']; ?>"><?php echo $service['name']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <input type="submit" value="Añadir Cita" class="submit-user w-100 mt-4 py-3 text-white">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>