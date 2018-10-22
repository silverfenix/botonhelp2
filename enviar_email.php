<?php 
$destinatario = "ueatm2012@gmail.com"; 
$asunto = "Este mensaje es de prueba"; 
$cuerpo = ' 
<html> 
<head> 
   <title>Prueba de correo</title> 
</head> 
<body> 
<h1>Socorro!</h1> 
<p> 
<b>Cuerpo del mensaje. 
</p> 
</body> 
</html> 
'; 

//para el envío en formato HTML 
$headers = "MIME-Version: 1.0\r\n"; 
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n"; 

//dirección del remitente 
$headers .= "From: Boton de Panico - JCP Conectado.... <ueatm2012@gmail.com>\r\n"; 

//dirección de respuesta, si queremos que sea distinta que la del remitente 
//$headers .= "Reply-To: mariano@desarrolloweb.com\r\n"; 

//ruta del mensaje desde origen a destino 
//$headers .= "Return-path: holahola@desarrolloweb.com\r\n"; 

//direcciones que recibián copia 
$headers .= "Cc: ueatm2012@gmail.com\r\n"; 

//direcciones que recibirán copia oculta  "Bcc: pepe@pepe.com,juan@juan.com\r\n";
$headers .= "Bcc: ueatm2012@gmail.com\r\n"; 

mail($destinatario,$asunto,$cuerpo,$headers) 
?>