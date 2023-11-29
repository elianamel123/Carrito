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
                <?php include("include/modal_venta.php"); ?>
                    <h4 class="">Registro de Ventas</h4>
                    <div class="card">
                        <div class="card-body">
                        <table id="basic-datatable" class="table dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>Id:</th>
                                        <th>Serie Venta:</th>
                                        <th>Numero de Venta:</th>
                                        <th>Fecha y Hora de Venta:</th>
                                        <th>Monto Total:</th>
                                        <th>Id Cliente</th>
                                        <th>Id Usuario:</th>
                                        
                                    </tr>
                                    <?php
                                        $consulta ="SELECT * FROM ventas";
                                        $ejecutar =mysqli_query($conexion,$consulta);
                                        $contador =0;
                                        while ($respuesta =mysqli_fetch_array($ejecutar)) {
                                            # code...
                                            $contador += 1;
                                            echo "<tr>";
                                            echo "<td>".$contador."</td>";
                                            echo "<td>".$respuesta['serie_venta']."</td>";
                                            echo "<td>".$respuesta['numero_venta']."</td>";
                                            echo "<td>".$respuesta['fecha_hora_venta']."</td>";
                                            echo "<td>".$respuesta['monto_total']."</td>";
                                            echo "<td>".$respuesta['id_cliente']."</td>";
                                            echo "<td>".$respuesta['id_usuario']."</td>";
                                            
        
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