<?php 

try 
{
	//Connexion serveur
	$bdd = new PDO('mysql:host=localhost;dbname=netflux', 'wuhpw_mohaines', 'inesmo*68');
} 
catch (Exception $e) 
{
	// si il y a une erreur affiché un message
	die('Erreur : ' . $e->getMessage()); 
}

?>