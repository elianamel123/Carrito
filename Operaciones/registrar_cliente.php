<?php
include ("../include/conexion.php");

//recibir informacion
$ruc_dni = $_POST["ruc_dni"];
$razon_social = $_POST["razon"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$direccion = $_POST["direccion"];
$direccion_envio = $_POST["direccion_envio"];

//mostrar
//echo $ruc_dni. "<br>";
//echo $razon_social. "<br>";
//echo $telefono. "<br>";
//echo $correo. "<br>";
//echo $direccion. "<br>";
//echo $direccion_envio. "<br>";


//$consulta  = "INSERT INTO cliente (ruc_dni,razon_social,telefono,correo,direccion,direccion_envio) VALUES ('$ruc_dni','$razon_social','$telefono','$correo,'$direccion','$direccion_envio')";

//$ejecutar = mysqli_query($conexion,$consulta);
//if ($ejecutar) {
  //  echo "Registro Exitoso";
//}else {
  //  echo "Error en el Registro";
//}

$consulta = "INSERT INTO cliente (ruc_dni,razon,telefono,correo,direccion,direccion_envio) VALUES ('$ruc_dni','$razon_social','$telefono','$correo,'$direccion','$direccion_envio')";

$ejecutar = mysqli_query($conexion,$consulta);
if ($ejecutar) {
    echo "Se registro";
    }else{
        echo "No se registro";
    # code...
}
?>