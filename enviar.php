<?php
header("Refresh: 0;url=https://bakt.cl/#formulario");

$nombre = $_POST['nombre'];
$mail = $_POST['mail'];
$telefono = $_POST['telefono'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje = "Este mensaje fue enviado por " . $nombre . " \r\n";
$mensaje .= "E-mail: " . $mail . " \r\n";
$mensaje .= "Telefono: " . $_POST['telefono'] . " \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$para = 'kampf@live.cl';
$asunto = 'Contacto formulario bakt.cl';

mail($para, $asunto, utf8_decode($mensaje), $header);

echo '<br><br><center>Enviando...</center>';
?>