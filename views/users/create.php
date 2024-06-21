<!-- Contenido -->
<div class="pcoded-content">

    <div class="page-header card">
        <div class="back-user">
            <a href="?c=Users&m=index">
                <span class="feather icon-arrow-left"></span> Volver
            </a>
        </div>

        <div class="row justify-content-center">
            <div class="">
                <div class="page-header-title">
                    <div class="d-inline">
                        <!-- Aquí se cambia el contenido -->
                        <form action="?c=Users&m=createupdate" class="bg-white px-5 py-4 formulario-user" method="post">
                            <h3 class="mb-4 text-center">Nuevo Usuario</h3>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="nombre">Nombre:</label>
                                <input id="name" name="name" type="text" placeholder="Nombre Completo"
                                    autocomplete="off" class="input-form-user py-3 px-2">
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="nombre">Apellido:</label>
                                <input id="lastname" name="lastname" type="text" placeholder="Nombre Completo"
                                    autocomplete="off" class="input-form-user py-3 px-2">
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="email">Email:</label>
                                <input id="email" name="email" type="email" placeholder="Email" autocomplete="off"
                                    class="input-form-user py-3 px-2">
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="tel">Teléfono:</label>
                                <input id="phone" name="phone" type="number" placeholder="Teléfono" autocomplete="off"
                                    class="input-form-user py-3 px-2">
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="type_document">Tipo de documento:</label>
                                <select name="type_document" id="type_document" class="input-form-user py-3 px-2">
                                    <option value="" selected disabled>Seleccione</option>
                                    <option value="C.C">Cédula de ciudadanía</option>
                                    <option value="T.I">Tarjeta de identidad</option>
                                    <option value="C.E">Cédula de extranjería</option>
                                </select>
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="document">Documento:</label>
                                <input id="document" name="document" type="number" placeholder="Número de documento"
                                    autocomplete="off" class="input-form-user py-3 px-2">
                            </div>

                            <div class="d-flex flex-column mt-2 campo password">
                                <label for="password">Contraseña:</label>
                                <input id="password" name="password" type="password" placeholder="Contraseña"
                                    autocomplete="off" class="input-form-user py-3 px-2">
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="status">Estado:</label>
                                <select name="status" id="status" class="input-form-user py-3 px-2">
                                    <option value="" selected disabled>Seleccione un estado</option>
                                    <option value="Active">Activo</option>
                                    <option value="Inactive">Inactivo</option>
                                </select>
                            </div>

                            <input type="submit" value="Guardar" class="submit-user w-100 mt-4 py-3 text-white">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>
</div>
<script src="./assets/js/usersAdmin.js" type="module"></script> 