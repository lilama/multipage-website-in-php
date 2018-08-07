<?php 

echo '<pre>';

$title = $_POST['title'];
$firstname = $_POST['firstname']; 
$lastname = $_POST['lastname']; 
$email_from = $_POST['email'];
$subject = $_POST['subject']; 
$message = $_POST['message']; 
$image = $_POST['image_field']; 
$format = $_POST['format']; 
 
$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

if(!preg_match($email_exp,$email_from)) {
    $error_message .= "L'adresse e-mail ne semble pas être valide.<br />";
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'Le prénom ne semble pas être valide.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'Le nom ne semble pas être valide.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";


if(isset($_POST['submit'])){ // si formulaire soumis
 echo $_POST['title'];
 echo $_POST['firstname'];
 echo $_POST['lastname'];
 echo $_POST['email'];
 echo $_POST['subject'];
 echo nl2br($_POST ['message']);
}

// on initie un tableau qui va contenir toute erreur potentielle.
$errors = array();
// Sanitisation
$email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
// Validation
// 2. Validation
if (false === filter_var($email, FILTER_VALIDATE_EMAIL)) {
   $errors['email'] =  "Cette adresse est invalide.";
}
// 3. Exécution
if (count($errors)> 0){
	echo 'Il y a des erreurs!';
	print_r($errors);
	exit;
}



?>