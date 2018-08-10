<?php
// Traitement du formulaire en php
	if (isset($_POST['genre']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['objet']) && isset($_POST['message']) && isset($_FILES['docs']) && isset($_POST['formatRep']) && isset($_POST['CGU']) && !empty($_POST['genre']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['objet']) && !empty($_POST['message'])  && !empty($_FILES['docs']) && !empty($_POST['formatRep']) && !empty($_POST['CGU'])) {

		// on initie un tableau qui va contenir toute erreur potentielle.
		$errors = array();
		
		$email = $_POST['email'];
		
		// 1. Sanitisation: Remove any illegal character from the data.
		// Email
		$emailNettoye = filter_var($email, FILTER_SANITIZE_EMAIL);
		// Genre
		$genreNettoye = sanitiserString($_POST['genre']);
		// Nom
		$nomNettoye = sanitiserString($_POST['nom']);
		// Prénom
		$prenomNettoye = sanitiserString($_POST['prenom']);	
		// Objet
		$objetNettoye = sanitiserString($_POST['objet']);		
		// Message
		$messageNettoye = sanitiserString($_POST['message']);		
		// Titre Fichier
		$titreFicNettoye = sanitiserString($_POST['titreFic']);		
		// Format Réponse
		$formatRepNettoye = sanitiserString($_POST['formatRep']);

		$cguNettoye = sanitiserString($_POST['CGU']);

		// 2. Validation: Determine if the data is in proper form.
		// Email
		$emailValide = filter_var($emailNettoye, FILTER_VALIDATE_EMAIL);

		if ($emailValide === false) {
			$errors['email'] = 'Cette adresse email nettoyée est invalide. Désolé.';			
		}	
 
 		if(strlen($messageNettoye) < 2) {
		    $errors['erreurMessage'] = "Le message ne semble pas être valide";
		}
 
 		// Contrôle fichier uploadé
		$maxwidth = 1048576;
		$maxheight = 1048576;
		$maxsize = 1048576;
		$extensions_valides = array('jpg', 'jpeg', 'gif', 'png');
		$extensions_upload = strtolower(substr(strrchr($_FILES['docs']['name'], '.'), 1));
		$images_sizes = getimagesize($_FILES['docs']['tmp_name']);
		if ($_FILES['docs']['error'] > 0) $errors['erreurTransfert'] = "Erreur lors du transfert";
		if ($_FILES['docs']['size'] > $maxsize) $errors['erreurFicGros'] = "Le fichier est trop gros";
		if ($images_sizes[0] > $maxwidth OR $images_sizes[1] > $maxheight) $errors['erreurImgGrande'] = "Image trop grande";
		$id_membre = md5(uniqid(rand(), true));
		$nomFichier = "logs/img/{$id_membre}.{$extensions_upload}";
		$resultat = move_uploaded_file($_FILES["docs"]["tmp_name"], $nomFichier);					
		
		// 3. Exécution
		if (count($errors)> 0){
			echo '<br/>Il y a des erreurs!<br/>';
			print_r($errors);
			exit;
		}	

		// Le formulaire est bien rempli: tout va bien		
		include 'mail.php';
				
	} else {
		echo "Des informations sont manquantes";
	}

	function sanitiserString($parametre) {
		return filter_var($parametre, FILTER_SANITIZE_STRING);
	}

/* Add logs in txt file */
$my_file = 'logs/logs.txt';
$handle = fopen($my_file, 'a') or die('Cannot open file:  '.$my_file);
$date = new DateTime();
$date = $date->format('Y-m-d H:i:s');
$data = $date . "\n";
if(isset($firstname) && isset($lastname) && isset($title) && isset($email)){
    $data .= 'message from ' . $title . ' '  . $firstName . ' ' . $surname . ' (' . $email . ')';
    $data .= "\n";
}elseif(isset($firstname) && isset($lastname) && isset($email)) {
    $data .= 'message from ' . $firstname . ' ' . $lastname . ' (' . $email . ')';
    $data .= "\n";
}elseif(isset($email)) {
    $data .= 'message from ' . $email . "\n";
}
if(isset($subject)){
    $data .= 'Concerns : ' . $subject . "\n";
}
if(isset($message)){
    $data .= $message . "\n";
}
$data .= "\n";
fwrite($handle, $data);
fclose($handle);

?>	  			
