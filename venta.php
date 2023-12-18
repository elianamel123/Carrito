<?php
include("include/conexion.php");
session_start();
$_SESSION ['productos'] = array();


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
    <link rel="stylesheet" href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" type="text/css">
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />

    <!-- Plugins css -->
    <link href="plantilla/Admin/plugins/datatables/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/plugins/datatables/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/plugins/datatables/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/plugins/datatables/select.bootstrap4.css" rel="stylesheet" type="text/css" />

    <!-- Script obtenido desde CDN jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <style>
        .cantidad{
            width: 3em;

        }
    </style>

</head>

<body>


    <?php
    //lenguaje en php
    include("include/menu.php");
    ?>

    <!--Inicio de Contenido-->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">


                        <h4 class="">Registrar Nueva Venta</h4>
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <form action="">
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-md-2 col-sm-12"> DNI: </label>
                                                <input type="number" name="dni" class="form-control col-lg-4 col-md-4 col-sm-12" required placeholder="Buscar">
                                                <button class="btn btn-danger form-control col-lg-2 col-md-1 col-sm-4 ">Buscar</button>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-2 col-md-2 col-sm-12"> Apellidos y Nombres: </label>
                                                <div id="cliente_datos" class=" col-lg-6 col-md-6 col-sm-12">
                                                    <input type="text" class="form-control col-lg-6 col-md-6 col-sm-12" readonly>
                                                </div>

                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-2 col-md-2 col-sm-12"> Usuario: </label>
                                                <select name="usuario" id="usuario" class="form-control col-lg-6 col-md-6 col-sm-12">
                                                    <option value=""></option>
                                                    <?php
                                                    $consulta = "SELECT * FROM usuario";
                                                    $ejecutar = mysqli_query($conexion, $consulta);
                                                    while ($usuario = mysqli_fetch_array($ejecutar)) {
                                                        echo '<option value="'.$usuario['id'].'">'.$usuario['apellidos_nombres'].'</option>';
                                                    }

                                                    ?>
                                                </select>


                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-2 col-md-2 col-sm-12"> Producto: </label>
                                                <input type="text" name="producto"  id="producto" class="form-control col-lg-4 col-md-4 col-sm-12" required placeholder="Buscar">
                                                <button type="button" class="btn btn-danger form-control col-lg-2 col-md-1 col-sm-4 " onclick="agregar_producto();" >Agregar</button>
                                            </div>

                                            <div class="form-group row">
                                                <label class="col-lg-2 col-md-2 col-sm-12"> Fecha y Hora: </label>
                                                <label for="" class="form-control col-lg-4 col-md-4 col-sm-12">
                                                    <?php 
                                                    date_default_timezone_set("America/Lima");
                                                    echo date("d-m-Y h:i:s") ?>
                                                </label>
                                                


                                            </div>
                                            <div class="form-group row">
                                                <button type="submit" class="btn btn-danger">Registrar Venta</button>
                                            </div>



                                        </form>


                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <table class="table table-bordered mb-0">
                                            <thead>
                                                <tr>
                                                    <th colspan="6" class="text-center">Producto</th>
                                                </tr>
                                                <tr>
                                                    <th width= "5%">Num:</th>
                                                    <th width= "60%">Descripcion</th>
                                                    <th width= "10%">Cant.</th>
                                                    <th width= "10%">P. Unit.</th>
                                                    <th width= "10%">Importe</th>
                                                    <th width= "5%"></th>
                                                </tr>
                                            </thead>
                                            <tbody id="contenido_tabla">
                                                <?php
                                                $array_productos = $_SESSION ["productos"];
                                                foreach ($array_productos as $key => $value) {
                                                    // Key => id Value => Cantidad
                                                    $consulta = "SELECT * FROM producto WHERE id=$key";
                                                    $ejecutar = mysqli_query($conexion,$consulta);
                                                    $producto = mysqli_fetch_array($ejecutar);
                                                
                                                
                                                
                                                ?>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Nombre Producto</td>
                                                    <td> <input type="number" value="1" class="cantidad" onchange="actualizar_cantidad(id);" > </td>
                                                    <td>S/.50.00</td>
                                                    <td>S/.100.00</td>
                                                    <td><button class="btn btn-info" onclick="eliminar_producto(id);">x</button></td>
                                                </tr>
                                                <?php } ?>
                                                <tr>
                                                    <td colspan="4" class="text-center">TOTAL</td>
                                                    <td>S/.100.00</td>
                                                </tr>
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

    <!--Fin de Contenido-->



    <!-- jQuery  -->
    <script src="plantilla/Admin/vertical/assets/js/jquery.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/bootstrap.bundle.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/metismenu.min.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/waves.js"></script>
    <script src="plantilla/Admin/vertical/assets/js/simplebar.min.js"></script>

    <!-- third party js -->
    <script src="plantilla/Admin/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.bootstrap4.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.responsive.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/responsive.bootstrap4.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.buttons.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/buttons.bootstrap4.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/buttons.html5.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/buttons.flash.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/buttons.print.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.keyTable.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/dataTables.select.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/pdfmake.min.js"></script>
    <script src="plantilla/Admin/plugins/datatables/vfs_fonts.js"></script>
    <!-- third party js ends -->

    <!-- Datatables init -->
    <script src="plantilla/Admin/vertical/assets/pages/datatables-demo.js"></script>

    <!-- App js -->
    <script src="plantilla/Admin/vertical/assets/js/theme.js"></script>

    <script>
        function agregar_producto(){
            var codigo = $('#producto').val();
            $.ajax({
                type: "POST",
                url: "Operaciones/agregar_producto.php",
                data:{cod:codigo},
                success: function(r){
                    $('#contenido_tabla').html(r);

                }
            })
            document.getElementById('producto').value = '';


        };
        function actualizar_cantidad(id) {
            var cantidad = $('#cantidad_' + id).val();
            $.ajax({
                type: "POST",
                url: "Operaciones/actualizar_cantidad.php",
                data: {
                    id_p: id,
                    cant: cantidad
                },
                success: function(r) {
                    $('#contenido_tabla').html(r);
                }
            })
        };

        
        function eliminar_producto(id){
            
            
            


        };

        function buscar_cliente() {
            var dni = $('#dni_cliente').val();
            $.ajax({
                type: "POST",
                url: "Operaciones/buscar_cliente.php",
                data: {
                    dni_c: dni
                },
                success: function(r) {
                    $('#cliente_datos').html(r);
                }
            })
        };
    </script>

</body>

</html>