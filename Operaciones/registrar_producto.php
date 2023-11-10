<?php
include ("../include/conexion.php");

//recibir informacion
$codigo = $_POST["codigp"];
$descripcion = $_POST["Descripcion"];
$detalle = $_POST["Detalle"];
$precio_venta = $_POST["Precio_Venta"];
$stock = $_POST["Stock"];
$estado = $_POST["Estado"];
//$imagen = $_POST["Imagen"];
$precio_compra = $_POST["Precio_Compra"];

//

$nombre_archivo = $codigo.".jpg";
$ruta_imagen = "../img_usuarios/".$nombre_archivo;



if (move_uploaded_file($_FILES['Imagen']['tmp_name'], $ruta_imagen)) {
    $consulta  = "INSERT INTO producto (codigo, descripcion, detalle,id_categoria, precio_compra,precio_venta, stock, estado, imagen ,id_proveedor) 
    VALUES ('$codigo','$descripcion',$detalle','$precio_venta','$estado','$precio_compra','$nombre_archivo','$ruta_imagen')";

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