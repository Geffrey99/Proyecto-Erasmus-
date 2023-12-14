<?php
// include_once '../helper/autocargar.php';
include_once 'db.php';

class destinatarioRepos {
    public static function ObtenerDestinatarios(){
        Database::abreConexion();
        $conexion = Database::getConexion()->query('Select * from Destinatario');
        $Destinatario = $conexion->fetchAll(PDO::FETCH_ASSOC);
        Database::desconexion();
        return $Destinatario;
    }
}
?>

