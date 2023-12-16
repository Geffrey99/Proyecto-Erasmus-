<head>
    <script src="./js/convocatoriasCRUD.js" defer></script>
    <link rel="stylesheet" type="text/css" href="./css/crud.css">

</head>
<body onload="getData()"> <!-------------AL LLAMAR LA PAGINA ME CARGA LA TABLA-------------------------------->
  <table id="myTable" border="1">
  <tr>
    <th colspan="12" title="TABLA CRUD CONVOCATORIAS">CONVOCATORIAS</th> 
  </tr>
    <tr>
      <th title="id_convocatoria">Id.</th>
      <th title="NUMERO DE PLAZAS">MOVILIDADES</th>
      <th title="(-+)90DIAS">TIPO</th>
      <th title="INICIO SOLICITUDES" >fechaInicio_Solicitudes</th>
      <th title="FIN SOLICITUDES">fechaFin_Solicitudes</th>
      <th title="INICIO PRUEBAS">fechaInicio_Pruebas</th>
      <th title="FIN PRUEBAS">fechaFin_Pruebas</th>
      <th title="LISTA PROVISIIONAL">Fecha_Lista_Provisional</th>
      <th title="FECHA LISTA DEFINITIVA">Fecha_Lista_Definitiva</th>
      <th title="CODIGO DEL PROYECTO">PROYECTO</th>
      <th>DESTINO</th>
      <th>CRUD</th>
    </tr>
  </table>

  <!-- <button onclick="getData()">Obtener datos</button> -->
</body>
</html>