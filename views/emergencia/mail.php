<?php

use app\models\Voluntario;
use app\models\VoluntarioSearch;
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com'; 				   	  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'sgechillan@gmail.com';                 // SMTP username
$mail->Password = 'Bomberos1';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587; 
                                  					 // TCP port to connect to
$mail->From = "sgechillan@gmail.com";
$mail->FromName = "SGE";

$mail->addAddress("cristofergajardoc@gmail.com", "Cristofer");

     // Add a recipient
/*$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');
*/
// Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Prueba';
$mail->Body    = '<b>Este es un correo de prueba!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
    header("location: http://localhost/grifo/web/");
}
?>