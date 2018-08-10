<?php
	//Username to use for SMTP authentication — use full email address for gmail
	$mail->Username = "challengesbecode@gmail.com";

	//Password to use for SMTP authentication
	$password = "lilcharchom55";
	$mail->Password = $password;
	unset($password);
 	//The unset line of code is putting the $password variable back to null which means it exists only long enough to be passed to the mail object and no longer.	
?>