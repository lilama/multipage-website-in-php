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
	    <form enctype="multipart/form-data" class="col s12" action="traitementDonnees.php" method="post">   	
	    	<!-- Titre -->
	    	<div class="row">
	    		<label class="radio_button">
	    			<input id="mme" name="genre" value="Mme" type="radio" checked autofocus/>   
					<span for="mme">Mme</span>
				</label>
				<label class="radio_button">
	    			<input id="melle" name="genre" value="Melle" type="radio" />   
					<span for="melle">Melle</span>
				</label>
				<label class="radio_button">
	    			<input id="mr" name="genre" value="Mr" type="radio" />   
					<span for="mr">Mr</span>
				</label>
	    	</div>

			<!-- Noms -->
	    	<div class="row">
	    		<div class="input-field col s6">
	    			<input type="text" name="nom" id="nom" placeholder="Votre nom" required pattern="^[a-zA-Zéèçàëüêôù'\s_\.-]{1,30}$" title="Le nom ne semble pas être valide" class="validate"/> 
	          		<label for="nom">Nom</label>
	        	</div>
	        	<div class="input-field col s6">
	        		<input type="text" name="prenom" id="prenom" placeholder="Votre prénom" required pattern="^[a-zA-Zéèçàëüêôù'\s_\.-]{1,30}$" title="Le prénom ne semble pas être valide" class="validate"/>
	        		<label for="prenom">Prenom</label>
	        	</div>
	      	</div>

			<!-- Email -->
	      	<div class="row">
	      		<div class="input-field col s12">
	      			<input type="email" name="email" id="email" placeholder="Votre email" required class="validate"/>
	      			<label for="email">Email</label>
	        	</div>
	      	</div>

			<!-- Objet -->
	      		<div class="row">
		      	<div class="input-field col s12">
		      		<label for="objet">Objet</label><br><br>
				    <select class="browser-default" name="objet" id="objet" required>
					      <option value="" disabled selected>Choisissez votre option</option>
					      <option value="informations">Demande d'informations</option>
					      <option value="formations">S'inscrire aux formations</option>
					      <option value="postuler">Postuler chez nous</option>
					      <option value="autre">Autre</option>
				    </select>
				</div>
			</div>

			<!-- Texte -->
	      	<div class="row">
	      		<div class="input-field col s12">
	      			<textarea name="message" id="message" class="materialize-textarea"  placeholder="Votre message (max. 300 caractères)" cols="40" rows="4" minlength="2" maxlength="300" wrap="hard" required></textarea>
  					<label for="message">Votre message</label>
	        	</div>
	     	</div>

			<!-- Upload file -->
	     	<div class="row">
	     		<div class="file-field input-field">
	     			<div class="btn btn-file">
			        	<span>Documents</span>
						<input type="text" name="titreFic" placeholder="Titre du fichier (max. 50 caractères)" id="titre" maxlength="50"/>
									<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />

			        	<input type="file"  size="32" id="docs" name="docs" accept=".jpg, .jpeg, .png, .gif"/>

			      	</div>
			      	<div class="file-path-wrapper">
			        	<input class="file-path validate" type="text">
			      	</div>
			    </div>
	     	</div>

			<!-- HTML - TEXTE -->
	     	<div class="row">
	    		<label class="radio_button" for="html">
	    			<input id="html" value="HTML" type="radio" id="html" name="formatRep" checked/>    
					<span for="html">HTML</span>
				</label>
				<label class="radio_button" for="texte">>
	    			<input id="texte" type="radio" id="texte" name="formatRep" value="texte"/>
					<span for="texte">Texte</span>
				</label>
	    	</div>


			<label>
	    		<input class="filled-in" type="checkbox" id="filled-in-box" name="CGU"/>
      			<span for="filled-in-box">J'ai lu les conditions d'utilisation</span>
      		</label>


      		<div>
	    		<button class="btn waves-effect waves-light btn-submit right" type="submit" name="submit" value="Envoi">Contactez-moi
	    	  	<i class="material-icons right">send</i>
	    	  	</button>
	    	</div>
	    </form>

				</div>		
			</div>		
</main>

<script type="text/javascript" src="js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>

<?php include 'partiels/footer.php' ?>