
<?php
require_once '../vendor/autoload.php';
use Dompdf\Dompdf;
include_once '../repository/SolicitudRepos.php';
include_once '../helper/autocargar.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
 
    $dni_Candidato = $_POST['dni_Candidato'];
    $ID_CONVOCATORIA = $_POST['ID_CONVOCATORIA'];
    $DESTINATARIO = $_POST['DESTINATARIO'];
    $TELEFONO = $_POST['TELEFONO'];
    $EMAIL = $_POST['EMAIL'];
    $DOMICILIO = $_POST['DOMICILIO'];
    $FOTO = base64_decode($_POST['captured_image']); // Convierte la imagen a binario

    // Crea una nueva solicitud
    $solicitud = new Solicitud(
        null,
        $dni_Candidato,
        $ID_CONVOCATORIA,
        $DESTINATARIO,
        $TELEFONO,
        $EMAIL,
        $DOMICILIO,
        $FOTO
    );

    
    SolicitudRepos::añadirSolicitud($solicitud);

    $imagen_codificada = $_POST['captured_image'];

   
    $partes = explode(',', $imagen_codificada);
    $imagen_sin_prefijo = $partes[1];
    
    //se decofica la imagen antes de guardarla
    $imagen_decodificada = base64_decode($imagen_sin_prefijo);
    
    
    $ruta_imagen = '../ArchivosCandidato/' . $dni_Candidato . '.png';
    
    
    file_put_contents($ruta_imagen, $imagen_decodificada);
    // Comprueba si se ha subido un archivo PDF
    if (isset($_FILES['OTRO_PDF']) && $_FILES['OTRO_PDF']['error'] == 0) {
        // Mueve el archivo PDF a la carpeta deseada
        $ruta_pdf = '../ArchivosCandidato/' . $dni_Candidato . '.pdf';
        move_uploaded_file($_FILES['OTRO_PDF']['tmp_name'], $ruta_pdf);
    }

    // Crea el PDF con la plantilla
    $html = '
    <html>
    <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Solicitud de Erazmuz</title>
    </head>
    <body>

    <h2>Datos de la solicitud</h2>
    <p>DNI Candidato: ' . $dni_Candidato . '</p>
    <p>Convocatoria: ' . $ID_CONVOCATORIA . '</p>
    <p>Grupo: ' . $DESTINATARIO . '</p>
    <p>Teléfono: ' . $TELEFONO . '</p>
    <p>Email: ' . $EMAIL . '</p>
    <p>Domicilio: ' . $DOMICILIO . '</p>
    <p>Foto: <br><img src="../ArchivosCandidato/' . $dni_Candidato . '.png" 
    <p>Informe: <a href="' . $ruta_pdf . '">Ver PDF</a></p>
    </body>
    </html>';

    $mipdf = new Dompdf();
    $mipdf->getOptions()->setChroot($_SERVER['DOCUMENT_ROOT']);
    $mipdf ->setpaper("A4", "portrait");
    $mipdf ->loadhtml($html);
    $mipdf->render();
    $pdf = $mipdf->output();

// Guarda el PDF en carpeta del candidato 
$ruta_pdf = '../pdfs/' . $dni_Candidato . '.pdf';
file_put_contents($ruta_pdf, $pdf);

// Muestra el PDF en el navegador
//$mipdf->stream("solicitud.pdf", ["Attachment" => 0]);
header("Location: http://localhost/becas/index.php?menu=PortalCandidato");
}
?>


<!--EN ESTE CASO ME FALTARIA ENVIARLO POR CORREO Y SE QUEDARIA LISTO---->