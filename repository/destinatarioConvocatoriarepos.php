<?php
include_once 'db.php';

Class destinatarioConvocatoriaRepos {

    public static function AsignarConvocatoria($id_convocatoria, $cod_grupo){
        Database::abreConexion();

        $conexion = Database::getConexion()->prepare('INSERT INTO DestinarioConvocatoria (Id_Convocatoria, Cod_Grupo) VALUES (:id_convocatoria, :cod_grupo)');

        $conexion->execute(['id_convocatoria'=>$id_convocatoria, 'cod_grupo'=>$cod_grupo]);

        Database::desconexion();
    }
    public static function ObtenerDestinatarioConvocatorias(){
        Database::abreConexion();
    
        $conexion = Database::getConexion()->query('SELECT DestinarioConvocatoria.Id_Convocatoria, DestinarioConvocatoria.Cod_Grupo, Destinatario.nombre, Convocatoria.tipo, Convocatoria.destino FROM DestinarioConvocatoria INNER JOIN Destinatario ON DestinarioConvocatoria.Cod_Grupo = Destinatario.Cod_Grupo INNER JOIN Convocatoria ON DestinarioConvocatoria.Id_Convocatoria = Convocatoria.Id_Convocatoria');
    
        $destinatarioConvocatorias = $conexion->fetchAll(PDO::FETCH_ASSOC);
    
        Database::desconexion();
    
        return $destinatarioConvocatorias;
    }
}    
?>