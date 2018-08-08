<?php 

//Import PHPMailer classes into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
require 'vendor/autoload.php';

echo '<pre>';

// Sanitize & validate
$title = filter_var($_POST['title'], FILTER_SANITIZE_STRING);
$firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
$lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
$email_from = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
if (true === filter_var($email_from, FILTER_VALIDATE_EMAIL)) {
    echo "Cette adresse email est valide.";
} else {
	echo "Cette adresse email n'est pas valide.";
}
$subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
$message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);
$format = filter_var($_POST['format'], FILTER_SANITIZE_STRING);

// Image treatment
$handle = new upload($_FILES['image_field']);
if ($handle->uploaded) {
  $handle->file_new_name_body   = $firstname .'-'. $lastname .'-img';
  $handle->image_resize         = true;
  $handle->image_x              = 100;
  $handle->image_ratio_y        = true;
  $handle->process('logs/img/');
  if ($handle->processed) {
    echo 'image resized';
    $handle->clean();
  } else {
    echo 'error : ' . $handle->error;
  }
}

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
$mail->setFrom($email_from, $firstname . ' ' . $lastname);
//Set an alternative reply-to address
// $mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
$mail->addAddress('charlotte.tusset@gmail.com', 'Charlotte Tusset');
//Set the subject line
$mail->Subject = $subject;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
// $mail->msgHTML(file_get_contents('contents.html'), __DIR__);
//Replace the plain text body with one created manually
$mail->Body = $message;
//Attach an image file
$mail->addAttachment('logs/img/'.$firstname.'-'.$lastname.'-img.jpg');
//send the message, check for errors
if(!$mail->send()) {
    echo "Erreur " . $mail->ErrorInfo;
} else {
    echo "Message envoyé!";
}
unset($mail);

?>