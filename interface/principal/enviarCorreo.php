<?php

use \PHPMailer\PHPMailer\PHPMailer;
use \PHPMailer\PHPMailer\SMTP;
use \PHPMailer\PHPMailer\Exception;


require '../../vendor/phpmailer/PHPMailer/src/Exception.php';
require '../../vendor/phpmailer/PHPMailer/src/PHPMailer.php';
require '../../vendor/phpmailer/PHPMailer/src/SMTP.php';
require '../../vendor/autoload.php';


$mail = new PHPMailer(true);

try {


    //los datos de la interfaz
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $destinatario = $_POST['destinatario'];
    $nombreDestinatario = $_POST['nombreDestinatario'];
    $mensaje = $_POST['mensaje'];


    //Configuración del servidor 
    $mail->SMTPDebug = 0;
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER; sirve para depurar                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'gzamzam287@g.educaand.es';                     //SMTP username
    $mail->Password   = 'wwdu vkkv ugmt yiuk';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Destinatarios
    $mail->setFrom($email, $nombre);
    /*Gmail no permiten cambiar la dirección de correo electrónico del remitente 
    cuando se utiliza su servicio SMTP. muestran la dirección de correo electrónico 
    de la cuenta que se utilizó para enviar el correo electrónico.*/
    $mail->addAddress( $destinatario,  $nombreDestinatario);     
   // $mail->addAddress('Diegogg137@gmail.com', 'Diego');
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = ' Mensaje de ' . $nombre;
    $mail->Body    = $mensaje;
    $mail->AltBody = $mensaje;

    $mail->send();
     // Redirigir al usuario a la interfaz principal
     header("Location: http://localhost/becas/index.php?menu=correo&mensaje=enviado");
} catch (Exception $e) {
    // Redirigir al usuario a la interfaz principal con un mensaje de error
    header('Location: http://localhost/becas/index.php?menu=correomensaje=error&error=' . urlencode($mail->ErrorInfo));
    // header('Location: Index.php?mensaje=error&error=' . urlencode($mail->ErrorInfo));
}
?>


