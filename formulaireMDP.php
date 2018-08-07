<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Mot de passe pour authentification</title>
	</head>
	<body>
		<form method="post" action="formulaireMDP.php">
			<label>Mot de passe pour authentification</label>
			<input type="password" name="password" id="password" required />
			<input type="submit" value="Validez" />
		</form>

		<?php 
		if (isset($_POST['"yourpassword"']) && !empty($_POST['"yourpassword"'])) {
			"yourpassword" = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
			if ("yourpassword" != false && $password = '') {
				echo "authentification faite";
				$mail->Password = "yourpassword";
				unset("yourpassword");
			} else {
				echo "Erreur Password";
			}
		}

		?>
	</body>
</html>
