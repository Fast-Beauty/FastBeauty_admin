
<div class="pcoded-content">

    <div class="page-header card my-0">
        <div class="d-flex justify-content-between align-items-center pt-3">
            <h3 class="font-weight-bolder">Usuarios</h3>
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="?c=Dashboard&m=dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Usuarios</a> </li>
                    </ul>
                </div>
        </div>
        <div class="d-flex justify-content-end align-items-center border-bottom pb-3">
            <!-- <a href="?c=Users&m=create" class="py-3 px-5 rounded text-white add">Nuevo</a> -->
            <a href="#" class="py-3 px-5 rounded text-white add" data-bs-toggle="modal" data-bs-target="#exampleModal">Nuevo</a>
        </div>
        <div class="row align-items-start">
            <div class="col-lg-12">
                <div class="page-header-title">
                    <div class="d-inline">
                        <table class="table table-hover table-borderless">
                            <thead>
                                <tr class="">
                                    <th scope="col"></th>
                                    <th scope="col">id</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Teléfono</th>
                                    <th scope="col">Tipo de documento</th>
                                    <th scope="col" class="text-center">Estado</th>
                                    <th scope="col" class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody id="tbody">
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-2">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Usuarios</a> </li>
                    </ul>
                </div>
            </div> -->
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="" class="bg-white px-5 py-4 formulario-user" method="post">
        <h3 class="mb-4 text-center">Nuevo Usuario</h3>
        <div class="d-flex flex-column mt-2 campo">
            <label for="nombre">Nombre:</label>
            <input id="name" name="name" type="text" placeholder="Nombre Completo" autocomplete="off" class="input-form-user py-3 px-2">
        </div>

        <div class="d-flex flex-column mt-2 campo">
            <label for="email">Email:</label>
            <input id="email" name="email" type="email" placeholder="Email" autocomplete="off" class="input-form-user py-3 px-2">
        </div>

        <div class="d-flex flex-column mt-2 campo">
            <label for="tel">Teléfono:</label>
            <input id="phone" name="phone" type="tel" placeholder="Teléfono" autocomplete="off" class="input-form-user py-3 px-2">
        </div>

        <div class="d-flex flex-column mt-2 campo">
            <label for="documento">Documento:</label>
            <input id="documento" name="documento" type="text" placeholder="Número de documento" autocomplete="off" class="input-form-user py-3 px-2">
        </div>
        <div class="d-flex flex-column mt-2 campo">
            <input id="id" name="id" type="text" placeholder="Número de id" autocomplete="off" class="input-form-user py-3 px-2" hidden>
        </div>
        <div class="d-flex flex-column mt-2 campo">
            <input id="idFirebase" name="id" type="text" placeholder="Número de id" autocomplete="off" class="input-form-user py-3 px-2" hidden>
        </div>

        <input type="submit" value="Guardar" class="submit-user w-100 mt-4 py-3 text-white">
    </form>
  </div>
</div>

</div>
</div>
</div>
</div>

<script src="./assets/js/firebaseFetch.js"></script>
<script src="./assets/js/main.js"></script>