<?php 

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

echo '<pre>';

if(isset($_POST['submit'])){

$title = $_POST['title'];
$firstname = $_POST['firstname']; 
$lastname = $_POST['lastname']; 
$email_from = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
$subject = $_POST['subject']; 
$message = $_POST['message']; 
$image = $_POST['image_field']; 
$format = $_POST['format'];
//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// 0 = off (for production use)
// 1 = client messages
// 2 = client and server messages
$mail->SMTPDebug = 2;
//Set the hostname of the mail server
$mail->Host = 'smtp.gmail.com';
// use
// $mail->Host = gethostbyname('smtp.gmail.com');
// if your network does not support SMTP over IPv6
//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
$mail->Port = 587;
//Set the encryption system to use - ssl (deprecated) or tls
$mail->SMTPSecure = 'tls';
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
// Password hide with gitignore
if(file_exists('pass_gmail.php')) {
    include 'pass_gmail.php';
}
//Set who the message is to be sent from
$mail->setFrom($email_from);
//Set who the message is to be sent to
$mail->addAddress($email_from);
//Set the subject line
$mail->Subject = $subject;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$mail->msgHTML($message);
//Attach an image file
$mail->addAttachment($image);
//send the message, check for errors
if (!$mail->send()) {
	$error = "Mailer Error: " . $mail->ErrorInfo;
    echo '<p id="para">'.$error.'</p>';
} else {
    echo '<p id="para">Message envoyé!</p>';
}
}
else{
echo '<p id="para">Veuillez entrer des données valides, svp</p>';
}

 
// $error_message = "";
// $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

// if(!preg_match($email_exp,$email_from)) {
//     $error_message .= "L'adresse e-mail ne semble pas être valide.<br />";
//   }
 
//     $string_exp = "/^[A-Za-z .'-]+$/";
 
//   if(!preg_match($string_exp,$first_name)) {
//     $error_message .= 'Le prénom ne semble pas être valide.<br />';
//   }
 
//   if(!preg_match($string_exp,$last_name)) {
//     $error_message .= 'Le nom ne semble pas être valide.<br />';
//   }
 
//   if(strlen($message) < 2) {
//     $error_message .= 'Le message ne semble pas être valide.<br />';
//   }
 
//   if(strlen($error_message) > 0) {
//     died($error_message);
//   }
 
//     $email_message = "Form details below.\n\n";

//   function clean_string($string) {
//       $bad = array("content-type","bcc:","to:","cc:","href");
//       return str_replace($bad,"",$string);
//     }
 
// $email_message .= "Prénom: ".clean_string($firstname)."\n";
// $email_message .= "Nom: ".clean_string($lastname)."\n";
// $email_message .= "Email: ".clean_string($email_from)."\n";
// $email_message .= "Message: ".clean_string($message)."\n";
 
// // create email headers
// $headers = 'From: '.$email_from."\r\n".
// 'Reply-To: '.$email_from."\r\n" .
// 'X-Mailer: PHP/' . phpversion();
// @mail($email_to, $email_subject, $email_message, $headers);  


// // on initie un tableau qui va contenir toute erreur potentielle.
// $errors = array();
// // Sanitisation
// $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
// // Validation
// // 2. Validation
// if (false === filter_var($email, FILTER_VALIDATE_EMAIL)) {
//    $errors['email'] =  "Cette adresse est invalide.";
// }
// // 3. Exécution
// if (count($errors)> 0){
// 	echo 'Il y a des erreurs!';
// 	print_r($errors);
// 	exit;
// }



?>