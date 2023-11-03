<?php
include ("../include/conexion.php");

//recibir informacion
$ruc = $_POST["ruc"];
$razon_social = $_POST["razon"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$direccion = $_POST["direc"];
$direccion_Envio = $_POST["direc"];




$consulta  = "INSERT INTO cliente (ruc_dni,razon_social,telefono,correo,direccion,direccion_envio) VALUES ('$ruc','$razon_social','$telefono','$correo,'$direccion','$direccion_Envio')";

$ejecutar = mysqli_query($conexion,$consulta);
if ($ejecutar) {
    echo "Registro Exitoso";
}else {
    echo "Error en el Registro";
}
?>