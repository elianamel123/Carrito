<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ventas</title>
    <link rel="stylesheet" href="plantilla/Admin/vertical/assets/css/bootstrap.min.css" type="text/css" >
    <link href="plantilla/Admin/vertical/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="plantilla/Admin/vertical/assets/css/theme.min.css" rel="stylesheet" type="text/css" />
</head>
<body>


<?php 
//lenguaje en php
include ("include/menu.php");
?>

<!--Inicio de Contenido-->
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h4 class="">Registro de Ventas</h4>
                    <div class="card">
                        <div class="card-body">
                        <form action="Operaciones/registrar_usuario.php" method="POST">
                         
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12"> Serie de Venta: </label>
                                <input type="text" name="serie" class="form-control col-lg-6 col-md-6 col-sm-12" 
                                required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12"> Número de Venta: </label>
                                <input type="number" name="num" class="form-control col-lg-6 col-md-6 col-sm-12" 
                                required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12"> Fecha Venta: </label>
                                <input type="date" name="fecha" class="form-control col-lg-4 col-md-4 col-sm-12" 
                                required>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-3 col-md-3 col-sm-12"> Monto Total: </label>
                                <input type="number" name="monto" class="form-control col-lg-6 col-md-6 col-sm-12" 
                                required>
                            </div>
                           

                            <div class="form-group row">
                            <label class="col-lg-3 col-md-3 col-sm-12"></label>
                                <button type="submit" class="btn btn-success">Guardar

                                </button>

                            </div>
                        </form>
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

    <!-- App js -->
    <script src="plantilla/Admin/vertical/assets/js/theme.js"></script>

</body>
</html>