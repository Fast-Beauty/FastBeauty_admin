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
                        <form action="?c=Clients&m=update" class="bg-white px-5 py-4 formulario-user" method="post">
                            <h3 class="mb-4 text-center">Editar Cliente</h3>
                            <input type="hidden" name="id" value="<?= $client['id'] ?>">

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="user_id">Usuario:</label>
                                <select id="users_id" class="input-form-user py-3 px-2" name="users_id" readonly>
                                    <?php foreach ($users as $user): ?>
                                        <option value="<?= $user['id'] ?>" <?= $user['id'] == $client['users_id'] ? 'selected' : '' ?>>
                                            <?= $user['name'] . ' ' . $user['lastname'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="gender">Género:</label>
                                <select id="gender" class="input-form-user py-3 px-2" name="gender" required>
                                    <?php foreach ($genders as $gender): ?>
                                        <option value="<?= $gender['gender'] ?>" <?= $gender['gender'] == $client['gender'] ? 'selected' : '' ?>>
                                            <?= $gender['gender'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="date_birth">Fecha de Nacimiento:</label>
                                <input id="date_birth" type="date" value="<?= $client['date_birth'] ?>"
                                    class="input-form-user py-3 px-2" name="date_birth" required>
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="status">Estado:</label>
                                <select id="status" class="input-form-user py-3 px-2" name="status" disabled>
                                    <?php foreach ($users as $user): ?>
                                        <option value="<?= $employeesDetails['status'] ?>" <?= $user['id'] == $client['users_id'] ? 'selected' : '' ?>>
                                            <?= $user['status'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <!-- Otros campos del cliente -->

                            <button type="submit" class="submit-user w-100 mt-4 py-3 text-white">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>