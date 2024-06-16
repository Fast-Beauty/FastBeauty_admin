<div class="pcoded-content">
    <div class="page-header card">
        <div class="back-user">
            <a href="?c=Employees&m=index">
                <span class="feather icon-arrow-left"></span> Volver
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="">
                <div class="page-header-title">
                    <div class="d-inline">
                        <form action="?c=Employees&m=update" class="bg-white px-5 py-4 formulario-user" method="post">
                            <h3 class="mb-4 text-center">Editar Cliente</h3>
                            <input type="hidden" name="id" value="<?= $employees['id'] ?>">

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="user_id">Usuario:</label>
                                <select id="users_id" class="input-form-user py-3 px-2" name="users_id" disabled>
                                    <?php foreach ($users as $user): ?>
                                        <option value="<?= $user['id'] ?>" <?= $user['id'] == $employees['users_id'] ? 'selected' : '' ?>>
                                            <?= $user['name'] . ' ' . $user['lastname'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="document">Documento:</label>
                                <select id="document" class="input-form-user py-3 px-2" name="document" disabled>
                                    <?php foreach ($users as $user): ?>
                                        <option value="<?= $user['id'] ?>" <?= $user['id'] == $employees['users_id'] ? 'selected' : '' ?>>
                                            <?= $user['document'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="status">Estado:</label>
                                <select id="status" class="input-form-user py-3 px-2" name="status">
                                    <?php foreach ($status as $statu): ?>
                                        <option value="<?= $statu['status'] ?>" <?= $statu['status'] == $employees['users_id'] ? 'selected' : '' ?>>
                                            <?= $statu['status'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <button type="submit" class="submit-user w-100 mt-4 py-3 text-white">Actualizar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
