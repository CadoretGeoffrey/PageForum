<?php

//Traitement formulaire

	if (isset($_POST['nom']) AND isset($_POST['prenom']) AND isset($_POST['caseF']) or
		isset($_POST['caseH']))
	{
		echo '<strong>Je sais comment tu t\'appelles, tu t\'appelles : '.
			htmlspecialchars($_POST['prenom'])." ". htmlspecialchars($_POST['nom']);

		if(isset($_POST['caseF'])){

			echo ' tu es une femme';

		}else if(isset($_POST['caseH'])){

			echo ' tu es un homme';
		}
	}else{// Il manque des paramètres, on averti le visiteur

		echo 'Il faut renseigner un nom et un prénom !';
	}

	echo '<br/>';
	print_r($_POST);
	echo '<br/>';

	//unset($_POST);
	unset($_POST['nom']);
	unset($_POST['prenom']);
	unset($_POST['caseF']);
	unset($_POST['caseH']);

	print_r($_POST);

?>