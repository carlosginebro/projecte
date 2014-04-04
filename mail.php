<?php
require 'PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                 
$mail->Host = 'smtp.gmail.com';  
$mail->SMTPAuth = true;                             
$mail->Port       = 587;
$mail->Username = 'ctcrazyuniverse@gmail.com';      
$mail->Password = 'projecte123'; //Algú esperava que poses la meva contrasenya?
$mail->SMTPSecure = 'tls'; 
$mail->SMTPDebug  = 0;                         

$mail->From = 'ctcrazyuniverse@gmail.com';
$mail->FromName = 'CrazyUniverse';
$mail->addAddress("$email" , 'persona');  
/*$mail->addReplyTo('info@example.com', 'Information');
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');*/

$mail->WordWrap = 50;                       
$mail->addAttachment('pas.txt');   
$mail->isHTML(true);                          

$mail->Subject = 'Asunto';
$mail->Body    = '<a href="http://localhost/act2/activarusuari.php?usu='.$nom.'" class="registre">Clica aqui per validarte!</a>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
   echo 'No puedo enviar el mensaje.';
   echo 'ERROR: ' . $mail->ErrorInfo;
   exit;
}

echo 'El mensaje ha sido enviado';
?>