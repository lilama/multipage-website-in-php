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
	<h3>L'équipe</h3>
		<ul class="browser-default">
			<li><b>Directeur général</b>: Mathieu Danero</li>
			<li><b>Accompagnement social des stagiaires ou participants</b>: Ida Dal</li>
			<li><b>Comptabilité</b>: Alessandro Progno</li>
			<li><b>Accueil</b>: Fatima Oukhelle, Pedro Herrera</li>
			<li><b>Responsable K-fête</b>: Philippe Beaunom (cuisine)</li>
			<li><b>Formateurs en Insertion Socioprofessionnelle</b>: Béatrice Hiroux, Sophie Portois, Bénédicte Berhin,	Michelle Pétry, Kémo Keïta, Dominique Mainjot, Dominique Debroux, Mathieu Duquenne, Renaud Staner</li>
			<li><b>Formateurs en Éducation permanente</b>: Sylvie Wauthier (détachée par Lire et Écrire), Patrick Vandersteegen</li>
			<li><b>Secteur jeunesse et enfance</b>: Géraldine Grandjean</li>
			<li><b>Logistique</b>: Samir Boulaichi</li>
		</ul>
	<!-- Formulaire -->
	<h3>Formulaire</h3> 
	<div class="form">      
	<div class="row card-panel grey lighten-3 z-depth-3">
	    <form enctype="multipart/form-data" class="col s12" action="form-processor.php" method="post">
	    	<!-- Titre -->
	    	<div class="row">
	    		<label class="radio_button">
	    			<input id="choice_1" name="title" value="Mme" type="radio" checked/>   
					<span for="choice_1">Mme</span>
				</label>
				<label class="radio_button">
	    			<input id="choice_2" name="title" value="Melle" type="radio" checked/>   
					<span for="choice_2">Melle</span>
				</label>
				<label class="radio_button">
	    			<input id="choice_3" name="title" value="Mr" type="radio" checked/>   
					<span for="choice_3">Mr</span>
				</label>
	    	</div>
	    	<!-- Noms -->
	    	<div class="row">
	    		<div class="input-field col s6">
	    			<input name="firstname" value="" type="text" class="validate" required>
	          		<label for="firstname">Prénom</label>
	        	</div>
	        	<div class="input-field col s6">
	        		<input name="lastname" value="" type="text" class="validate" required>
	        		<label for="lastname">Nom</label>
	        	</div>
	      	</div>
	      	<!-- Email -->
	      	<div class="row">
	      		<div class="input-field col s12">
	      			<input name="email" type="email" value="" class="validate" required>
	      			<label for="email">Email</label>
	        	</div>
	      	</div>
	      	<!-- Objet -->
	      	<div class="row">
		      	<div class="input-field col s12">
		      		<label>Objet</label><br><br>
				    <select class="browser-default" name="subject" id="subject" required>
					      <option value="" disabled selected>Choose your option</option>
					      <option value="info">Demande d'infos</option>
					      <option value="formations">S'inscrire aux formations</option>
					      <option value="postuler">Postuler chez nous</option>
					      <option value="autre">Autre</option>
				    </select>
				</div>
			</div>
			<!-- Texte -->
	      	<div class="row">
	      		<div class="input-field col s12">
	      			<textarea name="message" class="materialize-textarea" id="message" required="required"></textarea>
  					<label for="textarea">Texte</label>
	        	</div>
	     	</div>
	     	<!-- Upload file -->
	     	<div class="row">
	     		<div class="file-field input-field">
	     			<div class="btn btn-file">
			        	<span>Doc</span>
			        	<input type="file" size="32" name="image_field" value="upload" id="upload">
			      	</div>
			      	<div class="file-path-wrapper">
			        	<input class="file-path validate" type="text">
			      	</div>
			    </div>
	     	</div>
	     	<!-- HTML - TEXTE -->
	     	<div class="row">
	    		<label class="radio_button">
	    			<input id="choice_H" name="format" value="HTML" type="radio" checked/>   
					<span for="choice_H">HTML</span>
				</label>
				<label class="radio_button">
	    			<input id="choice_T" name="format" value="Texte" type="radio" checked/>   
					<span for="choice_T">Texte</span>
				</label>
	    	</div>
	    	<label>
	    		<input class="filled-in" type="checkbox" id="filled-in-box" name="CGU" checked/>
      			<span for="filled-in-box">J'ai lu les conditions d'utilisation</span>
      		</label>
	    	<div>
	    		<button class="btn waves-effect waves-light btn-submit right" type="submit" name="submit" value="Envoi">Envoi
	    	  	<i class="material-icons right">send</i>
	    	  	</button>
	    	</div>
	    </form>
	</div>
	</div>	
</main>

<script type="text/javascript" src="js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

<?php include 'partiels/footer.php' ?>
