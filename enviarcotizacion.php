<?php
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
    $mail->Host       = 'smtp.sendgrid.net';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'apikey';                     //SMTP username
    $mail->Password   = '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';                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('pccarrillop@gmail.com', 'WebSeminuevos');
    $mail->addAddress('pccarrillop@gmail.com', 'WebSeminuevos');     //Add a recipient
    

    

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    
    $mail->Subject = 'Cotizacion Solicitada';

    $html = '<div id="div">
    <img id="fotos" src="https://www.revistaturbo.com/sites/default/files/forester.jpg" class="card-img-top" alt="...">

    </div>';

    $mail->Body    = $html;
    
    


    



    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}