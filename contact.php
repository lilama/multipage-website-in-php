<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php include 'partiels/head.php' ?>
		<title>Contact</title>
	</head>
	<body>
		<!-- Header -->
		<?php include 'partiels/header.php' ?>
		<main class=page-contact>
			<p>La Chôm'hier est disponible pour vous, n'hésitez pas à nous contacter via ce formulaire, ou à passer par nos locaux</p>
			<div class="row">
				<div class="card col s6">
					<p>La Chôm'Hier AID - rue Fransman, 131 - 1020 Bruxelles - Tél : 02/241.32.30 - Fax : 02/245.19.31</p>
				</div>
				<div class="col s6"></div>
			</div>
			<!-- Formulaire -->
			<h2>Formulaire</h2>       
			<div class="row card grey lighten-3 z-depth-3">
			    <form class="col s12">
			    	<!-- Titre -->
			    	<div class="row">
			    		<label class="radio_button">
			    			<input id="choice_1" name="group1" type="radio" checked/>   
							<span for="choice_1">Mme</span>
    					</label>
    					<label class="radio_button">
			    			<input id="choice_2" name="group1" type="radio" checked/>   
							<span for="choice_2">Melle</span>
    					</label>
    					<label class="radio_button">
			    			<input id="choice_3" name="group1" type="radio" checked/>   
							<span for="choice_3">Mr</span>
    					</label>
			    	</div>
			    	<!-- Noms -->
			    	<div class="row">
			    		<div class="input-field col s6">
			    			<input id="first_name" type="text" class="validate">
			          		<label for="first_name">Prénom</label>
			        	</div>
			        	<div class="input-field col s6">
			        		<input id="last_name" type="text" class="validate">
			        		<label for="last_name">Nom</label>
			        	</div>
			      	</div>
			      	<!-- Email -->
			      	<div class="row">
			      		<div class="input-field col s12">
			      			<input id="email" type="email" class="validate">
			      			<label for="email">Email</label>
			        	</div>
			      	</div>
			      	<!-- Objet -->
			      	<div class="row">
				      	<div class="input-field col s12">
				      		<label>Objet</label><br><br>
						    <select class="browser-default">
							      <option value="" disabled selected>Choose your option</option>
							      <option value="1">Demande d'infos</option>
							      <option value="2">S'inscrire aux formations</option>
							      <option value="3">Postuler chez nous</option>
							      <option value="3">Autre</option>
						    </select>
	  					</div>
  					</div>
  					<!-- Texte -->
			      	<div class="row">
			      		<div class="input-field col s12">
			      			<textarea id="textarea1" class="materialize-textarea"></textarea>
          					<label for="textarea1">Texte</label>
			        	</div>
			     	</div>
			     	<!-- Upload file -->
			     	<div class="row">
			     		<div class="file-field input-field">
			     			<div class="btn btn-file">
					        	<span>Doc</span>
					        	<input type="file">
					      	</div>
					      	<div class="file-path-wrapper">
					        	<input class="file-path validate" type="text">
					      	</div>
					    </div>
			     	</div>
			     	<!-- HTML - TEXTE -->
			     	<div class="row">
			    		<label class="radio_button">
			    			<input id="choice_H" name="group1" type="radio" checked/>   
							<span for="choice_H">HTML</span>
    					</label>
    					<label class="radio_button">
			    			<input id="choice_T" name="group1" type="radio" checked/>   
							<span for="choice_T">Texte</span>
    					</label>
			    	</div>
			    	<div>
			    		<button class="btn waves-effect waves-light btn-submit" type="submit" name="action">Envoi
			    	  	<i class="material-icons right">send</i>
			    	  	</button>
			    	</div>
			    </form>
			</div>
			
		</main>
		<!-- Footer -->
		<?php include 'partiels/footer.php' ?>
		<!-- Compiled and minified JavaScript -->
		<script type="text/javascript" src="js/script.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
	</body>
</html>