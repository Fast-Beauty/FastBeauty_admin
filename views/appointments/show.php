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
                        <form action="?c=Appointments&m=update" class="bg-white px-5 py-4 formulario-user"
                            method="post">
                            <h3 class="mb-4 text-center">Destalle de la Cita</h3>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="status">Estado:</label>
                                <select id="status" class="input-form-user py-3 px-2" name="status" disabled>
                                    <?php foreach ($status as $row): ?>
                                        <option value="<?= $row['status'] ?>" <?= $row['status'] == $appointment['status'] ? 'selected' : '' ?>>
                                            <?= $row['status'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <!-- Otras entradas del formulario para otros campos de la cita -->
                            <!-- Por ejemplo: Fecha, Hora, Cliente, Trabajador, Servicio -->
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="date">Fecha:</label>
                                <input id="date" type="date" placeholder="Fecha cita" autocomplete="off"
                                    value="<?= $appointment['date'] ?>" class="input-form-user py-3 px-2" name="date" disabled>
                            </div>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="hora">Hora:</label>
                                <input id="hora" type="time" placeholder="Hora cita" autocomplete="off"
                                    value="<?= $appointment['hora'] ?>" class="input-form-user py-3 px-2" name="hora" disabled>
                            </div>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="clients_id">Cliente:</label>
                                <select id="clients_id" class="input-form-user py-3 px-2" name="clients_id" disabled>
                                    <?php foreach ($clients as $client): ?>
                                        <option value="<?= $client['clients_id'] ?>" <?= $client['clients_id'] == $appointment['clients_id'] ? 'selected' : '' ?>>
                                            <?= $client['name']. ' ' . $client['lastname']?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="Employees_id">Trabajador:</label>
                                <select id="Employees_id" class="input-form-user py-3 px-2" name="Employees_id" disabled>
                                    <?php foreach ($employees as $employee): ?>
                                        <option value="<?= $employee['employee_id'] ?>" <?= $employee['employee_id'] == $appointment['Employees_id'] ? 'selected' : '' ?>>
                                            <?= $employee['name']. ' ' . $employee['lastname'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="services_id">Servicio:</label>
                                <select id="services_id" class="input-form-user py-3 px-2" name="services_id" disabled>
                                    <?php foreach ($services as $service): ?>
                                        <option value="<?= $service['id'] ?>" <?= $service['id'] == $appointment['services_id'] ? 'selected' : '' ?>>
                                            <?= $service['name'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <!-- Agregar más campos según sea necesario -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>