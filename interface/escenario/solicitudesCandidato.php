<head>
<link href="css/solicitudesCandidato.css" rel="stylesheet" type="text/css" />
<script src="./js/verSolicitud.js" defer></script>
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
<!-- obtengo el id_solicitud con el boton para buscarla en mi carpeta de pdfs y me muestre la solicitud-->
<td><button type='button' class='btn' onclick='abrirModal(<?= $solicitud['ID_SOLICITUD'] ?>)'>Ver Documentacion</button></td>

        </tr>
    <?php endforeach; ?>
</table>


<div id="myModal" class="modal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <iframe id="pdfViewer" src="" width="100%" height="100%"></iframe>
  </div>
</div>
