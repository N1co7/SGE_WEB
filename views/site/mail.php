<?php
require("class.phpmailer.php"); //Importamos la función PHP class.phpmailer 

$mail = new PHPMailer(); 

Luego tenemos que iniciar la validación por SMTP: 
$mail->IsSMTP(); 
$mail->SMTPAuth = true; // True para que verifique autentificación de la cuenta o de lo contrario False 
$mail->Username = "sgechillan@gmail.com"; // Cuenta de e-mail 
$mail->Password = "Bomberos1"; // Password 

$mail->Host = "localhost"; 
$mail->From = "sgechillan@gmail.com"; 
$mail->FromName = "SGE Chillán"; 
$mail->Subject = "Asunto"; 
$mail->AddAddress("sgechillan@gmail.com","Nombre a mostrar del Destinatario"); 

$mail->WordWrap = 50; 

$body  = "Hola, este es un…"; 
$body .= " mensaje de prueba"; 

$mail->Body = $body; 

$mail->Send(); 

// Notificamos al usuario del estado del mensaje 

if(!$mail->Send()){ 
   echo "No se pudo enviar el Mensaje."; 
}else{ 
   echo "Mensaje enviado"; 
} 

?>