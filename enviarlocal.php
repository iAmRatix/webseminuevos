<?php
session_start();

$correo = ''.$_SESSION['correo'].'';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';



$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'teemotop58@gmail.com';                     //SMTP username
    $mail->Password   = 'kzdozhydhhtvbovv';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients

    
    $mail->setFrom('teemotop58@gmail.com', 'WebSeminuevos');
    $mail->addAddress($correo);     //Add a recipient
    

    

    
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    
    

    
    
    $html = $_SESSION['html'];

    

    $mail->Subject = 'COTIZACION';
    $mail->Body    = $html;
   
    
    
   
    

    


        



    $mail->send();
    
    header("location: home.php");
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}




