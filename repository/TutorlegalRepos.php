<?php
include_once '../helper/autocargar.php';
include_once 'db.php';


Class TutorLegalRepos {

    public static function ExisteDniTutor ($dni) {
        Database::abreConexion();
    
    
        $stmt = Database::getConexion()->prepare('SELECT * FROM TUTORLEGAL WHERE  dni_TutorLegal = :dni_TutorLegal');
      
        $stmt->execute(['dni_TutorLegal' => $dni]);
    
        return $stmt->fetch() !== false;
    }

    public static function añadirTutorLegal ($TutorLegal) {

        Database::abreConexion();

        $conexion = Database::getConexion()->prepare('INSERT INTO TUTORLEGAL ( 
        dni_TutorLegal,
        nombre_TutorLegal,
        apellido_TutorLegal,
        telefono_TutorLegal,
        domicilio_TutorLegal
        )
        VALUES (
        :dni_TutorLegal,
        :nombre_TutorLegal,
        :apellido_TutorLegal,
        :telefono_TutorLegal,
        :domicilio_TutorLegal
        )');

        $conexion->execute([
            'dni_TutorLegal'=>$TutorLegal->getDni_TutorLegal(),
            'nombre_TutorLegal'=>$TutorLegal->getNombre_TutorLegal(), 
            'apellido_TutorLegal'=>$TutorLegal->getApellido_TutorLegal(),
            'telefono_TutorLegal'=>$TutorLegal->getTelefono_TutorLegal(),
            'domicilio_TutorLegal'=>$TutorLegal->getDomicilio_TutorLegal(),
        ]);

     $dni_TutorLegal = Database::getConexion()->lastInsertId();

     $TutorLegal->setDni_TutorLegal($dni_TutorLegal);


     return $dni_TutorLegal;



    }


}

?>