<?php
Class ConvocBarIdioma {

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


    public static function añadirConvocatoriaIdioma($ConvocatoriaBaremoIdioma) {
        Database::abreConexion();
    
        $conexion = Database::getConexion()->prepare('INSERT INTO convocatoriaBaremoIdioma (
 
         Id_ConvocatoriaBaremo,
         A1,
         A2,
         B1,
         B2,
         C1,
         C2
         )
         VALUES (
 
         :Id_ConvocatoriaBaremo, 
         :A1, 
         :A2, 
         :B1, 
         :B2, 
         :C1, 
         :C2)');
    
        $conexion->execute([
         
         'Id_ConvocatoriaBaremo'=>$ConvocatoriaBaremoIdioma->getId_ConvocatoriaBaremo(),
         'A1'=>$ConvocatoriaBaremoIdioma->getA1(),
         'A2'=>$ConvocatoriaBaremoIdioma->getA2(),
         'B1'=>$ConvocatoriaBaremoIdioma->getB1(),
         'B2'=>$ConvocatoriaBaremoIdioma->getB2(),
         'C1'=>$ConvocatoriaBaremoIdioma->getC1(),
         'C2'=>$ConvocatoriaBaremoIdioma->getC2(),]); 
    
         $id_convocatoriaBaremoIdioma = Database::getConexion()->lastInsertId();
    
        $ConvocatoriaBaremoIdioma->setId_convocatoriaBaremoIdioma($id_convocatoriaBaremoIdioma);
    
       // Database::desconexion();
    
        return $id_convocatoriaBaremoIdioma;
    }
    

}
?>