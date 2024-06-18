<!-- Contenido -->
<div class="pcoded-content">
    <div class="page-header card">
        <div class="back-user">
            <a href="?c=EmployeesImages&m=index">
                <span class="feather icon-arrow-left"></span> Volver
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="">
                <div class="page-header-title">
                    <div class="d-inline">
                        <!-- Aquí se cambia el contenido -->
                        <form action="?c=EmployeesImages&m=createupdate" class="bg-white px-5 py-4 formulario-user" method="post" enctype="multipart/form-data">
                            <h3 class="mb-4 text-center">Agregar Imagen de Trabajador</h3>
                            
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="employee_id">Seleccionar Trabajador:</label>
                                <select id="employee_id" class="input-form-user py-3 px-2" name="employee_id" required>
                                    <option value="">Seleccione un trabajador</option>
                                    <?php foreach ($employees as $employee): ?>
                                        <option value="<?= $employee['id'] ?>"><?= $employee['user_name'] . ' ' . $employee['user_lastname'] . ' (' . $employee['status'] . ')' ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>

                            <div class="d-flex flex-column mt-4 campo">
                                <label for="imagen">Imagen:</label>
                                <input type="file" class="form-control-file py-3 px-2" id="imagen" name="imagen" accept="image/*" required>
                                <small id="imagenHelp" class="form-text text-muted">Formatos permitidos: JPEG, PNG, GIF. Tamaño máximo: 2MB.</small>
                            </div>

                            <div class="d-flex flex-column mt-4 campo">
                                <label for="tipo_imagen">Tipo de Imagen:</label>
                                <input type="text" class="form-control py-3 px-2" id="tipo_imagen" name="tipo_imagen" required>
                                <small id="tipoImagenHelp" class="form-text text-muted">Ejemplos: Foto de perfil, Documento de identidad, etc.</small>
                            </div>

                            <input type="submit" value="Guardar" class="submit-user w-100 mt-4 py-3 text-white">
                            <a href="?c=EmployeesImages&m=index" class="btn btn-secondary w-100 mt-3">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
