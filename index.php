<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&family=Raleway:wght@100;600;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300&family=Raleway:wght@100;600;800&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&family=Raleway:wght@100;600;800&display=swap" rel="stylesheet">    
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script defer src="js/buscar.js"></script> 
<title>AutoElite</title>
</head>
<body>
    
    <div class='container'>
        <h1 class='text-center'>Repuestos</h1>
        <!-- Button trigger modal -->

<div id='head'>
    <form class='buscar1'  >
    <input type='text' id ='buscar' name='buscar' class='form-control'  placeholder='buscar'>
    
   
</form>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" id='botonbuscar'data-bs-target="#agregar">
  Agregar
</button>
<button type="button" class="btn btn-primary" id="liveToastBtn"><i class="bi bi-bell"></i></button>

    <a href="/principal.php"><i class="bi bi-house-fill"></i></a>
</div>
        
        <div id='tabla'>
    <table class="table table-dark table-striped" id='tabla1'>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">MARCA</th>
      <th scope="col">SINIESTRO</th>
      <th scope="col">COMPAÑIA</th>
      <th scope="col">MODELO</th>
      <th scope="col">PATENTE</th>
      <th scope="col">PROVEEDOR</th>
      <th scope="col">FECHA ORDEN</th>
      <th scope="col">FOTOS</th>
      <th scope="col">FECHA REPUESTO</th>
      <th scope="col">REPUESTO</th>
      <th scope="col">EDITAR</th>
      <th scope="col">ELIMINAR</th>
      <th scope='col'>NOTAS</th>
      <th scope='col'>CHECK</th>
    </tr>
  </thead>
  <tbody>
   <?php include_once("listar.php");?>
   <?php foreach($repuestos as $repuesto) {?>  
    
    <tr>
        <td><?php echo $repuesto->id?></td>
        <td><?php echo $repuesto->marca?></td>
        <td><?php echo $repuesto->siniestro?></td>
        <td><?php echo $repuesto->compania?></td>
        <td><?php echo $repuesto->modelo?></td>
        <td><?php echo $repuesto->patente?></td>
        <td><?php echo $repuesto->proveedor?></td>
        <td><?php echo $repuesto->fechaOrden?></td>
        <td><a href="<?php echo $repuesto->fotos?>"> <?php echo $repuesto->fotos?> </a></td>
        <td><?php echo $repuesto->fechaRepuesto?></td>
        <td><?php echo $repuesto->hola?></td>
        <td><button type="button" class="btn btn-success editbtn" data-bs-toggle="modal" data-bs-target="#editar">
  Editar
</button></td>
        <td><button type="button" class="btn btn-danger deletebtn" data-bs-toggle="modal" data-bs-target="#eliminar">
    Eliminar
</button></td>
        <td><button type="button" class="btn btn-secondary notasbtn" data-bs-toggle="modal" data-bs-target="#notas">
    Nota
</button></td>
<td><button type="button" class="btn btn-success checkbtn" id='checkbtn'data-bs-toggle="modal" data-bs-target="#check">
<i class="bi bi-check2-all"></i>
</button></td>
    </tr> 
   <?php }?>
</tbody>
</table>
    </div>
    <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 11" >
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Notas</strong>
      
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
    <div >
    <table class="table table-borderless" id='formnotas'>
<thead><tr>
<th scope='col'>notas</th>
<th scope='col'>x</th>
    </tr></thead>
  <tbody>
  <?php include_once('listar.php');?>
      <?php foreach($repuestos as $repuesto) {?>
    
        <tr>
      <td> <?php echo $repuesto->siniestro ?></li>
      <td><?php echo $repuesto->notas ?></li>
      <td><button type="button" class="btn btn-danger deletenotasbtn" data-bs-toggle="modal" data-bs-target="#deletenotas">
  x
</button></td>
      </tr>
     <?php }?>
      </tbody>

    </table></div>
    </div>
  </div>
</div>
    
    <!-- Modalinsertar -->
<div class="modal fade" id="agregar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Añadir auto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class= "agregarRep" id="agregarRep" action='registrar.php'method='post'>
     
  <div id='segundaParte' class='form-group'>
 <input type="text" class='form-control' name="marca" id="amarca" placeholder="MARCA">
   </div>
   <div id='segundaParte' class='form-group'>
 <input type="text" class='form-control' name="siniestro"id="asiniestro" placeholder="SINIESTRO">
 </div>
 <div id='segundaParte' class='form-group'>
 <input type="text" class='form-control' name="compania"id="aompañia" placeholder="COMPAÑIA">
 </div>
 <div id='segundaParte' class='form-group'>
 <input type="text" class='form-control' name="modelo"id="amodelo" placeholder="MODELO">
 </div>
 <div id='segundaParte' class='form-group'>
 <input type="text" class='form-control' name="patente" id="apatente" placeholder="PATENTE">
 </div>
 <div id='segundaParte' class='form-group'>
 <input type="text" class='form-control' name="proveedor"id="aproveedor" placeholder="PROVEEDOR">
 </div>
 <div id='segundaParte' class='form-group'>
 
 <label for="fotos1">Fotos</label>
  <input type="url" name="fotos" class='form-control' id="afoto">
  </div>
  <div id='segundaParte' class='form-group'>
 <label for="fechaOrden">Fecha orden</label>
  <input type="date" id="afechaOrden" class='form-control'name="fechaOrden">
  </div>
  <div id='segundaParte' class='form-group'>
 <label for="fechaRepuesto">Fecha repuesto</label>

  <input type="date" id="afechaRepuesto" class='form-control' name="fechaRepuesto"><br>
  </div>
  <div id='segundaParte' class='form-group'>
  <textarea id="arepuesto" name='hola' placeholder="REPUESTOS"></textarea>
  </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Añadir</button>
      </div>
 </form>
      </div>
      
    </div>
  </div>
</div>


  <!-- Modal editar -->
<div class="modal fade" id="editar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar auto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class= "editarRep" id="editarRep" action='editar.php'method='post'>
     <input type='hidden' name='id' id='update_id'>
     <div id='segundaParte' class='form-group'>
    <input type="text" class='form-control' name="marca" id="marca" placeholder="MARCA">
    </div>
    <div id='segundaParte' class='form-group'>
  <input type="text" class='form-control' name="siniestro"id="siniestro" placeholder="SINIESTRO">
  </div>
  <div id='segundaParte' class='form-group'>
  <input type="text" class='form-control' name="compania"id="compania" placeholder="COMPAÑIA">
  </div>
  <div id='segundaParte' class='form-group'>
  <input type="text" class='form-control' name="modelo"id="modelo" placeholder="MODELO">
  </div>
  <div id='segundaParte' class='form-group'>
  <input type="text" class='form-control' name="patente" id="patente" placeholder="PATENTE">
  </div>
  <div id='segundaParte' class='form-group'>
  <input type="text" class='form-control' name="proveedor"id="proveedor" placeholder="PROVEEDOR">
  </div>
  <div id='segundaParte' class='form-group'>
 
  <label for="fotos1">Fotos</label>
  <input type="url" name="fotos" class='form-control' id="fotos">
  </div>
  <div id='segundaParte' class='form-group'>
  <label for="fechaOrden">Fecha orden</label>
  <input type="date" id="fechaOrden" class='form-control'name="fechaOrden">
  </div>
  <div id='segundaParte' class='form-group'>
  <label for="fechaRepuesto">Fecha repuesto</label>

  <input type="date" id="fechaRepuesto" class='form-control' name="fechaRepuesto"><br>
  </div>
  <div id='segundaParte' class='form-group'>
  <textarea id="hola" name='hola' placeholder="REPUESTOS"></textarea>
  </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
      </div>
   </form>
      </div>
      
    </div>
  </div>
</div>

  <!-- Modal eliminar -->
<div class="modal fade" id="eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar auto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class= "eliminarRep" id="eliminarRep" action='eliminar.php' method='post'>
     <input type='hidden' name='id' id='delete_id'>
      <h2>Eliminar registro?</h2>
     <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Eliminar</button>
      </div>
   </form>
      </div>
      
    </div>
  </div>
</div>
<!-- Modal notas -->
<div class="modal fade" id="notas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar auto</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class= "notasRep" id="notasRep" action='notas2.php'method='post'>
     <input type='hidden' name='id' id='updatenotas_id'>
     
  <div id='segundaParte' class='form-group'>
  <textarea id="notas" name='notas' placeholder="NOTA"></textarea>
  </div>
  <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar cambios</button>
      </div>
   </form>
      </div>
      
    </div>
  </div>
</div>

<!-- Modal eliminar nota -->
<div class="modal fade" id="deletenotas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminar nota</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class= "eliminarNota" id="eliminarNota" action='eliminarnotas.php' method='post'>
      
     <input type='hidden' name='siniestro' id='siniestro'>
     <input type='hidden' name='notas' id='notas'>
      <h2>Eliminar nota?</h2>
     <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Eliminar</button>
      </div>
  </form>
      </div>
      
    </div>
  </div>
</div>

<!-- Modal check repuesto -->
<div class="modal fade" id="check" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class= "checkRep" id="checkRep" action='check.php' method='post'>
     <input type='hidden' name='id' id='check_id'>
      <h2>Confirmar entrega de repuestos?</h2>
     <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id='check2btn'data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Confirmar</button>
      </div>
   </form>
      </div>
      
    </div>
  </div>
</div>




<script>
    $('.editbtn').on('click', function(){
     
        $tr=$(this).closest('tr');
        var datos=$tr.children('td').map(function(){
         return $(this).text();
        });
    $('#update_id').val(datos[0]);
    $('#marca').val(datos[1]);
    $('#siniestro').val(datos[2]);
    $('#compania').val(datos[3]);
    $('#modelo').val(datos[4]);
    $('#patente').val(datos[5]);
    $('#proveedor').val(datos[6]);
    $('#fechaOrden').val(datos[7]);
    $('#fotos').val(datos[8]);
    $('#fechaRepuesto').val(datos[9]);
    $('#hola').val(datos[10]);
    
    });
    </script>
<script>
    $('.deletebtn').on('click', function(){
     
        $tr=$(this).closest('tr');
        var datos=$tr.children('td').map(function(){
         return $(this).text();
        });
    $('#delete_id').val(datos[0]);
    $('#notas').val(datos[1]);
    
    });
    </script>
<script>
    $('.notasbtn').on('click', function(){
     
        $tr=$(this).closest('tr');
        var datos=$tr.children('td').map(function(){
         return $(this).text();
        });
    $('#updatenotas_id').val(datos[0]);
    $('#notas').val(datos[11]);
    });
    </script>


<script>
  $('.checkbtn').on('click', function(){
     
     $tr=$(this).closest('tr');
     var datos=$tr.children('td').map(function(){
      return $(this).text();
     });
     $('#check_id').val(datos[0]);
     
 
 });
  </script>
  
  <script>
  $('.deletenotasbtn').on('click', function(){
     
     $tr=$(this).closest('tr');
     var datos=$tr.children('td').map(function(){
      return $(this).text();
     });
 $('#siniestro').val(datos[0]);

 
 });
  </script>


</body>
</html>
