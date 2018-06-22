<?php
session_start();
require 'include/PHPMailerAutoload.php';

define("HOME", substr($_SERVER['PHP_SELF'], 0, strrpos($_SERVER['PHP_SELF'], "/")+1));
define("REMITE", "no-reply@colaboraspace.com");
define("HOST_MAIL", "smtp.mandrillapp.com");
define("USER_MAIL", "sysadmin@wikot.com");
define("PASS_MAIL", "aA89BD-gFBW44VBJGaGdZA");

/*print_r($_POST);

exit;*/

if(isset($_POST)):

	$nombre    = $_POST['nombre'];
    $apellido  = $_POST['apellido'];
    $telefono  = $_POST['telefono'];
    $fecha     = $_POST['fecha'];
    $email     = $_POST['email'];
    $mensaje   = $_POST['mensaje'];

	$email_destino = array();
	$email_destino[] = "host@colaboraspace.com";
    $email_destino[] = "sysbytes@gmail.com";

	$body = "";
	$mail = new PHPMailer;
    $subject = 'Colabora - Contacto';
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";
    $headers .= "X-Mailer: PHP/".phpversion()."\r\n";
    $headers .= "From: Colabora - Website <".REMITE.">"."\r\n";

	$body = file_get_contents("mail.html");
	$body = str_replace("##NOMBRE##", strtoupper($nombre), $body);
    $body = str_replace("##APELLIDO##", strtoupper($apellido), $body);
    $body = str_replace("##EMAIL##", strtolower($email), $body);
    $body = str_replace("##TELEFONO##", $telefono, $body);
    $body = str_replace("##FECHA##", $fecha, $body);
    $body = str_replace("##MENSAJE##", $mensaje, $body);
    
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Host = HOST_MAIL; // SMTP a utilizar. Por ej. smtp.elserver.com
    $mail->Username = USER_MAIL; // Correo completo a utilizar
    $mail->Password = PASS_MAIL; // Contraseña
    $mail->Port = 587; // Puerto a utilizar

    //Con estas pocas líneas iniciamos una conexión con el SMTP. Lo que ahora deberíamos hacer, es configurar el mensaje a enviar, el //From, etc.
    $mail->From = REMITE; // Desde donde enviamos (Para mostrar)
    $mail->FromName = "ColaboraSpace";

    //Estas dos líneas, cumplirían la función de encabezado (En mail() usado de esta forma: “From: Nombre <correo@dominio.com>”) de //correo.
    foreach ($email_destino as $emailTo) {
    	$mail->AddAddress($emailTo); // Esta es la dirección a donde enviamos
    }
    $mail->IsHTML(true); // El correo se envía como HTML
    $mail->Subject = utf8_decode($subject); // Este es el titulo del email.

    $mail->Body = utf8_decode($body); // Mensaje a enviar
    $exito = $mail->Send(); // Envía el correo.

	echo 0;
else:
	echo 2;
endif;

?>