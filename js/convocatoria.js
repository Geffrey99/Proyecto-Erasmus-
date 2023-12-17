//OCULTO LA TABLA BAREMO_IDIOMA..............
document.getElementById('convocatoria_baremo_idioma').style.display = 'none'; 
var seleccion = document.querySelectorAll('#convocatoria_baremo input[id=seleccion]');
//Si ha seleccionado 
seleccion.forEach(function(checkbox) {//obtengo la fila en la que se encuentra el checkbox
    checkbox.addEventListener('change', function(e) {
        var row = e.target.parentNode.parentNode;  //obtengo la fila donde se encuenta el checkbox que dispara el evento
        var inputs = row.querySelectorAll('#convocatoria_baremo input[id=no]');
        inputs.forEach(function(input) {
            input.disabled = !e.target.checked; //deshabilito o habilito el input
        });

       
        var idBaremo = row.children[1].innerText; //obtengo el texto del segundo hijo del elemento roow
        if (idBaremo == '1') { //verifico si es igual al id y lo muestro dependiendo del estado del checckbox
            document.getElementById('convocatoria_baremo_idioma').style.display = e.target.checked ? 'block' : 'none';
        }
    });
});