<?php
$to      = 'info@canet.com';
/*$to      = 'h2d_07@hotmail.com';*/
$subject = 'Contacto Canet';
$message = '<b>Nombre: </b>'.$_POST["nombre"].'<br>'.'<b>Telefono: </b>'.$_POST["telefono"].'<br>'.'<b>Correo: </b>'.$_POST["correo"].'<br>';
$headers = 'From: noreply@canet.com' . "\r\n" .
	'Bcc: dev@listomarketing.com' . "\r\n" .
	'Content-type: text/html; charset=UTF-8' . "\r\n".
    'Reply-To: info@canet.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)){
	header("Location: thankyou.html");
}else{
	header("Location: error.html");
}
?> 