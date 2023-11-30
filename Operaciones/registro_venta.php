<?php
include("../include/conexion.php");
//recibir la informacion

$serie_venta=$_POST['serie_venta'];
$numero_venta=$_POST['numero_venta'];
$fecha_venta=$_POST['fecha_hora_venta'];
$monto_total=$_POST['monto_total'];
$ID_Cliente=$_POST['id_cliente'];
$ID_Usuario=$_POST['id_usuario'];



$consulta="INSERT INTO ventas(serie_venta, numero_venta,fecha_hora_venta,monto_total,id_cliente,id_usuario)
VALUES ('$serie_venta','$numero_venta','$fecha_venta','$monto_total',$ID_Cliente,$ID_Usuario)";

$ejecutar= mysqli_query($conexion, $consulta);

if ($ejecutar) {
    echo "Registro Exitoso";
}else {
    echo "Registro Fallido";
}


//mostrar la informacion

//echo $dni."<br>";
//echo $ape_nom."<br>";
//echo $correo."<br>";
//echo $telefono."<br>";
//echo $direccion."<br>";
//echo $fecha_naci."<br>";



?>