<?php
$nombre     = @trim(stripslashes($_POST['name'])); 
$de         = @trim(stripslashes($_POST['email'])); 
$asunto     = @trim(stripslashes($_POST['subject'])); 
$mensaje    = @trim(stripslashes($_POST['message'])); 
$para 		= 'matiaselian20@yahoo.com.ar';//replace with your email

$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: {$nombre} <{$de}>";
$headers[] = "Reply-To: <{$de}>";
$headers[] = "Subject: {$asunto}";
$headers[] = "X-Mailer: PHP/".phpversion();

mail($para, $asunto, $mensaje, $de, $headers);

die;
?>