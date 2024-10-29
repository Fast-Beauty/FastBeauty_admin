<!-- Contenido -->
<div class="pcoded-content">

    <div class="page-header card">
        <div class="back-user">
            <a href="?c=Branch&m=index">
                <span class="feather icon-arrow-left"></span> Volver
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="">
                <div class="page-header-title">
                    <div class="d-inline">
                        <!-- Aquí se cambia el contenido -->
                        <form action="?c=Branch&m=createupdate" id="formularioBranch" class="bg-white px-5 py-4 formulario-user" method="post">
                        <h3 class="mb-4 text-center">Nueva Sucursal</h3>
                        <div class="d-flex flex-column mt-2 campo">
                            <label for="nombre">Nombre:</label>
                            <input id="nombre" type="text" placeholder="Nombre" autocomplete="off" class="input-form-user py-3 px-2" name="name">
                        </div>
                        
                        <div class="d-flex flex-column mt-2 campo">
                            <label for="nit">NIT:</label>
                            <input id="nit" type="number" placeholder="Nit" autocomplete="off" class="input-form-user py-3 px-2" name="nit">
                        </div>

                        <div class="d-flex flex-column mt-2 campo">
                            <label for="addres">Direccion:</label>
                            <input id="addres" type="text" placeholder="Direccion" autocomplete="off" class="input-form-user py-3 px-2" name="addres">
                        </div>

                        <div class="d-flex flex-column mt-2 campo">
                            <label for="google_location">Ubicacion:</label>
                            <input id="google_location" type="text" placeholder="Ubicacion" autocomplete="off" class="input-form-user py-3 px-2" name="google_location">
                        </div>

                        <div class="d-flex flex-column mt-2 campo">
                            <label for="phone">Telefono:</label>
                            <input id="phone" type="text" placeholder="Telefono" autocomplete="off" class="input-form-user py-3 px-2" name="phone">
                        </div>

                        <input type="submit" value="Añadir Sucursal" class="submit-user w-100 mt-4 py-3 text-white">
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
<script src="assets/js/BranchValidation.js"></script>