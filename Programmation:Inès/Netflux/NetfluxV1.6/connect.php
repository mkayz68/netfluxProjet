
<?php 

// Fonction pour afficher les messages en utf8
$options = array(
	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
	); 

try 
{
	if($_SERVER['SERVER_NAME'] == "localhost") 
	{
		// Connexion Inès
		$bdd = new PDO('mysql:host=localhost;dbname=NetfluxProjet2', 'root', 'root', $options); 
	} 
} 
catch (Exception $e) 
{
	try 
	{
		if($_SERVER['SERVER_NAME'] == "localhost") 
		{
			// Connexion Mohamed
			$bdd = new PDO('mysql:host=localhost;dbname=NetfluxProjet2', 'root', 'root', $options); 
		}
	} 
	catch (Exception $e) 
	{
		// si il y a une erreur affiché un message
		die('Erreur : ' . $e->getMessage()); 

		/*try 
		{
			if($_SERVER['SERVER_NAME'] == "localhost") 
			{
				$bdd = new PDO('mysql:host=localhost;dbname=netflux', 'wuhpw_mohaines', 'inesmo68', $options); // Connexion sur le serveur
				var_dump('c');
			} 
		} 
		catch (Exception $e) 
		{
			// si il y a une erreur affiché un message
			die('Erreur : ' . $e->getMessage()); 
		} -------- Futur connexion pour l'hébergement sur le serveur --------*/ 
	}
}