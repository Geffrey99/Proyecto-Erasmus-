<?php
// include_once '../helper/autocargar.php';
include_once 'db.php';

Class SolicitudRepos {

    public static function ExisteSolicitud ($id_solicitud) {
        Database::abreConexion();
    
        $stmt = Database::getConexion()->prepare('SELECT * FROM SOLICITUD WHERE  ID_SOLICITUD = :ID_SOLICITUD');
      
        $stmt->execute(['ID_SOLICITUD' => $id_solicitud]);
    
        return $stmt->fetch() !== false;
    }

    public static function añadirSolicitud ($Solicitud) {

        Database::abreConexion();

        $conexion = Database::getConexion()->prepare('INSERT INTO SOLICITUD ( 
        dni_Candidato,
        ID_CONVOCATORIA,
        DESTINATARIO,
        TELEFONO,
        EMAIL,
        DOMICILIO,
        FOTO
        )
        VALUES (
        :dni_Candidato,
        :ID_CONVOCATORIA,
        :DESTINATARIO,
        :TELEFONO,
        :EMAIL,
        :DOMICILIO,
        :FOTO
        )');

        $conexion->execute([
            'dni_Candidato'=>$Solicitud->getDni_Candidato(),
            'ID_CONVOCATORIA'=>$Solicitud->getID_CONVOCATORIA(), 
            'DESTINATARIO'=>$Solicitud->getDESTINATARIO(),
            'TELEFONO'=>$Solicitud->getTELEFONO(),
            'EMAIL'=>$Solicitud->getEMAIL(),
            'DOMICILIO'=>$Solicitud->getDOMICILIO(),
            'FOTO'=>$Solicitud->getFOTO(),
        ]);

     $id_solicitud = Database::getConexion()->lastInsertId();

     $Solicitud->setID_SOLICITUD($id_solicitud);

     return $id_solicitud;
    }
}
?>
