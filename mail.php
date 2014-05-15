<?php
require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                 
$mail->Host = 'smtp.gmail.com';  
$mail->SMTPAuth = true;                             
$mail->Port       = 587;
$mail->Username = 'ctcrazyuniverse@gmail.com';      
$mail->Password = 'projecte123'; 
$mail->SMTPSecure = 'tls'; 
$mail->SMTPDebug  = 0;                         

$mail->From = 'ctcrazyuniverse@gmail.com';
$mail->FromName = 'CrazyUniverse';
$mail->addAddress("$email" , "$u");  

$mail->WordWrap = 50;                       
  
$mail->isHTML(true);                          

$mail->Subject = 'Contrasenya i Password';
$mail->Body    = 'Nom Usuari: '.$u.' </br>Password: '.$p.' .';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
   echo 'No puedo enviar el mensaje.';
   echo 'ERROR: ' . $mail->ErrorInfo;
   exit;
}

echo 'El mensaje ha sido enviado';
?>