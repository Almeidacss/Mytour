<?php
$to = "youremail@email.com";
$subject = 'Teste de envio de email por PHP';
$message = 'Testando minha função PHP';
$headers = "Reply-To: youremail@email.com\r\n";
if (mail($to, $subject, $message, $headers)) {
   echo "email enviado com sucesso";
} else {
   echo "erro";
}