<?php 

try{
	# première étape : je me connecte au serveur
	$pdo = new PDO("mysql:host=localhost;dbname=jeuxvideo", "root");
	//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	

	// je premare ma requête
	$stmt = $pdo->prepare("INSERT INTO `Jeux` (`Jeux_Id`, `Jeux_Titre`, `Jeux_Description`, `Jeux_Prix`, `Jeux_DateSortie`, `Jeux_PaysOrigine`, `Jeux_Connexion`, `Jeux_Mode`, `Genre_Id`) VALUES (NULL, :Jeux_Titre, :Jeux_Description, :Jeux_Prix, :Jeux_DateSortie, NULL, NULL, NULL, NULL);");

	// je lui donne les paramètres dont elle a besoin sans en oublier
	$stmt->bindValue(":Jeux_Titre", $_POST['Jeux_Titre']);
	$stmt->bindValue(":Jeux_Prix", $_POST['Jeux_Prix']);
	$stmt->bindValue(":Jeux_Description", $_POST['Jeux_Description']);
	$stmt->bindValue(":Jeux_DateSortie", $_POST['Jeux_DateSortie']);

	// Je l'execute et en fonction du retour du serveur j'affiche le message correspondant
	if($stmt->execute()){
		echo "insertion réussie !";
	} else {
		echo "insertion foirée !";
	}


	//var_dump($pdostat);
} catch (PDOException $exception){
	// s'il y a une erreur je l'affiche
	echo $exception->getMessage();
}