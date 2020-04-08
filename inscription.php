<?php 
// je teste si le mail n'est pas vide
if(!empty($_POST['email'])){
	// je teste si le mail est bien formé
	if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
		// je sais maintenant que le champ n'est pas vide, que la variable n'est pas vide et même qu'elle contient un email bien formé

		// je fais le lien avec ma bdd
		require_once ("includes/bdd.php");

		// je crée ma requete SQL
		$sql = "INSERT INTO `newsletter` (`id`, `email`) VALUES (NULL, :email) ";
		// je la prépare : je l'envoi au serveur en disant tient toi pret, il te manque des infos, mais elle arrive. Dès que tu as mon go, tu m'envois les résultats
		$stmt = $db->prepare($sql);
		// Justement je lui envoi les infos
		$stmt->bindValue(":email", $_POST['email']);
		// ET là c'est le go qu'il attendait pour me renvoyer les informations
		$stmt->execute();

		if($stmt->rowCount() == 1){
			// tout s'est bien passé
			header("Location: index.php?insertionOk");
		} else {
			// l'email existe déjà dans la table
			header("Location: index.php?erreur=emailExisteDeja");
		}
		exit;

	} else {
		header("Location: index.php?erreur=emailMalForme");
		exit;
	}
} else {
	header("Location: index.php?erreur=emailVide");
	exit;
}
