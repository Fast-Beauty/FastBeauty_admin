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
                        <form class="bg-white px-5 py-4 formulario-user">
                            <h3 class="mb-4 text-center">Detalles del Cliente</h3>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="user_id">ID del Cliente:</label>
                                <input id="user_id" type="text" value="<?= $clientDetails['id'] ?>" class="input-form-user py-3 px-2" name="user_id" disabled>
                            </div>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="user_name">Nombre del Cliente:</label>
                                <input id="user_name" type="text" value="<?= $clientDetails['name'] ?>" class="input-form-user py-3 px-2" name="user_name" disabled>
                            </div>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="user_lastname">Apellido del Cliente:</label>
                                <input id="user_lastname" type="text" value="<?= $clientDetails['lastname'] ?>" class="input-form-user py-3 px-2" name="user_lastname" disabled>
                            </div>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="user_document">Número de Documento:</label>
                                <input id="user_document" type="text" value="<?= $clientDetails['document'] ?>" class="input-form-user py-3 px-2" name="user_document" disabled>
                            </div>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="user_document">Fecha de cumpleaños:</label>
                                <input id="user_document" type="text" value="<?= $clientDetails['date_birth'] ?>" class="input-form-user py-3 px-2" name="user_document" disabled>
                            </div>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="user_status">Estado del Cliente:</label>
                                <input id="user_status" type="text" value="<?= $clientDetails['status'] ?>" class="input-form-user py-3 px-2" name="user_status" disabled>
                            </div>
                            <!-- Agregar más campos según sea necesario -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
