<?php
// include_once '../helper/autocargar.php';
include_once 'db.php';

Class convocatoriaRepos {

    public static function ObtenerConvocatorias(){
        Database::abreConexion();
        $conexion = Database::getConexion()->query('Select * from Convocatoria');
        $Convocatoria = $conexion->fetchAll(PDO::FETCH_ASSOC);
        Database::desconexion();
        return $Convocatoria;
    }




    public static function ObtenerConvocatoria($id_convocatoria){
        Database::abreConexion();

        $conexion = Database::getConexion()->prepare('Select * from Convocatoria WHERE id_convocatoria = :id_convocatoria');

        $conexion->execute(['id_convocatoria'=>$id_convocatoria]);

        $Convocatoria = $conexion->fetch(PDO::FETCH_ASSOC);

        Database::desconexion();

        return $Convocatoria; 

    }


    public static function añadirConvocatoria($Convocatoria) {
        Database::abreConexion();

        $conexion = Database::getConexion()->prepare('INSERT INTO Convocatoria (
         movilidades,
         tipo,
         FechaInicio_Solicitudes,
         FechaFin_Solicitudes,
         FechaInicio_Pruebas,
         FechaFin_Pruebas,
         Fecha_Lista_Provisional,
         Fecha_Lista_Definitiva,
         codProyecto,
         destino)
         VALUES (
         :movilidades, 
         :tipo, 
         :FechaInicio_Solicitudes, 
         :FechaFin_Solicitudes, 
         :FechaInicio_Pruebas, 
         :FechaFin_Pruebas, 
         :Fecha_Lista_Provisional, 
         :Fecha_Lista_definitiva, 
         :codProyecto, 
         :destino)');
      
        $conexion->execute([
         'movilidades'=>$Convocatoria->getMovilidades(),
         'tipo'=>$Convocatoria->getTipo(),
         'FechaInicio_Solicitudes'=>$Convocatoria->getFechaInicio_Solicitudes(),
         'FechaFin_Solicitudes'=>$Convocatoria->getFechaFin_Solicitudes(),
         'FechaInicio_Pruebas'=>$Convocatoria->getFechaInicio_Pruebas(),
         'FechaFin_Pruebas'=>$Convocatoria->getFechaFin_Pruebas(), 
         'Fecha_Lista_Provisional'=>$Convocatoria->getFecha_Lista_Provisional(),
         'Fecha_Lista_definitiva'=>$Convocatoria->getFecha_Lista_Definitiva(), 
         'codProyecto'=>$Convocatoria->getcodProyecto(),
         'destino'=>$Convocatoria->getdestino(), ]); 
       
         $Id_convocatoria = Database::getConexion()->lastInsertId();
        
        $Convocatoria->setId_Convocatoria($Id_convocatoria);

        Database::desconexion();
     
        return   $Id_convocatoria;
    }



    public static function eliminarConvocatoria($id_convocatoria) {
        Database::abreConexion();
        $conexion = Database::getConexion()->prepare('DELETE FROM Convocatoria WHERE Id_Convocatoria = :id_convocatoria');
        $conexion->execute(['id_convocatoria'=>$id_convocatoria]);
        Database::desconexion();
    }
    


    public static function modificarConvocatoria($id_convocatoria, $Convocatoria) {
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
            'movilidades'=>$Convocatoria->getMovilidades(),
            'tipo'=>$Convocatoria->getTipo(),
            'FechaInicio_Solicitudes'=>$Convocatoria->getFechaInicio_Solicitudes(),
            'FechaFin_Solicitudes'=>$Convocatoria->getFechaFin_Solicitudes(),
            'FechaInicio_Pruebas'=>$Convocatoria->getFechaInicio_Pruebas(),
            'FechaFin_Pruebas'=>$Convocatoria->getFechaFin_Pruebas(), 
            'Fecha_Lista_Provisional'=>$Convocatoria->getFecha_Lista_Provisional(),
            'Fecha_Lista_Definitiva'=>$Convocatoria->getFecha_Lista_Definitiva(), 
            'codProyecto'=>$Convocatoria->getcodProyecto(),
            'destino'=>$Convocatoria->getdestino(), 
        ]);
        Database::desconexion();
    }







    }
    

?>





