<?php

// Reception des variables 
$nom 			= isset($_POST['nom']) ? $_POST['nom'] : NULL ;
$expediteur 	= isset($_POST['expediteur']) ? $_POST['expediteur'] : NULL ;
$objet 			= isset($_POST['objet']) ? $_POST['objet'] : "Sans Objet" ;
$message 		= isset($_POST['message']) ? $_POST['message'] : NULL ;
$to				= 'crochot.nolan@gmail.com';

// traitement 
if ($nom, $objet, $expediteur, $message){
	$nom = addslashes($nom);
	$objet = addslashes($objet);
	$message = addslashes($message);
	$message.="<br /><br />De $nom"." - Email : $expediteur";
	mail($to, $objet, $message);
}
else {
	$email_error = "Merci de remplir tout les champs.";
}

?>