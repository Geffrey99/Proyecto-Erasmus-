function getData() {
  fetch("http://localhost/Becas/api/probandoapi.php", { //el origen de los datos-------
      method: "GET",
      headers: {
        "Content-Type": "application/json",
      },
    })
    
    .then(response=>response.json()) //se resuelve la promesa en formato json----------

    .then((data) => {
      console.log(data); 
      insertData(data?.items ?? []); //lo introduzco en la tabla--------------
    })

    .catch(error => console.log(error));
}


function insertData(data) {
  var table = document.getElementById("myTable");
  for (var i = 0; i < data.length; i++) {
    var convocatoria = data[i];
    var row = table.insertRow(-1);
    row.dataset.idConvocatoria = convocatoria.Id_Convocatoria;
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    var cell3 = row.insertCell(2);
    var cell4 = row.insertCell(3);
    var cell5 = row.insertCell(4);
    var cell6 = row.insertCell(5);
    var cell7 = row.insertCell(6);
    var cell8 = row.insertCell(7);
    var cell9 = row.insertCell(8);
    var cell10 = row.insertCell(9);
    var cell11 = row.insertCell(10);
    cell1.innerHTML = convocatoria.Id_Convocatoria;
    cell2.innerHTML = convocatoria.movilidades;
    cell3.innerHTML = convocatoria.tipo;
    cell4.innerHTML = convocatoria.fechaInicio_Solicitudes;
    cell5.innerHTML = convocatoria.fechaFin_Solicitudes;
    cell6.innerHTML = convocatoria.fechaInicio_Pruebas;
    cell7.innerHTML = convocatoria.fechaFin_Pruebas;
    cell8.innerHTML = convocatoria.Fecha_Lista_Provisional;
    cell9.innerHTML = convocatoria.Fecha_Lista_Definitiva;
    cell10.innerHTML = convocatoria.codProyecto;
    cell11.innerHTML = convocatoria.destino;
   //columna para hacer el crud
    var cell12 = row.insertCell(11);
    cell12.innerHTML = 
    '<button class="btn-eliminar" onclick="eliminarFila(this)">Eliminar</button>' +
    '<button class="btn-modificar" onclick="modificarFila(this)">Modificar</button>' +
    '<button class="btn-guardar" style="display:none;" onclick="guardarFila(this)">Guardar</button>';
  }
}





//---------------SELECCIONA FILA --------
//---------------SE MODIFICA--------------
//---------------SE GUARDA LA MODIFICACION POR EL FETCH-------

//************************MODIFICAR FILA ****************************************************
function modificarFila(btn) {
  var row = btn.parentNode.parentNode;
  var cells = row.getElementsByTagName("td");

  for (var i = 0; i < cells.length - 1; i++) { 
    //------------------- Para no modificar el Id_Convocatoria-------
    if (i === 0) continue;
    var cell = cells[i];
    var input = document.createElement("input");
    input.value = cell.innerText;
    cell.innerText = "";
    //------------- Si la celda es una fecha....
    if (i >= 3 && i <= 8) {
      input.type = "date";
    }

    cell.appendChild(input);
  }
  row.querySelector(".btn-eliminar").style.display = "none";
  row.querySelector(".btn-modificar").style.display = "none";
  row.querySelector(".btn-guardar").style.display = "";
}
//**************************GUARDA MODIFICACION**************************************************************** 
// console.log(data);
function guardarFila(btn) {
  var row = btn.parentNode.parentNode;
  var cells = row.getElementsByTagName("td");
  var convocatoria = {
    Id_Convocatoria: cells[0].innerText,
    movilidades: cells[1].querySelector('input').value,
    tipo: cells[2].querySelector('input').value,
    fechaInicio_Solicitudes: cells[3].querySelector('input').value ? new Date(cells[3].querySelector('input').value) : null,
    fechaFin_Solicitudes: cells[4].querySelector('input').value ? new Date(cells[4].querySelector('input').value) : null,
    fechaInicio_Pruebas: cells[5].querySelector('input').value ? new Date(cells[5].querySelector('input').value) : null,
    fechaFin_Pruebas: cells[6].querySelector('input').value ? new Date(cells[6].querySelector('input').value) : null,
    Fecha_Lista_Provisional: cells[7].querySelector('input').value ? new Date(cells[7].querySelector('input').value) : null,
    Fecha_Lista_Definitiva: cells[8].querySelector('input').value ? new Date(cells[8].querySelector('input').value) : null,
    codProyecto: cells[9].querySelector('input').value,
     destino: cells[10].querySelector('input').value
  };

  var data = {
    id: convocatoria.Id_Convocatoria,
    convocatoria: convocatoria
  };

  //###############################################################################################
//########____________SE HACE SOLICITUD FETCH
//##############################################################################################
  fetch('http://localhost/Becas/api/modificarConvocatoria.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json',
    },
    body: JSON.stringify(data),
  })
  .then(response => response.json())
  .then(data => {
    // console.log(data);
    if (data.success) {
      //----------se restablece los botones al procesar los datos 
      for (var i = 0; i < cells.length - 1; i++) {
        if (i === 0) continue;
        var cell = cells[i];
        var input = cell.querySelector('input');
        cell.innerText = input.value;
        input.remove();
      }
      row.querySelector(".btn-eliminar").style.display = "";
      row.querySelector(".btn-modificar").style.display = "";
      row.querySelector(".btn-guardar").style.display = "none";
    } else {
      console.error('Error:', data);
    }
  })
  .catch((error) => {
    console.error('Error:', error);
  });
}

//###############################################################################################
//########____________ELIMINAR FILA
//##############################################################################################
function eliminarFila(btn) {
  var row = btn.parentNode.parentNode;
  var id_convocatoria = row.dataset.idConvocatoria;
  eliminarConvocatoria(id_convocatoria);

}
function eliminarConvocatoria(id) {
  fetch('./api/eliminarConvocatoria.php', {
      method: 'POST',
      headers: {
          'Content-Type': 'application/json',
      },
      body: JSON.stringify({ id: id }),
  })
  .then(response => response.json())
  .then(data => {
    if (data.success) {
      console.log(data);
      location.reload();
  } else {
      alert('Error al eliminar la convocatoria: ' + data.error);
  }
})
.catch((error) => {
  console.error('Error al eliminar la convocatoria:', error);
});
}

