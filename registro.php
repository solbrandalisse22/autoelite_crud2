<?php include "include/templates/header.php" ?>
<html> 
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="/css/registro.css">
<script defer src="js/registro.js"></script>
<title>Registro</title>
    <main class="registro">
        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-user-plus" width="88" height="88" viewBox="0 0 24 24" stroke-width="1.5" stroke="#597e8d" fill="none" stroke-linecap="round" stroke-linejoin="round">
            <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
            <circle cx="9" cy="7" r="4" />
            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
            <path d="M16 11h6m-3 -3v6" />
          </svg>
          
     <h1 class="regis">Registro</h1>
      <div>


    <form id= "registrar" action="insertarR.php" method="post">
        <p>__________________________</p>
        <input type="text" class="box"  id= "nombre" class="box" name="nombre" placeholder="Nombre" requiered><br>
        
        <p>__________________________</p>
        <input type="text" class="box" id="apellido"  name="apellido" placeholder="Apellido" requiered><br>

        <p>__________________________</p>
        <input type="text" class="box" id="usuario"  name="usuario" placeholder="Usuario" requiered><br>

        <p>__________________________</p>
        <input type="password" class="box" id="password"  name="password" placeholder="Contraseña" requiered><br>

        <p>__________________________</p>
        <input type="password" class="box" id="password1"  name="password1" placeholder="Repita Contraseña" requiered><br>
       <div id="error" class="alert alert-danger ocultar" role="alert">Las contraseñas no coinciden</div>
        <p>__________________________</p>
        <input type="email" class ="box" id="correoElectronico"  name="correoElectronico" placeholder="Correo" requiered><br>
       <div id="error2" class="alert alert-danger ocultar1" role="alert">Email inválido
       </div>
      <div id="campoObligatorio" class="alert alert-danger ocultar2">Campo obligatorio</div>
        <input type="submit" class="boton"  id= "boton" value="Registrar" >
    </form>
   </div>
    
  


</main>
</head>
</html>