<head>
    <link rel="stylesheet" type="text/css" href="css/solicitudesDelCandidato.css">
</head>
<?php

include_once './repository/obtenerSolicitud.php'; 
$dnis = Obtenersolicitud::ObtenerDNIsUnicos();
echo "<h1 id='tituloCandidato'>ver solicitudes de candidato</h1>";
echo "<select id='dniSelect' onchange='mostrarSolicitudes(this.value)'>";
foreach ($dnis as $dni) {
    echo "<option value='" . $dni['dni_Candidato'] . "'>" . $dni['dni_Candidato'] . "</option>";
}
echo "</select>";

echo "<div id='solicitudes'></div>";

echo "
<script>
function mostrarSolicitudes(dni) {
    fetch('http://localhost/becas/repository/solicitudGenerada.php?dni=' + dni)
    .then(response => response.text())
    .then(data => {
        document.getElementById('solicitudes').innerHTML = data;
    });
}
</script>
";
?>
