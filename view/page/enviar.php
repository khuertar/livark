<?php
extract($_POST);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
   $mail->isMail();                       //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`;

    //Recipients
    $mail->setFrom($correo, $nombre);
    $mail->addAddress('sergio.garcia@livark.com.mx', 'Livark');     //Add a recipient   

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Solicitud de informacion';
    $mail->Body    = '<b>Hola mi nombre es:</b> '.ucfirst($nombre).'
                      <br><b>Mi correo es:</b> '.$correo.'
                      <br><b>Mi teléfono para contacto:</b> '.$tel.'
                      <br><b>Tengo un mensaje:</b> '.ucfirst($comentario);    

    $mail->send();
    header('Location: mensaje');
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}