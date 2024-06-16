<!-- edit.php -->

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
                        <form action="?c=EmployeesImages&m=update" method="POST" enctype="multipart/form-data" class="bg-white px-5 py-4 formulario-user">
                            <input type="hidden" name="id" value="<?= $datosEmpleado['id'] ?>">
                            <h3 class="mb-4 text-center">Editar Imagen del Trabajador</h3>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="user_name">Nombre del Trabajador:</label>
                                <input id="user_name" type="text" value="<?= $datosEmpleado['user_name'] ?>" class="input-form-user py-3 px-2" name="user_name" disabled>
                            </div>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="user_lastname">Apellido del Trabajador:</label>
                                <input id="user_lastname" type="text" value="<?= $datosEmpleado['user_lastname'] ?>" class="input-form-user py-3 px-2" name="user_lastname" disabled>
                            </div>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="tipo_imagen">Tipo de Imagen:</label>
                                <input id="tipo_imagen" type="text" value="<?= $datosEmpleado['tipo_imagen'] ?>" class="input-form-user py-3 px-2" name="tipo_imagen">
                                <small class="text-muted">Escribe el tipo de imagen (por ejemplo: jpg, png, jpeg).</small>
                            </div>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="imagen_actual">Imagen Actual:</label>
                                <?php if (!empty($datosEmpleado['imagen'])): ?>
                                    <img src="data:image/jpeg;base64,<?= $datosEmpleado['imagen'] ?>" alt="Imagen Actual" style="max-width: 100px;">
                                <?php else: ?>
                                    <p>No hay imagen disponible</p>
                                <?php endif; ?>
                            </div>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="imagen">Cambiar Imagen:</label>
                                <input id="imagen" type="file" class="input-form-user py-3 px-2" name="imagen">
                                <small class="text-muted">Selecciona una nueva imagen solo si deseas cambiarla.</small>
                            </div>
                            <div class="d-flex justify-content-center mt-4">
                                <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
