<?php
// partie contact Mailing non fonctionnel
session_start();
//connexion à la BD
$mysqli = new mysqli('localhost', 'root', '', 'tasseparfaite');

//en cas d'erreur procéder à la déconnexion 
if ($mysqli->connect_error) {

    die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
} 


$nom = mysqli_real_escape_string($mysqli, $_POST['nom']);
$email = mysqli_real_escape_string($mysqli, $_POST['email']);
$message = mysqli_real_escape_string($mysqli, $_POST['message']);

$email2 = "adel42@gmx.fr";
$objet = "Test Message";

if (strlen($nom) > 50) {
    echo 'nom_long';

} elseif (strlen($nom) < 2) {
    echo 'nom_court';

} elseif (strlen($email) > 50) {
    echo 'email_long';

} elseif (strlen($email) < 2) {
    echo 'email_court';

} elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo 'eformat';

} elseif (strlen($message) > 500) {
    echo 'message_long';

} elseif (strlen($message) < 3) {
    echo 'message_court';

} else {
	
	 //MAILER

     require 'phpmailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;
	
	//$mail->SMTPDebug = 3;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'mail.gmx.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'adel42@gmx.fr';                 // SMTP username
    $mail->Password = '******';                           // SMTP password
    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

	$mail->AddReplyTo($email);
    $mail->From = $email2;
    $mail->FromName = $nom;
    $mail->addAddress('adel42@gmx.fr', 'Admin');     // Add a recipient

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = $objet;
    $mail->Body = $message;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if (!$mail->send()) {
        echo 'Message could not be sent.';

        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'true';
    }


}
?>


