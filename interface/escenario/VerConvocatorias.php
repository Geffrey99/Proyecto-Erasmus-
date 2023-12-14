<?php

ApiConvocatoria::getAll();

echo '
<table id="myTable" border="1">
    <tr>
      <th>Id_Convocatoria</th>
      <th>movilidades</th>
      <th>tipo</th>
      <th>fechaInicio_Solicitudes</th>
      <th>fechaFin_Solicitudes</th>
      <th>fechaInicio_Pruebas</th>
      <th>fechaFin_Pruebas</th>
      <th>Fecha_Lista_Provisional</th>
      <th>Fecha_Lista_Definitiva</th>
      <th>codProyecto</th>
      <th>destino</th>
    </tr>';
    foreach ($convocatorias["items"] as $Convocatoria) {
        echo "<tr>";
        echo "<td>" . $Convocatoria["Id_Convocatoria"] . "</td>";
        echo "<td>" . $Convocatoria["movilidades"] . "</td>";
        echo "<td>" . $Convocatoria["tipo"] . "</td>";
        echo "<td>" . $Convocatoria["fechaInicio_Solicitudes"] . "</td>";
        echo "<td>" . $Convocatoria["fechaFin_Solicitudes"] . "</td>";
        echo "<td>" . $Convocatoria["fechaInicio_Pruebas"] . "</td>";
        echo "<td>" . $Convocatoria["fechaFin_Pruebas"] . "</td>";
        echo "<td>" . $Convocatoria["Fecha_Lista_Provisional"] . "</td>";
        echo "<td>" . $Convocatoria["Fecha_Lista_Definitiva"] . "</td>";
        echo "<td>" . $Convocatoria["codProyecto"] . "</td>";
        echo "<td>" . $Convocatoria["destino"] . "</td>";
        echo "</tr>";
      }
      echo "</table>";

  ?>