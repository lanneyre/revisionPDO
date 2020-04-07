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
        			echo "Pour l'instant il n'y en a qu'un !";
        		}
        	?>
        </fieldset>
        <script src="js/main.js"></script>
    </body>
</html>