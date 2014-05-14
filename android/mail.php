<?php
require '../PHPMailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                 
$mail->Host = 'smtp.gmail.com';  
$mail->SMTPAuth = true;                             
$mail->Port       = 587;
$mail->Username = 'ctcrazyuniverse@gmail.com';      
$mail->Password = 'projecte123'; //Alg� esperava que poses la meva contrasenya?
$mail->SMTPSecure = 'tls'; 
$mail->SMTPDebug  = 0;                         

$mail->From = 'ctcrazyuniverse@gmail.com';
$mail->FromName = 'CrazyUniverse';
$mail->addAddress("$m" , "$u");  

$mail->WordWrap = 50;                       
//$mail->addAttachment('pas.txt');   
$mail->isHTML(true);                          

$mail->Subject = 'Contrasenya i Password';
$mail->Body    = 'Nom Usuari: '.$u.' <br />Password: '.$p.' <br />Recovery key: '.$recovery;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

$mail->send();
