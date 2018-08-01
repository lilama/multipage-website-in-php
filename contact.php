<!DOCTYPE html>
<html lang="fr">
	<head>
		<?php include 'partiels/head.php' ?>
		<title>Contact</title>
	</head>
	<body>
		<!-- Header -->
		<?php include 'partiels/header.php' ?>
		<div class="parallax-container map-container">
			<div class="parallax">
				<img src="img/map.png" alt="Carte d'accès" id="map">
			</div>	
		</div>
		<main class="page-contact">
			<a id="googlemap" class="btn-floating btn-large waves-effect waves-light" href="https://maps.google.be/maps?q=Rue+Fransman+131,+1020+Bruxelles&hnear=Rue+Fransman+131,+Laeken+1020+Bruxelles&t=m&z=16" target="_blank"><i class="material-icons">near_me</i></a>
			<div class="address">
				<h2>Où nous trouver?</h2>
					<p>La Chôm'hier est disponible pour vous, n'hésitez pas à nous contacter via ce formulaire, par téléphone ou à passer par nos locaux situés à l'adresse ci-dessous.</p>
				<div class="row">
					<div class="col s12 m6">
						<p><b>Rue Fransman, 131<br>1020 Bruxelles<br>Tél : 02/241.32.30 <br> Fax : 02/245.19.31</b>
						</p>
					</div>
					<div class="col s12 m6">
						<p>À deux pas de la place Emile Bockstael :<br>STIB: Métro Ligne 6 (station Bockstael), trams 62 et 93, bus 49, 53, 88 et 89. <br>
						SNCB : gare Bockstael.<br>De Lijn : 230, 231, 232, 240, 241, 242, 243, 245, 250, 251, 260, 460 et 461.
						</p>
					</div>
				</div>	
			</div>
			<!-- Formulaire -->
			<h3>Formulaire</h3> 
			<div class="form">      
			<div class="row card-panel grey lighten-3 z-depth-3">
			    <form class="col s12" action="form-logs.php" method="post">
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