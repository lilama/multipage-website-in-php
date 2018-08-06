<?php 

echo '<pre>';

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