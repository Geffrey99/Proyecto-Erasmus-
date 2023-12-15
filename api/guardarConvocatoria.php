<?php
include_once '../repository/convocatoriaRepos.php';
include_once '../helper/autocargar.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['convocatoria'])) {
    $convocatoria = $_POST['convocatoria'];
    convocatoriaRepos::añadirConvocatoria($convocatoria);
} else {
    echo "Error: Se requiere una convocatoria para guardar la convocatoria.";
}
?>