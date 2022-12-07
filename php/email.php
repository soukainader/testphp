<?php
//get data from form
$name = $_POST['name'];
$email= $_POST['email'];
$sujet = $_POST['sujet'];
$commentaire = $_POST['cmt'];
$to = "soukainader99@gmail.com";
$subject = "Mail From website";
$txt="Name = ". $name . "\r\n Email = " . $email . "\r\n Sujet =" . $sujet. "\r\n Commentaire =" . $commentaire;
$headers = "From: noreply@yoursite.com";
if($email!=NULL) {
mail($to, $subject, $txt, $headers);
}
//redirect
header("Location: index.html");
?>