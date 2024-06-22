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
                        <form action="?c=EmployeesImages&m=update" class="bg-white px-5 py-4 formulario-user" method="post" enctype="multipart/form-data">
                            <h3 class="mb-4 text-center">Editar Imagen del Trabajador</h3>
                            
                            <input type="hidden" name="id" value="<?= $datosEmpleado['id'] ?>">

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="employee_name">Nombre del Trabajador:</label>
                                <input type="text" id="employee_name" class="input-form-user py-3 px-2" name="employee_name" value="<?= $datosEmpleado['user_name'] ?>" readonly>
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="employee_lastname">Apellido del Trabajador:</label>
                                <input type="text" id="employee_lastname" class="input-form-user py-3 px-2" name="employee_lastname" value="<?= $datosEmpleado['user_lastname'] ?>" readonly>
                            </div>

                            <div class="d-flex flex-column mt-4 campo">
                                <label for="imagen_actual">Imagen Actual:</label>
                                <img src="data:<?= $datosEmpleado['tipo_imagen'] ?>;base64,<?= base64_encode($datosEmpleado['imagen']) ?>" alt="Imagen actual" class="img-thumbnail" style="max-width: 200px;">
                            </div>

                            <div class="d-flex flex-column mt-4 campo">
                                <label for="imagen">Nueva Imagen (opcional):</label>
                                <input type="file" class="form-control-file py-3 px-2" id="imagen" name="imagen" accept="image/*">
                                <small id="imagenHelp" class="form-text text-muted">Formatos permitidos: JPEG, PNG, GIF. Tamaño máximo: 2MB.</small>
                            </div>
                            <input type="submit" value="Guardar Cambios" class="submit-user w-100 mt-4 py-3 text-white">
                            <a href="?c=EmployeesImages&m=index" class="btn btn-secondary w-100 mt-3">Cancelar</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
