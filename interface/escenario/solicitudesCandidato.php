<head>
<link href="css/solicitudesCandidato.css" rel="stylesheet" type="text/css" />
</head>

<?php
#obtengo el dni del candidato que esta en sesion
$dni_Candidato = $sesion->comprobar('dni');
?>
<table>
    <tr>
        <th>ID_SOLICITUD</th>
        <th>ID_CONVOCATORIA</th>
        <th>DESTINATARIO</th>
        <th>MOVILIDADES</th>
        <th>TIPO</th>
        <th>CODPROYECTO</th>
        <th>DESTINO</th>
        <th>VER SOLICITUD</th>
    </tr>
    <?php
$solicitudes = Obtenersolicitud::ObtenerSolicitudes($dni_Candidato);
?>
    <?php foreach ($solicitudes as $solicitud): ?>
        <tr>
            <td><?= $solicitud['ID_SOLICITUD'] ?></td>
            <td><?= $solicitud['ID_CONVOCATORIA'] ?></td>
            <td><?= $solicitud['DESTINATARIO'] ?></td>
            <?php
            $convocatoria = convocatoriaRepos::ObtenerConvocatoria($solicitud['ID_CONVOCATORIA']);
            ?>
            
<td><?= $convocatoria['movilidades'] ?></td>
<td><?= $convocatoria['tipo'] ?></td>
<td><?= $convocatoria['codProyecto'] ?></td>
<td><?= $convocatoria['destino'] ?></td>
<td><button class="btn" onclick="">Ver Solicitud</button></td>
<!-- <td><button class="btn" onclick="location.href='ver_solicitud.php?id=<?= $solicitud['ID_SOLICITUD'] ?>'">Ver Solicitud</button></td> -->
        </tr>
    <?php endforeach; ?>
</table>

