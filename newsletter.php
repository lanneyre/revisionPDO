<?php 
	if(!empty($_POST['email'])){
		try{
			# première étape : je me connecte au serveur
			$pdo = new PDO("mysql:host=localhost;dbname=newsletter", "root");
			//$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);	

			$pdo->query("INSERT INTO `newsletter` (`id`, `email`) VALUES (NULL, '".$_POST['email']."') ;");
			//var_dump($pdostat);
		} catch (PDOException $exception){
			// s'il y a une erreur je l'affiche
			echo $exception->getMessage();
		}
	}
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
    </head>
    <body>
        <form action="newsletter.php" method="POST">
        	<?php 
				if(!empty($_POST['email'])){
					echo $_POST['email']."<br>";
				}
			?>
        	<input type="email" name="email" placeholder="Votre email"><label for="email">Votre email</label>
        	<br>
        	<input type="submit" name="Submit" value="Envoyer">
        </form>
    </body>
</html>