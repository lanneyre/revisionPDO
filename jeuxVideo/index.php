<form name="AddJeuVideo" method="POST" action="traitements.php">
  <div class="modal-header">
    <h4 class="modal-title" id="exampleModalLabel">Ajouter un jeu</h4>
  </div>
  <div class="modal-body">
  	
  		<label for="Jeux_Titre">Titre</label><br>
  		<input type="text" name="Jeux_Titre" id="Jeux_Titre" placeholder="Titre" class="form-control"><br>
  		<label for="Jeux_Description">Description</label><br>
  		<textarea name="Jeux_Description" id="Jeux_Description" class="form-control" placeholder="Description"></textarea><br>
  		<label for="Jeux_Prix">Prix</label><br>
  		<input type="text" name="Jeux_Prix" id="Jeux_Prix" placeholder="Prix" class="form-control"><br>
  		<label for="Jeux_DateSortie">Date de sortie</label><br>
  		<input type="date" name="Jeux_DateSortie" id="Jeux_DateSortie" placeholder="date de sortie" class="form-control"><br>
  		
  		<input type="submit" value="Envoyer">
  </div>
</form>
<pre><?php 

try{
	# première étape : je me connecte au serveur
	$pdo = new PDO("mysql:host=localhost;dbname=jeuxvideo", "root");
	//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	

	//$pdo->query("INSERT INTO `Jeux` (`Jeux_Id`, `Jeux_Titre`, `Jeux_Description`, `Jeux_Prix`, `Jeux_DateSortie`, `Jeux_PaysOrigine`, `Jeux_Connexion`, `Jeux_Mode`, `Genre_Id`) VALUES (NULL, 'Jeux test;', 'jfhcshflb', '54664', '2020-04-01', 'Wakanda', 'Ou pas', 'si je veux', '5');");

	# seconde étape : j'envoie mes requètes
	$pdostat = $pdo->query("SELECT * FROM jeux");
	$pdostat->setFetchMode(PDO::FETCH_ASSOC);
	#troisième étape : je parcours se que me renvoi le serveur 
	foreach($pdostat as $ligne){
		echo $ligne["Jeux_Titre"];
		echo " - ";
		echo $ligne["Jeux_Prix"]."€"; 
		echo "<br>\n";
	}


	//var_dump($pdostat);
} catch (PDOException $exception){
	// s'il y a une erreur je l'affiche
	echo $exception->getMessage();
}
?></pre>