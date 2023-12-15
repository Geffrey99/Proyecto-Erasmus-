<?php
include_once 'obtenerSolicitud.php'; 
if (isset($_GET['dni'])) {
    $dni = $_GET['dni'];
    $solicitudes = Obtenersolicitud::ObtenerSolicitudes($dni);
    echo "<h2>Solicitudes del Candidato: " . $dni . "</h2>"; 
    echo "<table border='1'>";
    echo "<tr><th>ID_SOLICITUD</th><th>dni_Candidato</th><th>ID_CONVOCATORIA</th><th>DESTINATARIO</th><th>TELEFONO</th><th>EMAIL</th><th>DOMICILIO</th><th>BAREMAR</th></tr>";

    foreach ($solicitudes as $solicitud) {
        echo "<tr>";
        echo "<td>" . $solicitud['ID_SOLICITUD'] . "</td>";
        echo "<td>" . $solicitud['dni_Candidato'] . "</td>";
        echo "<td>" . $solicitud['ID_CONVOCATORIA'] . "</td>";
        echo "<td>" . $solicitud['DESTINATARIO'] . "</td>";
        echo "<td>" . $solicitud['TELEFONO'] . "</td>";
        echo "<td>" . $solicitud['EMAIL'] . "</td>";
        echo "<td>" . $solicitud['DOMICILIO'] . "</td>";
        // echo "<td>" . $solicitud['FOTO'] . "</td>";
        // echo "<td><button type='button'>Ver Documentacion</button></td>";
        echo "<td><button type='button'><a href='?menu=PortalCoordinador&subpage=BaremarSolicitudSeleccionada'>Baremar</a></button></td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>
