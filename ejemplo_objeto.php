<?php
$lista = array ("alfredo", "Yhul","Eliana", "Wilian", "Steward");

$contar = count($lista);
print_r($lista);


echo"<br>"; 
array_push($lista, "anibal");
/*
$contar = count($lista);
for ($i=0; $i <= $contar ; $i++) { 
    echo$lista[$i]."<br>"; 
}*/



$vista2 = array ("alfredo" => 40,"Yhul" => 35);
print_r($vista2);

$lista3 = array();


include ("include/conexion.php");
$consulta = "SELECT * FROM producto";
$ejecutar = mysqli_query($conexion,$consulta);
while ($r_ejecutar = mysqli_fetch_array($ejecutar)) {
    /*echo $r_ejecutar["descripcion"]."<br>";*/
    $lista3 [$r_ejecutar ["id"]]= $r_ejecutar["descripcion"];
    

    # code...
}

print_r($lista3);

?>