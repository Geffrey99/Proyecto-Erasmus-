document.getElementById('convocatoria_baremo_idioma').style.display = 'none'; 
var seleccion = document.querySelectorAll('#convocatoria_baremo input[id=seleccion]');

seleccion.forEach(function(checkbox) {
    checkbox.addEventListener('change', function(e) {
        var row = e.target.parentNode.parentNode;
        var inputs = row.querySelectorAll('#convocatoria_baremo input[id=no]');
        inputs.forEach(function(input) {
            input.disabled = !e.target.checked;
        });

       
        var idBaremo = row.children[1].innerText;
        if (idBaremo == '1') {
            document.getElementById('convocatoria_baremo_idioma').style.display = e.target.checked ? 'block' : 'none';
        }
    });
});