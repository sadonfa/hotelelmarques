<?php 

if(isset($_POST['mail'])) {

// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "sadonfa@gmail.com";
$email_subject = "Contacto desde el sitio web";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['name']) ||
!isset($_POST['lastname']) ||
!isset($_POST['mail']) ||
!isset($_POST['country']) ||
!isset($_POST['city']) ||
!isset($_POST['movil']) ||
!isset($_POST['identification']) ||
!isset($_POST['checkin']) ||
!isset($_POST['checkout']) ||
!isset($_POST['adults']) ||
!isset($_POST['kids']) ||
!isset($_POST['rooms'])) {

echo "<b>Ocurrió un error y el formulario no ha sido enviado. </b><br />";
echo "Por favor, vuelva atrás y verifique la información ingresada<br />";
die();
}

$email_message = "Detalles del formulario de contacto:\n\n";
$email_message .= "Nombre: " . $_POST['name'] . "\n";
$email_message .= "Apellido: " . $_POST['lastname'] . "\n";
$email_message .= "E-mail: " . $_POST['mail'] . "\n";
$email_message .= "Teléfono: " . $_POST['movil'] . "\n";
$email_message .= "Pais: " . $_POST['country'] . "\n\n";
$email_message .= "Ciudad: " . $_POST['city']. "\n";
$email_message .= "Identificaciion: " . $_POST['identification']. "\n";
$email_message .= "Check-in: " . $_POST['checkin'] . "\n";
$email_message .= "Check-Out: " . $_POST['checkout'] . "\n";
$email_message .= "Adultos: " . $_POST['adults'] . "\n\n";
$email_message .= "Niños: " . $_POST['kids'] . "\n";
$email_message .= "Habitaciones: " . $_POST['rooms'] . "\n\n";

// Ahora se envía el e-mail usando la función mail() de PHP

$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
mail($email_to, $email_subject, $email_message, $headers);

header('Location: ../index.php');
}
?>