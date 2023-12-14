<?php
class Database {
    private static $conexion;

    public static function abreConexion(){
        if(self::$conexion==null){
            $opciones = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8");
            self::$conexion = new PDO('mysql:host=localhost;dbname=proyectBecas', 'root', '', $opciones);
        }

    }

    public static function getConexion() {
        return self::$conexion;
    }

    public static function desconexion(){
        return self::$conexion=null;
    }
}

// Ejemplo de uso
Database::abreConexion();
$conexion = Database::getConexion();
Database::desconexion();
?>