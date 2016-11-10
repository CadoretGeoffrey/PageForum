<?php

//tableaux numérotés

//La fonction array permet de créer un tableaux

$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Jean-Michel');

$prenoms[0] = 'François';
$prenoms[1] = 'Michel';
$prenoms[2] = 'Nicole';

$prenoms[] = 'François'; //créera $prenoms[0]
$prenoms[] = 'Michel'; //créera $prenoms[1]
$prenoms[] = 'Nicole'; //créera $prenoms[2]

echo 'Affichage Res 1';
echo '<br/>';
echo $prenoms[2];
echo '<br/>';
echo $prenoms[5];
echo '<br/>';
echo $prenoms[6];
echo '<br/>';

//tableau associatif

$coordonnees = array (// () peuvent être remplacées par []
'prenom' => 'françois',
'nom' => 'Dupont',
'adresse' => '3 rue du Paradis', 
'ville' => 'Marseille');

$coordonnees['prenom'] = 'jean';
$coordonnees['nom'] = 'Dupont';
$coordonnees['adresse'] = '3 rue du Paradis';
$coordonnees['ville'] = 'Marseille';

echo $coordonnees['ville'];
echo '<br/>';
echo $coordonnees['prenom'];
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';

//affichage structuré tableau

var_dump($coordonnees);

echo '<br/>';
echo '<br/>';

//affichage tableau pour debug
print_r($coordonnees);

echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';

//naviguer dans un tableau
//boucle for tableaux numérotés

for ($i = 0; $i < 5; $i++){
	echo $prenoms[$i].'<br/>'; //affichera François, Michel...
}

echo '<br/>';
echo '<br/>';
echo '<br/>';

//boucle foreach tableau numérotés

foreach($prenoms as $element){
	echo $element.'<br/>'; //affichera François, Michel...
}

echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';

//tableau associatif clé/val affichage uniquement de la val

foreach($coordonnees as $element){
	echo $element.'<br/>'; 
}

echo '<br/>';
echo '<br/>';
echo '<br/>';

//tableau associatif clé/val affichage clé/val

foreach($coordonnees as $cle => $element){
	echo'['.$cle.'] vaut '.$element.'<br/>'; //affichage [prenom] vaut François...
}

echo '<br/>';
echo '<br/>';
echo '<br/>';

//rechercher dans un tableau
/*array_key_exists: pour vérifier si un clé existe dans l'array
in_array: pour vérifier si une valeur existe dans l'array
array_search: pour récupérer la clé d'une valeur dans l'array*/

if (array_key_exists('nom',$coordonnees)){
	echo 'la clé se trouve dans les coordonnées!';
}else{
	echo 'la clé ne se trouve pas dans les coordonnées.';
}

echo '<br/>';
echo '<br/>';
echo '<br/>';

//recherche dans tableau

if (in_array('François',$prenoms)){
	echo 'La valeur "François" se trouve dans le tableau prénoms!';
}

echo '<br/>';
echo '<br/>';
echo '<br/>';

$key = array_search('Marseille',$coordonnees);

echo 'clé: '.$key;

echo '<br/>';
echo '<br/>';
echo '<br/>';
echo '<br/>';

//maintenant on efface tout les éléments, mais on conserve le tableau:
foreach ($coordonnees as $cle => $element){
	unset($coordonnees[$cle]);
}

print_r($coordonnees);//affichage tableau vide

echo '<br/>';
echo '<br/>';
echo '<br/>';

$coordonnees['prenom']='Raskam';

echo '<br/>';
echo '<br/>';
echo '<br/>';

echo $coordonnees['prenom'];

?>