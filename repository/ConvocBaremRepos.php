<?php
include_once '../helper/autocargar.php';
include_once 'db.php';

Class ConvocBaremRepos {

    public static function ObtenerConvocatoriasB(){
        Database::abreConexion();

        $conexion = Database::getConexion()->query('Select * from ConvocatoriaBaremo');

        $ConvocatoriaBaremo = $conexion->fetchAll(PDO::FETCH_ASSOC);

        Database::desconexion();

        return $ConvocatoriaBaremo;


    }

    public static function ObtenerConvocatoriaB($id_convocatoria){
        Database::abreConexion();

        $conexion = Database::getConexion()->prepare('Select * from ConvocatoriaBaremo WHERE id_convocatoria = :id_convocatoria');

        $conexion->execute(['id_convocatoria'=>$id_convocatoria]);

        $ConvocatoriaBaremo = $conexion->fetch(PDO::FETCH_ASSOC);

        Database::desconexion();

        return $conexion;



    }


    public static function añadirConvocatoriaB($ConvocatoriaBaremo) {
        Database::abreConexion();

        $conexion = Database::getConexion()->prepare('INSERT INTO ConvocatoriaBaremo (
         Id_Convocatoria,
         Id_itemBaremo,
         requisitos,
         valor_min,
         valor_max,
         presentausuario,
         obligatorio
         )
         VALUES (
         :Id_Convocatoria,   
         :Id_itemBaremo, 
         :requisitos, 
         :valor_min, 
         :valor_max, 
         :presentausuario, 
         :obligatorio)');
      
        $conexion->execute([
         'Id_Convocatoria'=>$ConvocatoriaBaremo->getId_Convocatoria(),   
         'Id_itemBaremo'=>$ConvocatoriaBaremo->getId_itemBaremo(),
         'requisitos'=>$ConvocatoriaBaremo->getRequisitos(),
         'valor_min'=>$ConvocatoriaBaremo->getValor_min(),
         'valor_max'=>$ConvocatoriaBaremo->getValor_max(),
         'presentausuario'=>$ConvocatoriaBaremo->getPresentausuario(),
         'obligatorio'=>$ConvocatoriaBaremo->getObligatorio(),]); 
       
         $Id_ConvocatoriaBaremo = Database::getConexion()->lastInsertId();
        
        $ConvocatoriaBaremo->setId_ConvocatoriaBaremo($Id_ConvocatoriaBaremo);

       // Database::desconexion();
     
        return $Id_ConvocatoriaBaremo;
    }



    // public static function actualizarNoticia($noticia) {
        
    //     Database::abreConexion();
    
    //     $conexion = Database::getConexion()->prepare('UPDATE Noticia SET titulo = ?,   inicio_noticia = ?,  fin_noticia = ?, duracion = ?, prioridad = ?,   perfil = ?   WHERE id_noticia = ?');
    
    //         $id_noticia = $noticia->getId_Noticia();
    //         $titulo = $noticia->getTitulo();
    //         $inicio_noticia = $noticia->getInicio_Noticia();
    //         $fin_noticia = $noticia->getFin_Noticia();
    //         $duracion = $noticia->getDuracion();
    //         $prioridad = $noticia->getPrioridad();
    //         $perfil = $noticia->getPerfil();
    //         $resultado = $conexion->execute([$titulo, $inicio_noticia, $fin_noticia, $duracion, $prioridad, $perfil, $id_noticia]);
    //         Database::desconexion();
    
    //         return $resultado;
    //     }







    }
    







