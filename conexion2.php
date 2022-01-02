<?php

$contraseña='1234';
$usuario='root';
$nombrebd='autoelite_crud';

try{

    $base_de_datos = new PDO('mysql:host=localhost;dbname='.$nombrebd,$usuario,$contraseña);
//echo"<script>alert('la conexion se realizo correctamente')</script>"; 

}


catch(Exception $e){
    echo "<script>alert('ocurrio un error al conectarse')</script>".$e->getMessage();
}



?>