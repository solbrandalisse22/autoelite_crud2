<?php
include_once('conexion2.php');
$id=$_POST['id'];
$marca=$_POST['marca'];
$siniestro=$_POST['siniestro'];
$compania=$_POST['compania'];
$modelo=$_POST['modelo'];
$patente=$_POST['patente'];
$proveedor=$_POST['proveedor'];
$fechaOrden=$_POST['fechaOrden'];
$fotos=$_POST['fotos'];
$fechaRepuesto=$_POST['fechaRepuesto'];
$hola=$_POST['hola'];



$sentencia=$base_de_datos->prepare("UPDATE repuestos SET marca= :marca, siniestro= :siniestro, compania= :compania, modelo= :modelo, patente= :patente, proveedor= :proveedor, fechaOrden= :fechaOrden, fotos= :fotos, fechaRepuesto= :fechaRepuesto, hola= :hola WHERE id= :id;");

$sentencia->bindParam(':id', $id);
$sentencia->bindParam(':marca', $marca);
$sentencia->bindParam(':siniestro', $siniestro);
$sentencia->bindParam(':compania', $compania);
$sentencia->bindParam(':modelo', $modelo);
$sentencia->bindParam(':patente', $patente);
$sentencia->bindParam(':proveedor', $proveedor);
$sentencia->bindParam(':fechaOrden', $fechaOrden);
$sentencia->bindParam(':fotos', $fotos);
$sentencia->bindParam(':fechaRepuesto', $fechaRepuesto);
$sentencia->bindParam(':hola', $hola);



if($sentencia->execute()){
    return header("Location:index.php");
}
else{
    return "error";
}
?>