<!-- Contenido -->
<div class="pcoded-content">

    <div class="page-header card">
        <div class="back-user">
            <a href="?c=Services&m=index">
                <span class="feather icon-arrow-left"></span> Volver
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="">
                <div class="page-header-title">
                    <div class="d-inline">
                        <!-- Aquí se cambia el contenido -->
                        <form action="?c=Services&m=createupdate" class="bg-white px-5 py-4 formulario-user" method="post">
                        <h3 class="mb-4 text-center">Nuevo Servicio</h3>
                        <div class="d-flex flex-column mt-2 campo">
                            <label for="nombre">Nombre:</label>
                            <input id="nombre" type="text" placeholder="Nombre Servicio" autocomplete="off" class="input-form-user py-3 px-2" name="name">
                        </div>
                        
                        <div class="d-flex flex-column mt-2 campo">
                            <label for="descripcion">Descripción:</label>
                            <input id="descripcion" type="text" placeholder="Descripción" autocomplete="off" class="input-form-user py-3 px-2" name="description">
                        </div>

                        <div class="d-flex flex-column mt-2 campo">
                            <label for="precio">Precio:</label>
                            <input id="precio" type="text" placeholder="Precio Base" autocomplete="off" class="input-form-user py-3 px-2" name="price">
                        </div>

                        <div class="d-flex flex-column mt-2 campo">
                            <label for="tiempo">Tiempo:</label>
                            <input id="tiempo" type="text" placeholder="Tiempo servicio" class="input-form-user py-3 px-2" name ="time">
                        </div>

                        <input type="submit" value="Añadir Servicio" class="submit-user w-100 mt-4 py-3 text-white">
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
