<?php
include_once '../repository/convocatoriaRepos.php';
include_once '../helper/autocargar.php';


$data = json_decode(file_get_contents('php://input'), true);
$success = false; // por defectooooo
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($data['id']) && isset($data['convocatoria'])) {
    $id_convocatoria = $data['id'];
    $convocatoria = $data['convocatoria'];
    Database::abreConexion();
    $conexion = Database::getConexion()->prepare('UPDATE Convocatoria SET 
        movilidades = :movilidades, 
        tipo = :tipo, 
        fechaInicio_Solicitudes = :fechaInicio_Solicitudes, 
        fechaFin_Solicitudes = :fechaFin_Solicitudes, 
        fechaInicio_Pruebas = :fechaInicio_Pruebas, 
        fechaFin_Pruebas = :fechaFin_Pruebas, 
        Fecha_Lista_Provisional = :Fecha_Lista_Provisional, 
        Fecha_Lista_Definitiva = :Fecha_Lista_Definitiva, 
        codProyecto = :codProyecto, 
        destino = :destino 
        WHERE Id_Convocatoria = :id_convocatoria');
    try {
        $success = $conexion->execute([
            'id_convocatoria'=>$id_convocatoria,
            'movilidades'=>$convocatoria['movilidades'],
            'tipo'=>$convocatoria['tipo'],
            'fechaInicio_Solicitudes'=>$convocatoria['fechaInicio_Solicitudes'],
            'fechaFin_Solicitudes'=>$convocatoria['fechaFin_Solicitudes'],
            'fechaInicio_Pruebas'=>$convocatoria['fechaInicio_Pruebas'],
            'fechaFin_Pruebas'=>$convocatoria['fechaFin_Pruebas'], 
            'Fecha_Lista_Provisional'=>$convocatoria['Fecha_Lista_Provisional'],
            'Fecha_Lista_Definitiva'=>$convocatoria['Fecha_Lista_Definitiva'], 
            'codProyecto'=>$convocatoria['codProyecto'],
            'destino'=>$convocatoria['destino'], 
        ]);
    } catch (PDOException $e) {
        $success = false;
        $error = $e->getMessage();
    }
    Database::desconexion();
} else {
    $error = "Error: Se requiere un ID válido y una convocatoria para modificar la convocatoria.";
}

// devuelvo un objeto json con succs
echo json_encode(['success' => $success, 'error' => $error ?? null]);
?>
