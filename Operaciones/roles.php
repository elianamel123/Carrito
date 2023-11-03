<?php
include ("../include/conexion.php");

//recibir informacion
$nombre = $_POST["nombre"];


//mostrar
//echo $dni. "<br>";
//echo $Apell_Nombre. "<br>";
//echo $correo. "<br>";
//echo $telefono. "<br>";
//echo $direccion. "<br>";
//echo $fecha. "<br>";



$consulta  = "INSERT INTO roles (nombre	) VALUES ('$nombre')";

$ejecutar = mysqli_query($conexion,$consulta);
if ($ejecutar) {
    echo "Registro Exitoso";
}else {
    echo "Error en el Registro";
}
?>