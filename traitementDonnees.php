<?php
// Traitement du formulaire en php
	if (isset($_POST['genre']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['objet']) && isset($_POST['message']) && isset($_POST['titreFic']) && isset($_FILES['docs']) && isset($_POST['formatRep']) && !empty($_POST['genre']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['objet']) && !empty($_POST['message']) && !empty($_POST['titreFic']) && !empty($_FILES['docs']) && !empty($_POST['formatRep'])) {


		$email = $_POST['email'];
		$emailNettoye = filter_var($email, FILTER_SANITIZE_EMAIL);

	  	$options = array(
			'nom' => FILTER_SANITIZE_STRING, 
			'prenom' => FILTER_SANITIZE_STRING,
			$emailNettoye => FILTER_VALIDATE_EMAIL,
			'objet' => FILTER_SANITIZE_STRING,
			'message' => FILTER_SANITIZE_STRING,
			'formatRep' => FILTER_SANITIZE_STRING
		);

		$resultat = filter_input_array(INPUT_POST, $options);				
		if ($resultat != null) { // null = si la valeur n'existe pas // Si le formulaire a bien été posté.
		// Enregistrer des messages d'erreur perso.
			$messageErreur = array(
				'nom' => 'Veuillez entrer votre Nom',
				'prenom' => 'Veuillez entrer votre Prenom',
				$emailNettoye => 'L\'adresse de messagerie n\'est pas valide',
				'objet' => 'Veuillez entrer votre objet',
				'message' => 'Veuillez entrer votre message',
				'formatRep' => 'Veuillez entrer votre format de réponse souhaité'	
			);

			$nbrErreurs = 0;

			foreach ($options as $cle => $valeur) { //Parcourir tous les champs voulus.
				if (empty($_POST[$cle])) { // Si le champ est vide.
					echo 'Veuillez remplir le champ ' . $cle . '.<br/>';
					$nbrErreurs++;
				}
				elseif ($resultat[$cle] === false) { //S'il n'est pas valide
					echo $messageErreur[$cle] . '<br/>';
					$nbrErreurs++;
				}
			}

			if ($nbrErreurs == 0) {
				echo 'Bonjour' . $resultat['prenom'] . ' !<br/>Tes données sont valides';
			}
		}
		else {
			echo 'Vous n\'avez rien posté.';
		}

		$maxwidth = 100000;
		$maxheight = 100000;
		$maxsize = 2000000;
		$extensions_valides = array('jpg', 'jpeg', 'gif', 'png');
		$extensions_upload = strtolower(substr(strrchr($_FILES['docs']['name'], '.'), 1));
		$images_sizes = getimagesize($_FILES['docs']['tmp_name']);
		if ($_FILES['docs']['error'] > 0) $erreur = "Erreur lors du transfert";
		if ($_FILES['docs']['size'] > $maxsize) $erreur = "Le fichier est trop gros";
		if (in_array($extensions_upload, $extensions_valides)) echo "Extension correcte";
		if ($images_sizes[0] > $maxwidth OR $images_sizes[1] > $maxheight) $erreur = "Image trop grande";
		$id_membre = md5(uniqid(rand(), true));
		$nomFichier = "fichier/1/{$id_membre}.{$extensions_upload}";
		$resultat1 = move_uploaded_file($_FILES["docs"]["tmp_name"], $nomFichier);
		if ($resultat1) echo "Transfert réussi";

				
		include 'mailL.php';
	}
?>	  			
