function getData() {
  fetch("http://localhost/Becas/api/probandoapi.php", { //el origen de los datos.
      method: "GET",
      headers: {
        "Content-Type": "application/json",
      },
    })
    
    .then(response=>response.json()) //se resuelve la promesa en formato json

    .then((data) => {
      console.log(data); 
      insertData(data?.items ?? []); //lo introduzco en la tabla
    })

    .catch(error => console.log(error));
}


function insertData(data) {

  var table = document.getElementById("myTable");

  for (var i = 0; i < data.length; i++) {

    var convocatoria = data[i];
 
    var row = table.insertRow(-1);
 
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
  }
}