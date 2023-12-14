<?php
include_once 'ApiConvocatoria.php';

$api = new ApiConvocatoria();

$api->getAll();
//.....?id_noticia=5 para ver q funcuiona

// if (isset($_GET['Id_convocatoria'])){
//     $id = $_GET ['Id_convocatoria'];

//     if (is_numeric($id)){
//         $api->getId($id);
//     }else {
//         $api->error('no es correcto lo introducido');
//     }

//  } else {
//         $api->getAll();
//     }


?>
