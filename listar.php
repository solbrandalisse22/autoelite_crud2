<?php  
include_once('conexion2.php');

$sentencia=$base_de_datos->query("SELECT * FROM repuestos;");
$repuestos=$sentencia->fetchAll(PDO::FETCH_OBJ);
//print_r($repuestos);

//$array= $base_de_datos->query("SELECT * FROM repuestos WHERE repuestosi='si';");
//$repuestossi=$array->fetchAll(PDO::FETCH_OBJ);


?>