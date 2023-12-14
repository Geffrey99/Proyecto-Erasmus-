<?php
include_once '../repository/destinatarioConvocatoriaRepos.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_convocatoria = $_POST['id_convocatoria'];
    $cod_grupo = $_POST['DESTINATARIO'];

    destinatarioConvocatoriaRepos::AsignarConvocatoria($id_convocatoria, $cod_grupo);
}

header("Location: http://localhost/becas/index.php?menu=PortalCoordinador");
?>