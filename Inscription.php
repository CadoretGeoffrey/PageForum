<!doctype html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Traitement formulaire</title>
	<link rel="stylesheet" href="style.css">
	<script src="script.js"></script>
</head>

<body>
<form action="cible.php" method="POST">
<p>
	<label for="nom">Nom : </label><input type="text" name="nom" />
	<br/>
	<br/>
	<label for="prenom">Prénom : </label><input type="text" name="prenom" />
	<br/>
	<br/>
	<input type="checkbox" name="caseF" id="case" /> <label for="case">Femme</label>
	<br/>
	<br/>
	<input type="checkbox" name="caseH" id="case" /> <label for="case">Homme</label>
	<br/>
	<br/>
	<input type="submit" value="Confirmer" />
</p>
</form>
</body>
</html>



