<?php
include ("../include/conexion.php");

//recibir informacion
$codigo = $_POST["codigp"];
$descripcion = $_POST["Descripcion"];
$detalle = $_POST["Detalle"];
$Id_categoria = $_POST["id_categoria"]; 
$precio_compra = $_POST["Precio_Compra"];
$precio_venta = $_POST["Precio_Venta"];
$stock = $_POST["Stock"];
$estado = $_POST["estado"];
$Id_provedor = $_POST["id_provedor"];
//
$nombre_archivo = $codigo.".jpg";
$ruta_foto = "../img_productos/".$nombre_archivo;


echo $codigo. "<br>";
echo $descripcion. "<br>";
echo $detalle. "<br>";
echo $precio_compra. "<br>";
echo $precio_venta. "<br>";
echo $stock. "<br>";
echo $estado. "<br>";
echo $nombre_archivo. "<br>";

if (move_uploaded_file($_FILES['foto']['tmp_name'], $ruta_foto)) {
    $consulta  = "INSERT INTO producto (codigo,descripcion,detalle,id_categoria,precio_compra,precio_venta,stock,estado,imagen,id_proveedor) 
    VALUES ('$codigo','$descripcion','$detalle','$Id_categoria','$precio_compra','$precio_venta','$stock','$estado','$nombre_archivo',$Id_provedor)";

    $ejecutar= mysqli_query($conexion,$consulta);
    if ($ejecutar) {
        echo "Registro Exitoso";
    }else {
        echo "Error en el Registro";
    } 

}else {
    echo"Error al subir la foto";
}


?>