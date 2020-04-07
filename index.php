<?php 
	require_once ("includes/bdd.php");
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Untitled</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
        
        <fieldset>
        	<legend>Tous les mails que j'ai stocké dans ma bdd</legend>
        	<?php 
        		// si la variable $messageError n'est pas vide 
        		if(!empty($messageError)) {
        			echo $messageError;
        		} else {
        			echo 'Résultat avec $emails<br>';
        			echo "<ul>\n";
        			foreach ($emails as $email) {
        				# code...
        				echo "<li>".$email['id']." - ".$email['email']."</li>";
        				//echo "<li>".$email[0]." - ".$email[1]."</li>";
        			}
        			echo "</ul>";
        			
        			echo "<hr>";

        			echo 'Résultat avec $emails2<br>';
        			echo "<ul>\n";
        			foreach ($listeEmails2 as $email) {
        				# code...
        				//echo "<li>".$email['id']." - ".$email['email']."</li>";
        				echo "<li>".$email[0]." - ".$email[1]."</li>";
        			}
        			echo "</ul>";

        			echo "<hr>";

        			echo 'Résultat avec $emails3<br>';
        			echo "<ul>\n";
        			while ($email = $emails3->fetch(PDO::FETCH_ASSOC)) {
        				# code...
        				echo "<li>".$email['id']." - ".$email['email']."</li>";
        				//echo "<li>".$email[0]." - ".$email[1]."</li>";
        			}
        			echo "</ul>";
        		}
        	?>
        </fieldset>
        <script src="js/main.js"></script>
    </body>
</html>