<?php 

  $nombre = $_POST['nombre'];
  $nombre = $_POST['correo'];
  $nombre = $_POST['telefono'];
  $nombre = $_POST['mensaje'];
  
  $destinatario = "santigonzlezgc87@gmail.com";
  $asunto = "Contacto desde nuestra web";

  mail($destinatario, $asunto);
  

?>
