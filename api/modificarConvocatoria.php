<?php
include_once '../repository/convocatoriaRepos.php';
include_once '../helper/autocargar.php';

// Obtén los datos JSON del cuerpo de la solicitud
$data = json_decode(file_get_contents('php://input'), true);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($data['id']) && isset($data['convocatoria'])) {
    $id_convocatoria = $data['id'];
    $convocatoria = $data['convocatoria'];
    Database::abreConexion();
    $conexion = Database::getConexion()->prepare('UPDATE Convocatoria SET 
        movilidades = :movilidades, 
        tipo = :tipo, 
        FechaInicio_Solicitudes = :FechaInicio_Solicitudes, 
        FechaFin_Solicitudes = :FechaFin_Solicitudes, 
        FechaInicio_Pruebas = :FechaInicio_Pruebas, 
        FechaFin_Pruebas = :FechaFin_Pruebas, 
        Fecha_Lista_Provisional = :Fecha_Lista_Provisional, 
        Fecha_Lista_Definitiva = :Fecha_Lista_Definitiva, 
        codProyecto = :codProyecto, 
        destino = :destino 
        WHERE Id_Convocatoria = :id_convocatoria');
    $conexion->execute([
        'id_convocatoria'=>$id_convocatoria,
        'movilidades'=>$convocatoria['movilidades'],
        'tipo'=>$convocatoria['tipo'],
        'FechaInicio_Solicitudes'=>$convocatoria['FechaInicio_Solicitudes'],
        'FechaFin_Solicitudes'=>$convocatoria['FechaFin_Solicitudes'],
        'FechaInicio_Pruebas'=>$convocatoria['FechaInicio_Pruebas'],
        'FechaFin_Pruebas'=>$convocatoria['FechaFin_Pruebas'], 
        'Fecha_Lista_Provisional'=>$convocatoria['Fecha_Lista_Provisional'],
        'Fecha_Lista_Definitiva'=>$convocatoria['Fecha_Lista_Definitiva'], 
        'codProyecto'=>$convocatoria['codProyecto'],
        'destino'=>$convocatoria['destino'], 
    ]);
    Database::desconexion();
} else {
    echo "Error: Se requiere un ID válido y una convocatoria para modificar la convocatoria.";
}
?>
