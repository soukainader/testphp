<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "PHPMailer/src/PHPMailer.php";
require_once "PHPMailer/src/SMTP.php";
require_once "PHPMailer/src/Exception.php";

$mail = new PHPMailer(true);

//Enable SMTP debugging.
$mail->SMTPDebug = 0; //0 or 2 

//Set PHPMailer to use SMTP.
$mail->isSMTP();

//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";

//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = true;

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

//Provide username and password     
$mail->Username = "soukainader99@gmail.com";
$mail->Password = "kdzsjvnkmljbnyxn";

//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";

//Set TCP port to connect to
$mail->Port = 587;

$mail->From = "soukainader99@gmail.com";
$mail->FromName = "Adhaki commentaire";

$mail->addAddress("soukainader99@gmail.com", "Suren Kumar");

$mail->isHTML(true);
$mail->Subject = "Adhaki commentaire";

$message = "
<table>
	<tr><td>Name: </td><td>" . $_POST["name"] . "</td></tr>
	<tr><td>Email: </td><td>" . $_POST["email"] . "</td></tr>
	<tr><td>Sujet: </td><td>" . $_POST["sujet"] . "</td></tr>
	<tr><td>Message: </td><td>" . $_POST["commentaire"] . "</td></tr>
</table>
";

$mail->Body = $message;

try {
    $mail->send();
    header("Location: message.html");
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
?>