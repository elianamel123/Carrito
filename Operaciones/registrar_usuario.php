<?php
include ("../include/conexion.php");

//recibir informacion
$dni = $_POST["dni"];
$Apell_Nombre = $_POST["nombre"];
$correo = $_POST["email"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direc"];
$fecha = $_POST["fecha"];

//mostrar
//echo $dni. "<br>";
//echo $Apell_Nombre. "<br>";
//echo $correo. "<br>";
//echo $telefono. "<br>";
//echo $direccion. "<br>";
//echo $fecha. "<br>";

$consulta  = "INSERT INTO usuario (dni, apellidos_nombres, correo, telefono, dirección, fecha_nac, password, activo, reset_password, tokent_password) VALUES ('$dni','$Apell_Nombre','$correo','$telefono','$direccion','$fecha','$dni', 1,0,' ')";

$ejecutar = mysqli_query($conexion,$consulta);
if ($ejecutar) {
    echo "Registro Exitoso";
}else {
    echo "Error en el Registro";
}
?>