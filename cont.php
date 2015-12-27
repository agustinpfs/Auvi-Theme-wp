<?php
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$para = 'agustinpfs@gmail.com';
$titulo = 'Mensaje del formulario de contacto desde website';
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Mensaje:\n $mensaje";
$header = 'From: ' . $nombre;

if ($_POST['submit']) {
if (mail($para, $titulo, $msjCorreo, $header)) {
echo "<script language='javascript'>
alert('Mensaje enviado, muchas gracias.');
window.location.href = 'http://santiagoclavijo.com';
</script>";
} else {
echo 'Fall¨® el envio';
}
}
?>