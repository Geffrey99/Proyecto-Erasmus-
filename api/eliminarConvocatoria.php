<?php
include_once '../repository/convocatoriaRepos.php';
include_once '../helper/autocargar.php';

$data = json_decode(file_get_contents('php://input'), true);

$success = false; // ---por defectoooo falsee

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($data['id'])) {
    $id_convocatoria = $data['id'];
    try {
        convocatoriaRepos::eliminarConvocatoria($id_convocatoria);
        $success = true;
    } catch (Exception $e) {
        $success = false;
        $error = $e->getMessage();
    }
} else {
    $error = "Error: Se requiere un ID válido para eliminar la convocatoria.";
}

// Devolvo un objeto json con la propiedad success y el mensaje de error si existee
echo json_encode(['success' => $success, 'error' => $error ?? null]);
?>


