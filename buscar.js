document.getElementById('buscar').addEventListener('keyup' ,doSearch);

function doSearch(event)

{
event.preventDefault();
    const tableReg = document.getElementById('tabla1');

    const searchText = document.getElementById('buscar').value.toLowerCase();

    let total = 0;

    // Recorremos todas las filas con contenido de la tabla

    for (let i = 1; i < tableReg.rows.length; i++) {

        let found = false;

        const cellsOfRow = tableReg.rows[i].getElementsByTagName('td');

        // Recorremos todas las celdas

        for (let j = 0; j < cellsOfRow.length && !found; j++) {

            const compareWith = cellsOfRow[j].innerHTML.toLowerCase();
               // Buscamos el texto en el contenido de la celda

            if (searchText.length == 0 || compareWith.indexOf(searchText) > -1) {

                found = true;

                total++;
            }}
        if (found) {
            tableReg.rows[i].style.display = '';
        } else {
            tableReg.rows[i].style.display = 'none';  
            
        }}}


$('checkbtn').on('click', function(event){
  event.preventDefault();
            $tr=$(this).closest('tr');
                  var datos=$tr.children('td').map(function(){
                   return $(this).text();
                  });
             console.log( $('#fechaOrden').val(datos[7]));
          
          });




var toastTrigger = document.getElementById('liveToastBtn')
var toastLiveExample = document.getElementById('liveToast')
if (toastTrigger) {
  toastTrigger.addEventListener('click', function () {
    var toast = new bootstrap.Toast(toastLiveExample)

    toast.show()
  })
}

document.getElementById('checkbtn').addEventListener('click',(event)=>{
    let tr = event.target;
   console.log(tr);
})