<?php
include_once '../repository/convocatoriaRepos.php';
include_once '../helper/autocargar.php';

$data = json_decode(file_get_contents('php://input'), true);
//Me obtiene el cuerpo de la solicitud y jsdecode para convertirlo en un objeto
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($data['id'])) {
    $id_convocatoria = $data['id'];
    convocatoriaRepos::eliminarConvocatoria($id_convocatoria);
} else {
    echo "Error: Se requiere un ID válido para eliminar la convocatoria.";
}
?>


