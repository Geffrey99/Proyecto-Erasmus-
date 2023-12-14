<?php

include_once '../repository/candidatoRepos.php';
include_once '../repository/TutorLegalRepos.php';
include_once '../helper/autocargar.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  // Comprueba si el candidato es menor de edad
  $fechaActual = date('Y-m-d');
  $fecha_nac_Candidato = $_POST['fecha_nac_Candidato'];
  $edad = date_diff(date_create($fecha_nac_Candidato), date_create($fechaActual))->y;

  $dni_TutorLegal = null; // Por si el alumno es mayor de edad 

$response = ARRAY();

  if ($edad < 18) {
    //tabla TutorLegal por si es menor el candidato 
    $dni_TutorLegal = $_POST['dni_TutorLegal'];
    $nombre_TutorLegal = $_POST['nombre_TutorLegal'];
    $apellido_TutorLegal = $_POST['apellido_TutorLegal'];
    $telefono_TutorLegal = $_POST['telefono_TutorLegal'];
    $domicilio_TutorLegal = $_POST['domicilio_TutorLegal'];
    
    $TutorLegal = new TutorLegal(
        $dni_TutorLegal,
        $nombre_TutorLegal,
        $apellido_TutorLegal,
        $telefono_TutorLegal,  
        $domicilio_TutorLegal
    );
   
    if (!TutorLegalRepos::ExisteDniTutor($dni_TutorLegal)) {
      TutorLegalRepos::añadirTutorLegal($TutorLegal);
      $response['tutorLegal'] = array('success' => true, 'message' => '');
  }
}
  

  //tabla candidato
  $dni_Candidato = $_POST['dni_Candidato'];
  $nombre_Candidato = $_POST['nombre_Candidato'];
  $ap1_Candidato = $_POST['ap1_Candidato'];
  $ap2_Candidato = $_POST['ap2_Candidato'];
  $telefono_Candidato = $_POST['telefono_Candidato'];
  $correo_Candidato = $_POST['correo_Candidato'];
  $domicilio_Candidato = $_POST['domicilio_Candidato'];
  $Cod_Grupo = $_POST['Cod_Grupo'];
  $password = $_POST['password'];

  $candidato = new Candidato(
      $dni_Candidato,
      $fecha_nac_Candidato,
      $nombre_Candidato,
      $ap1_Candidato,
      $ap2_Candidato,
      $telefono_Candidato,
      $correo_Candidato,
      $domicilio_Candidato,
      $Cod_Grupo,
      $dni_TutorLegal, // Aquí se usa el DNI del tutor legal
      $password
  );

  // CandidatoRepos::añadirCandidato($candidato);
  // var_dump($candidato);

  if (candidatoRepos::ExisteDni($dni_Candidato)) {
    $response['candidato'] = array('success' => false, 'message' => 'El DNI del candidato ya existe en la base de datos.');
    echo json_encode($response);
    exit();
  } else {
    $response['candidato'] = array('success' => true, 'message' => '');
    CandidatoRepos::añadirCandidato($candidato);
}

echo json_encode($response); // Envía la respuesta completa al final
}




  // if (candidatoRepos::ExisteDni($dni_Candidato)) {
  //   echo json_encode(['success' => false, 'message' => 'El DNI del candidato ya existe en la base de datos.']);

  // } else {
  //   echo json_encode(['success' => true, 'message' => '']);
  //    CandidatoRepos::añadirCandidato($candidato);

  // }

?>
