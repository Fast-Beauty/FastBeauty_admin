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
                        <form class="bg-white px-5 py-4 formulario-user">
                            <h3 class="mb-4 text-center">Detalles del Trabajador</h3>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="user_id">ID de usuario:</label>
                                <input id="user_id" type="text" value="<?= $employeesDetails['id'] ?>" class="input-form-user py-3 px-2" name="user_id" disabled>
                            </div>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="user_name">Nombre del Trabajador:</label>
                                <input id="user_name" type="text" value="<?= $employeesDetails['name'] ?>" class="input-form-user py-3 px-2" name="user_name" disabled>
                            </div>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="user_lastname">Apellido del Trabajador:</label>
                                <input id="user_lastname" type="text" value="<?= $employeesDetails['lastname'] ?>" class="input-form-user py-3 px-2" name="user_lastname" disabled>
                            </div>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="user_document">Número de Documento:</label>
                                <input id="user_document" type="text" value="<?= $employeesDetails['document'] ?>" class="input-form-user py-3 px-2" name="user_document" disabled>
                            </div>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="user_status">Estado del Trabajador:</label>
                                <input id="user_status" type="text" value="<?= $employeesDetails['status'] ?>" class="input-form-user py-3 px-2" name="user_status" disabled>
                            </div>
                            <!-- Agregar más campos según sea necesario -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
