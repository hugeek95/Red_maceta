<?php
if(isset($_POST['email'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_from = $_POST['email'];
$email_to = "aloha@redmaceta.com";
$email_subject = "Nuevo productor";

// Aquí se deberían validar los datos ingresados por el usuario

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

    header('Location: http://www.redmaceta.com?email=1');
    
}else{
    header('Location: http://www.redmaceta.com?email=0');    

die();
	
	}
    
?>