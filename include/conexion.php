<?php
// variables de la base de datos
$servidor = "localhost";
$bd = "carrito_venta";
$usuario = "root";
$password = "root";

$conexion = mysqli_connect($servidor, $usuario, $password, $bd);

// verificar la conexion
if ( !$conexion == true) {
    # code...
    echo "conexion fallida";
}

?>