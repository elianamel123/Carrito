<?php 
include ("include/conexion.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
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
                <?php include("include/modal_reg_prod.php"); ?>
                    <h4 class="">Registro de Productos</h4>
                    <div class="card">
                        <div class="card-body">
                        <table id="basic-datatable" class="table dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>Num:</th>
                                        <th>Codigo:</th>
                                        <th>Descripción:</th>
                                        <th>Detalle:</th>
                                        <th>Precio Compra:</th>
                                        <th>Precio Venta:</th>
                                        <th>Stock:</th>
                                        <th>Estado Activo:</th>
                                        <th>Imagen:</th>
                                    </tr>

                                    <?php
                                        $consulta ="SELECT * FROM producto";
                                        $ejecutar =mysqli_query($conexion,$consulta);
                                        $contador =0;
                                        while ($respuesta =mysqli_fetch_array($ejecutar)) {
                                            # code...
                                            $contador += 1;
                                            echo "<tr>";
                                            echo "<td>".$contador."</td>";
                                            echo "<td>".$respuesta['codigo']."</td>";
                                            echo "<td>".$respuesta['descripcion']."</td>";
                                            echo "<td>".$respuesta['detalle']."</td>";
                                            echo "<td>".$respuesta['precio_compra']."</td>";
                                            echo "<td>".$respuesta['precio_venta']."</td>";
                                            echo "<td>".$respuesta['stock']."</td>";
                                            echo "<td>".$respuesta['estado']."</td>";
                                            echo "<td>".$respuesta['imagen']."</td>";
                                            echo "<td><button class='btn bnt-success'>Editar</button><button class='btn btn-success'</td>";
                                            
                                            echo "</tr>";
                                        }
                                        
                                        
                                        ?>

                                   
                              
                              

                                </thead>
                                <tbody>

                             

                                </tbody>
                            </table>
                        
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