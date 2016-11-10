<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Traitement formulaire</title>
	<link rel="stylesheet" href="style.css">
	<script src="script.js"></script>
</head>

<body>

//Partie html permettant d'afficher les zones de textes et leurs propriétés

<form action="forum.php" method="POST">
<p>
	<label for="Pseudo">Pseudo : </label><input type="text" name="Pseudo" />
	<br/>
	<br/>
	<label for="Titre">Titre : </label><input type="text" name="Titre" />
	<br/>
	<br/>
	<textarea name="Message" type="text" value="" size="50" maxlenght="200" /></textarea>
	<br/>
	<br/>
	<textarea name="Publication" type="text" value="" size="20" maxlength="20" readonly="false" /></textarea>
	<br/>
	<br/>

	<input type="submit" value="Publier" />

</p>
</form>
</body>
</html>

<?php
	
	// Permet d'afficher le message donné 

	if (isset($_POST['Pseudo']) AND isset($_POST['Titre']) AND isset($_POST['Message']) or
		isset($_POST['Publier']))
	{
		echo '<strong>Derniere publication : </br></br> '.
			htmlspecialchars($_POST['Pseudo </br>']) AND htmlspecialchars($_POST['Titre </br>']) 
			and htmlspecialchars($_POST['Message </br>']) ;
	}
?>
	
