<?php
// include_once '../helper/autocargar.php';
include_once 'db.php';

class Obtenersolicitud {
   
   
    public static function ObtenerSolicitudes($dni_Candidato){
        Database::abreConexion();
        $conexion = Database::getConexion()->prepare('Select * from Solicitud where dni_Candidato = :dni_Candidato');
        $conexion->execute(['dni_Candidato'=>$dni_Candidato]);
        $Solicitud = $conexion->fetchAll(PDO::FETCH_ASSOC);
        Database::desconexion();
        return $Solicitud;
    }



public static function ObtenerDNIsUnicos(){
    Database::abreConexion();
    $conexion = Database::getConexion()->prepare('Select DISTINCT dni_Candidato from Solicitud');
    $conexion->execute();
    $dnis = $conexion->fetchAll(PDO::FETCH_ASSOC);
    Database::desconexion();
    return $dnis;
}
}

?>