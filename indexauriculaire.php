<?php
	include("Carre.php")
	
	//commentaires ligne
	/* com para
	sdqsd
	sdqsdqs
	*/

	/*
	$mon_entier=10;
	$mon_r=10.2;
	$mon_car='a';
	$moncar='a';
	$moncar='b';
	$somme=10+2;
	$multi=(10+2)*2;
	$multi=$somme*2;
	$modulo=10 % 3;
	$somme=$somme+1;

	//echo pour afficher quelque chose
	//on peut utiliser la simple et la double quote
	echo"<center><h1>hello world</h1></center>";
	echo " la val de mon entier :".$mon_entier;
	//balise br pour sauter une ligne
	echo"<br/>";
	echo "la val de mon reel :".$mon_r;
	echo"<br/>";
	echo "la val de ma somme est :".$somme;
	echo"<br/>";
	echo "mon caractère est :".$mon_car;

	//structure condition

	$a=5;
	$b=20;

	/*
		== ->égalité
		!= ->diff
		<
		>
		<=
		>=
		===
	*/

	// ou logique or, ||
	// et logique and, &&

	/*

	if($a==5 || $b==10){

		echo "true";

	}else{

		echo "false";

	}

	//structure condition switch
			echo "<br/>";

			$choix=0;



				switch($choix){

					case 0: echo "choix 0 <br/>";break;
					case 1: echo "choix 1 <br/>";break;
					default : echo "cas pas defaut<br/>";break;				
				
				}


	//operateur ternaire
	// : pour dire "ou"

	$val=($choix==0)  ? true : false;
	echo "val de retour :".$val;
	echo"<br/>";

	//boucle for

	for($i=0;$i<10;$i++){//i++ -> i=i+1
		//i++
		//i=i+1
		//i+=1
		//++i
		echo "hello darkness my old friend".$i;
		echo"<br/>";
	}

	echo "Exo 1 :<br/>";
	$prixHT=100;
	$TVA1=5.5;
	$TVA2=10;
	$TVA3=20;

	$ResTTC=$prixHT+($prixHT*$TVA1)/100;
	echo"<table border=1><tr><td>".$ResTTC."</td></tr></table>";
	$ResTTC=$prixHT+($prixHT*$TVA2)/100;
	echo"<table border=1><tr><td>".$ResTTC."</td></tr></table>";
	$ResTTC=$prixHT+($prixHT*$TVA3)/100;
	echo"<table border=1><tr><td>".$ResTTC."</td></tr></table>";

	//faire Tq
	echo "<h1>Boucle faire tq</h1>";
	$i=0;
	do{

		echo "hello world".$i;
		echo "<br/>";
		$i++;

	}while($i<10);

	//Tant que
	echo "<h1>Boucle Tant que</h1>";
	$i=0;
	while($i<10){

		echo "hello world".$i;
		echo "<br/>";
		$i++;
	}

	//Les fonctions et procédures

	$val1=100;
	$val2=30;

	//$somme=somme(100,30);
	//echo "le res de la somme :".$somme;
	som(100,30);

	//Fonction qui retourne une somme
	function somme ($val1,$val2){

		$res=$val1+$val2;
		return $res;
	}

	//Fonction qui affiche le res d'une somme

	function som($val1,$val2){

		echo "La somme de $val1 et $val2 est : ".($val1+$val2);
	}	

	//fonction sur chaine
	//fonction qui retourne la longueur d'une chaine

	function lgChaine($chaine){

			return strlen($chaine);
	}

	function lChaine($chaine){

		echo "lg chaine : $chaine est : ".strlen($chaine)."<br/>";
	}
 */


/*int main()
{
    //Declaration des variables
    int longueur=0;
    int largeur=0;
    int i=0;
    int j=0;

    //afficher des caractères et lire les variables
    printf("Entrez la largeur du carre\n");
    scanf("%d",&largeur),
    printf("Entrez la longueur du carre\n");
    scanf("%d",&longueur);

    //Gère les caractères sur la longueur et la largeur
    for (i=0 ; i<longueur ; i++){
        for (j=0 ; j<largeur ; j++){

            if (i==0 || i==longueur -1){
                printf("*");
            } else if (j==0 || j==largeur -1){
                printf("*");
            } else if (j!=0 || j!=largeur -1){
                printf("+");
            }

        }   printf("\n");



    }
    return 0;
} */
/*
$longueur=0;
$largeur=0;
$i=0;
$j=0;

//Affiche la largeur et la longueur du carré
echo"La longeur du carré est :".$longueur;
echo"La largeur du carré est :".$largeur;


	for($i=0 ; $i<$longueur ; $i++){
		for($j=0 ; $j<$largeur ; $j++){

			if($i==0 || $i==$longueur -1){
				echo"*";
			} else if ($j==0 || $j==$largeur -1){
				echo"*";
			} else if ($j!=0 || $j!=$largeur -1){
				echo"+";
			}

		}	echo"<br/>";

	}
*/


?>
	