<!-- Contenido -->
<div class="pcoded-content">

    <div class="page-header card my-0">
        <div class="d-flex justify-content-between align-items-center pt-3">
            <h3 class="font-weight-bolder">Productos</h3>
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="?c=dashboard&m=dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Productos</a> </li>
                    </ul>
                </div>
        </div>
        <div class="d-flex justify-content-end align-items-center border-bottom pb-3">
            <a href="?c=products&m=create" class="py-3 px-5 rounded text-white add">Nuevo</a>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <table class="table table-striped table-borderless">
                        <thead>
                            <tr >
                                <th>ID</th>
                                <th>NOMBRE</th>
                                <th>PRECIO</th>
                                <th>IMAGEN</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody >
                            <?php for($i=1;$i<10;$i++){  ?>
                            <tr class="bg-white">
                                <td>
                                    <?php echo $i ?>
                                </td>
                                <td>Kit Reparación Capilar | Vita Sané.</td>
                                <td>$113.000,00 </td>
                                <td><img width="50px" src="https://elenacuidadocapilar.com/cdn/shop/files/1_6.webp?v=1691085055&width=713" alt="" class="img-products"></td>
                                <td>
                                    
                                    
                                    <div class="justify-content-evenly d-flex">
                                      
                                        <a href="?c=products&m=show"><span ><i class="feather icon-clipboard p-2"></i>Detalles</span></a> 
                                        <a href="?c=products&m=edit"><span><i class="feather icon-upload p-2"></i>Editar</span></a> 
                                        <a href=""><span><i class="feather icon-trash-2 p-2"></i>Eliminar</span></a>  
                                    </div>
                                </td>

                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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

<!-- Aquí finalmente se cierran todas las etiquetas -->