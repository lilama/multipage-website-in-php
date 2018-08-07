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
		if (isset($_POST['password']) && !empty($_POST['password'])) {
			$password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
			if ($password != false && $password = 'MickeyG0628') {
				echo "authentification faite";
				$mail->Password = $password;
				unset($password);
			} else {
				echo "Erreur Password";
			}
		}

		?>
	</body>
</html>