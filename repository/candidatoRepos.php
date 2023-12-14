<?php
include_once '../helper/autocargar.php';
include_once 'db.php';

Class CandidatoRepos { 

public static function ExisteDni ($dni) {
    Database::abreConexion();


    $stmt = Database::getConexion()->prepare('SELECT * FROM CANDIDATO WHERE  dni_Candidato = :dni_Candidato');
  
    $stmt->execute(['dni_Candidato' => $dni]);

    return $stmt->fetch() !== false;
}



    public static function añadirCandidato($Candidato) {
        Database::abreConexion();


        // if (self::ExisteDni($Candidato->getDni_Candidato())) {
        //     // El DNI del candidato ya existe en la base de datos
        //     echo json_encode(['success' => false, 'message' => 'El DNI del candidato ya existe en la base de datos.']);
        //     return null;
        // }


        $conexion = Database::getConexion()->prepare('INSERT INTO Candidato (
         dni_Candidato,
         fecha_nac_Candidato,
         nombre_Candidato,
         ap1_Candidato,
         ap2_Candidato,
         telefono_Candidato,
         correo_Candidato,
         domicilio_Candidato,
         Cod_Grupo,
         dni_TutorLegal,
         password
         )
         VALUES (
         :dni_Candidato,   
         :fecha_nac_Candidato, 
         :nombre_Candidato, 
         :ap1_Candidato,
         :ap2_Candidato,
         :telefono_Candidato,
         :correo_Candidato,
         :domicilio_Candidato,
         :Cod_Grupo,
         :dni_TutorLegal,
         :password)');
      
        $conexion->execute([
         'dni_Candidato'=>$Candidato->getDni_Candidato(),   
         'fecha_nac_Candidato'=>$Candidato->getFecha_nac_Candidato(),
         'nombre_Candidato'=>$Candidato->getNombre_Candidato(),
         'ap1_Candidato'=>$Candidato->getAp1_Candidato(),
         'ap2_Candidato'=>$Candidato->getAp2_Candidato(),
         'telefono_Candidato'=>$Candidato->getTelefono_Candidato(),
         'correo_Candidato'=>$Candidato->getCorreo_Candidato(),   
         'domicilio_Candidato'=>$Candidato->getDomicilio_Candidato(),
         'Cod_Grupo'=>$Candidato->getCod_Grupo(),
         'dni_TutorLegal'=>$Candidato->getDni_TutorLegal(),
         'password'=>$Candidato->getPassword(),
        
        ]); 
       



        $dni_Candidato = Database::getConexion()->lastInsertId();
        
        $Candidato->setDni_Candidato($dni_Candidato);

       // Database::desconexion();
     
        return $dni_Candidato;
    }

    public static function verificarCredenciales($dni, $password) {
        $stmt = Database::getConexion()->prepare('SELECT password FROM CANDIDATO WHERE dni_Candidato = :dni_Candidato');
        $stmt->execute(['dni_Candidato' => $dni]);
    
        $result = $stmt->fetch();
    
        // Verificar la contraseña (asumiendo que está almacenada en texto plano)
        if ($result && $password === $result['password']) {
            return true; // Credenciales válidas
        } else {
            return false; 
        }
    }

}