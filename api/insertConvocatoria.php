<?php

include_once '../repository/convocatoriaRepos.php';
include_once '../repository/convocBaremRepos.php';
include_once '../repository/convocatBarIdioma.php';
include_once '../helper/autocargar.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
    //tabla convocatoria
    $movilidades = $_POST['movilidades'];
    $tipo = $_POST['tipo'];
    $fechaInicio_Solicitudes = $_POST['fechaInicio_Solicitudes'];
    $fechaFin_Solicitudes = $_POST['fechaFin_Solicitudes'];
    $fechaInicio_Pruebas = $_POST['fechaInicio_Pruebas'];
    $fechaFin_Pruebas = $_POST['fechaFin_Pruebas'];
    $Fecha_Lista_Provisional = $_POST['fecha_Lista_Provisional'];
    $Fecha_Lista_Definitiva = $_POST['fecha_Lista_Definitiva'];
    $codProyecto = $_POST['codProyecto'];
    $destino = $_POST['destino'];

    $convocatoria = new Convocatoria(
        null,
        $movilidades,
        $tipo,
        $fechaInicio_Solicitudes,
        $fechaFin_Solicitudes,
        $fechaInicio_Pruebas,
        $fechaFin_Pruebas,
        $Fecha_Lista_Provisional,
        $Fecha_Lista_Definitiva,
        $codProyecto,
        $destino
    );


    convocatoriaRepos::añadirConvocatoria($convocatoria);

    $Id_convocatoria= $convocatoria->getId_Convocatoria();


    //tabla ConvocatoriaBaremo
 //   $seleccion = $_POST['seleccion'];
 $Id_itembaremo = $_POST['Id_itembaremo'];
 $requisitos = $_POST['requisitos'];
 $valor_min = $_POST['valor_min'];
 $valor_max = $_POST['valor_max'];
 $presentausuario = $_POST['presentausuario'];
 $obligatorio = $_POST['obligatorio'];
 
 for($i = 0; $i < count($Id_itembaremo); $i++) {
     $convocatoriaBaremo = new ConvocatoriaBaremo(
         null,
         $Id_convocatoria,
         $Id_itembaremo[$i],
         $requisitos[$i],
         $valor_min[$i],
         $valor_max[$i],
         $presentausuario[$i],
         $obligatorio[$i]
     );
 
     ConvocBaremRepos::añadirConvocatoriaB($convocatoriaBaremo);
 }
          

            $Id_convocatoriaBaremo= $convocatoriaBaremo->getId_ConvocatoriaBaremo();
//tabla convocatoriaBaremoIdioma

            $A1 = $_POST['A1'];
            $A2 = $_POST['A2'];
            $B1 = $_POST['B1'];
            $B2 = $_POST['B2'];
            $C1 = $_POST['C1'];
            $C2 = $_POST['C2'];

         
            $convocatoriaBaremoIdioma = new ConvocatoriaBaremoIdioma(
                null,
                $Id_convocatoriaBaremo,
                $A1,
                $A2,
                $B1,
                $B2,
                $C1,
                $C2
           
            );

            ConvocBarIdioma::añadirConvocatoriaIdioma($convocatoriaBaremoIdioma);

            echo "<pre>";
                     var_dump($convocatoria);
                     print_r($convocatoriaBaremo);
                     print_r($convocatoriaBaremoIdioma);
                    echo "</pre>";
        }

?>


