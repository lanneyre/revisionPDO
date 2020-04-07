<?php 
// ce fichier va servir à regrouper tous ce qui est relié à la bdd

require_once("includes/config.php");
try{
	$db = new PDO("mysql:host=".$host.";dbname=".$dbname, $userBdd, $passBdd); // dsn, user, pass

	$emails = $db->query("SELECT * FROM newsletter");
} catch (Exception $exception){
	$messageError = $exception->getMessage();
}