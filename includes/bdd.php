<?php 
// ce fichier va servir à regrouper tous ce qui est relié à la bdd

require_once("includes/config.php");
try{
	$db = new PDO("mysql:host=".$host.";dbname=".$dbname, $userBdd, $passBdd); // dsn, user, pass
	//LIMIT permet de limiter le nombre de résultats de la requête 
	// 0, 2 permet de dire "je veux 2 résultats à partir du premier résultat"
	// 10, 10 permet de dire "Je veux 10 résultats à partir du onzième"
	$emails = $db->query("SELECT * FROM newsletter LIMIT 0, 2");
	// si je veux uniquement un tableau associatif
	$emails->setFetchMode(PDO::FETCH_ASSOC);
	// si je veux uniquement un tableau indexé
	// $emails->setFetchMode(PDO::FETCH_NUM);
	// print_r($emails[0]);

	// ORDER BY permet de classer les résultats par selon un champ de table particulier soit de manière ASCendante, soit de manière DESCendante
	// Si le champ est numérique (ex un identifiant) alors ASC c'est du plus petit au plus grand et DESC c'est du plus grand au plus petit
	$emails2 = $db->query("SELECT * FROM newsletter ORDER BY id ASC");
	$listeEmails2 = $emails2->fetchAll(PDO::FETCH_NUM);
	// print_r($listeEmails2[0]);

	// Si le champ est alphabétique alors ASC c'est du a vers le Z et DESC c'est du Z vers le a
	$emails3 = $db->query("SELECT * FROM newsletter ORDER BY email DESC");

} catch (Exception $exception){
	$messageError = $exception->getMessage();
}