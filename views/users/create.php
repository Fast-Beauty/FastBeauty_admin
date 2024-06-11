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
                        <form action="views/users/code/code_create.php" class="bg-white px-5 py-4 formulario-user" method="post">
                            <h3 class="mb-4 text-center">Nuevo Usuario</h3>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="nombre">Nombre:</label>
                                <input id="name" name="name" type="text" placeholder="Nombre Completo" autocomplete="off" class="input-form-user py-3 px-2">
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="email">Email:</label>
                                <input id="email" name="email" type="email" placeholder="Tu Email" autocomplete="off" class="input-form-user py-3 px-2">
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="tel">Teléfono:</label>
                                <input id="phone" name="phone" type="tel" placeholder="Tu Teléfono" autocomplete="off" class="input-form-user py-3 px-2">
                            </div>

                            <div class="d-flex flex-column mt-2 campo">
                                <label for="date_birth">Fecha de nacimiento:</label>
                                <input id="date_birth" name="date_birth" type="text" placeholder="Tu Fecha de nacimiento" autocomplete="off" class="input-form-user py-3 px-2">
                            </div>
                            <div class="d-flex flex-column mt-2 campo">
                                <label for="password">Contraseña:</label>
                                <input id="password" name="password" type="password" placeholder="Contraseña" autocomplete="off" class="input-form-user py-3 px-2" name="password">
                            </div>

                            <input type="submit" value="Añadir Usuario" class="submit-user w-100 mt-4 py-3 text-white">
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