<?php
include_once '../helper/autocargar.php';
include_once '../repository/candidatoRepos.php';
include_once '../repository/cordinadorRepos.php';
include_once '../repository/loginSession.php';

// Inicia la sesión
$sesion = new Sesion();


//------------------------------------------- login de candidatooo
if (isset($_POST['form_candidato'])) {
    $dni = $_POST['dni_Candidato'];
    $password = $_POST['password'];

    
    if (CandidatoRepos::ExisteDni($dni)) {
     
        if (CandidatoRepos::verificarCredenciales($dni, $password)) {
         
            $sesion->login('Candidato'); 
            $_SESSION['dni'] = $dni;
            header("Location: http://localhost/becas/index.php?menu=PortalCandidato");

            exit();
        } else {
            // Cuando la contraseña es incorrecta
            header("Location: http://localhost/becas/index.php?menu=candidato&error=PasswordIncorrecta");

            // header("Location: ../interface/logeoCandidato.php?error=PasswordIncorrecta");
            exit();
        }
    } else {
        // Cuando el dni no se encuentra
        header("Location: http://localhost/becas/index.php?menu=candidato&error=dniNoEncontrado");
        //  header("Location: ../interface/logeoCandidato.php?error=dniNoEncontrado");
        exit();
    }
}

//------------------------------------------- login de coordinador
if (isset($_POST['form_coordinador'])) {
    $dni = $_POST['dni_Cordinador'];
    $password = $_POST['password'];

 
    if (CoordinadorRepos::ExisteDni($dni)) {

        if (CoordinadorRepos::verificarCredenciales($dni, $password)) {
          
            $sesion->login('Coordinador'); 
            $_SESSION['dni'] = $dni;
            header("Location: http://localhost/becas/index.php?menu=PortalCoordinador");
            exit();
        } else {
            header("Location: http://localhost/becas/index.php?menu=coordinador&error=PasswordIncorrecta");
            exit();
        }
    } else {
        header("Location: http://localhost/becas/index.php?menu=coordinador&error=dniNoEncontrado");
        exit();
    }
}
?>
