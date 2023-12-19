<?php
include ("../include/conexion.php");

//recibir informacion
$dni = $_POST["dni"];
$Apell_Nombre = $_POST["nombre"];
$correo = $_POST["email"];
$telefono = $_POST["telefono"];
$direccion = $_POST["direc"];
$fecha = $_POST["fecha"];
$id_rol = $_POST["rol"];

//mostrar
//echo $dni. "<br>";
//echo $Apell_Nombre. "<br>";
//echo $correo. "<br>";
//echo $telefono. "<br>";
//echo $direccion. "<br>";
//echo $fecha. "<br>";

$nombre_archivo = $dni.".jpg";
$ruta_foto = "../img_usuario/".$nombre_archivo;

$pass_secure = password_hash($dni, PASSWORD_DEFAULT);

if (move_uploaded_file($_FILES['foto']['tmp_name'], $ruta_foto)) {
    $consulta  = "INSERT INTO usuario (dni, apellidos_nombres, correo, telefono, direccion, fecha_nacimiento, password, id_rol ,foto, activo, reset_password, token_password) VALUES ('$dni','$Apell_Nombre','$correo','$telefono','$direccion','$fecha','$pass_secure','$id_rol','$nombre_archivo', 1,0,' ')";

    $ejecutar = mysqli_query($conexion,$consulta);
    if ($ejecutar) {
        echo "Registro Exitoso";
    }else {
        echo "Error en el Registro";
    } 
}else {
    echo"Error al subir la foto";
}








?>