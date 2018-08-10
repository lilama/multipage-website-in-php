<?php include 'partiels/header.php' ?>

		<main>
			<div class="carousel">
			    <a class="carousel-item" href="#one!"><img src="img/educperma.jpeg"></a>
			    <a class="carousel-item" href="#two!"><img src="img/insertionsociopro.jpeg"></a>
			    <a class="carousel-item" href="#three!"><img src="img/educperma.jpeg"></a>
			    <a class="carousel-item" href="#four!"><img src="img/insertionsociopro.jpeg"></a>
			    <a class="carousel-item" href="#five!"><img src="img/educperma.jpeg"></a>
  			</div>



  			<div class="description educ">
  				<h1 class="h1educ">Contact</h1>
				<div class="card-panel">
					<h2 class="h2educ">Formulaire de contact</h2>

					<div class = "row">
	        			<!-- action = fichier pour traiter les données -->
						<form  class = "col s12" enctype="multipart/form-data" method="post" action="traitementDonnees.php">					
			  				<div class="card-panel orange lighten-4">
								<div class = "row">
	        	       				<div class = "input-field col s12">
	            	   					<p>
	               							titre
	               							<label class="radio_button" for="mme">
												<input class="with-gap" id="mme" type="radio" name="genre" value="Mme" checked autofocus/>
												<span>Mme</span>
											</label>
											<label class="radio_button" for="melle">
												<input class="with-gap" id="melle" type="radio" name="genre" value="Melle"/>
												<span>Melle</span>
											</label>
											<label class="radio_button" for="mr">
												<input class="with-gap" id="mr" type="radio" name="genre" value="Mr"/>
												<span>Mr.</span>
											</label>
										</p>
									</div>
								</div>

								<label class="formulaire" for="nom">nom </label>
								<!-- Regex pour contrôler le nom -->
								<input type="text" name="nom" id="nom" placeholder="Votre nom" required pattern="^[a-zA-Zéèçàëüêôù'\s_\.-]{1,30}$" title="Le nom ne semble pas être valide"/>
								<!-- Regex pour contrôler le prénom -->
						   		<label class="formulaire" for="prenom">prénom </label>
						   		<input type="text" name="prenom" id="prenom" placeholder="Votre prénom" required pattern="^[a-zA-Zéèçàëüêôù'\s_\.-]{1,30}$" title="Le prénom ne semble pas être valide"/>
						   		<label class="formulaire" for="email">e-mail </label>
						   		<input type="email" name="email" id="email" placeholder="Votre email" required/>
						       	<p>
						   			<label class="formulaire" for="objet">objet</label>
						   			<select class = "browser-default" name="objet" id="objet">
						   				<option value="informations" selected>Demande d'informations</option>
						   				<option value="inscriptions">Demande d'inscriptions</option>
						   				<option value="annulation">Demande d'annulation</option>
						   			</select>
						   		</p>
								<p>
					        	   	<label class="formulaire" for="message">Votre message </label>
					       			<textarea name="message" id="message" placeholder="Votre message (max. 300 caractères)" cols="40" rows="4" minlength="2" maxlength="300" wrap="hard" required></textarea>
						    	</p>
								<p>
									<label class="formulaire" for="docs">documents</label><br/>
									<input type="text" name="titreFic" placeholder="Titre du fichier (max. 50 caractères)" id="titre" maxlength="50"/>
									<input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
									<input type="file" id="docs" name="docs" accept=".jpg, .jpeg, .png, .gif"/>
								</p>

								<p>
									format de réponse souhaité
				            		<label class="radio_button" for="html">
										<input class="with-gap" id="html" type="radio" name="formatRep" value="html" checked/>
										<span>HTML</span>
									</label>
									<label class="radio_button" for="texte">
										<input class="with-gap" id="texte" type="radio" name="formatRep" value="texte"/>
										<span>Texte</span>
									</label>
								</p>								
								<p>
									<button type="submit" class="registerbtn">Contactez-moi</button>
								</p>						   
					   		</div>				   		
						</form>
					</div>	
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