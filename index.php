<?php
// si la variable page existe dans l'url, la variable $page = 'home'
if (!isset($_GET['page'])){
	$page = 'home';
} else { // sinon $page est égal à la valeur de la variable page qui provient de l'url
	$page = $_GET['page'];
}

// Quand $page vaut:
switch($page) {
	case 'home':
		include 'home.php';
		break;
	case 'formations':
		include 'formations.php';
		break;
	case 'activites':
		include 'activites.php';
		break;
	case 'contact':
		include 'contact.php';
		break;
	default:
		include "404.php";
		break;
}
?>