<?php
include_once '../helper/autocargar.php';
include_once 'db.php';
class CoordinadorRepos {

    public static function ExisteDni ($dni) {
        Database::abreConexion();
    
    
        $stmt = Database::getConexion()->prepare('SELECT * FROM Cordinador WHERE  dni_Cordinador = :dni_Cordinador');
      
        $stmt->execute(['dni_Cordinador' => $dni]);
    
        return $stmt->fetch() !== false;
    }


    public static function verificarCredenciales($dni, $password) {
        $stmt = Database::getConexion()->prepare('SELECT password FROM Cordinador WHERE dni_Cordinador = :dni_Cordinador');
        $stmt->execute(['dni_Cordinador' => $dni]);

        $result = $stmt->fetch();
        
        // Verificar la contraseña (asumiendo que está almacenada de forma segura, por ejemplo, usando un hash)
        // if ($result && password_verify($password, $result['password'])) {
        if ($result && $password === $result['password']) {  
            return true; // Credenciales válidas
        } else {
            return false; // Credenciales incorrectas
        }
    }


}


?>