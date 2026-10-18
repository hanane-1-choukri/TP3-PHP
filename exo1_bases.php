<?php 
echo 'Hello PHP'; 
//commentaire
#commentaire
/*commentaire---
---*/

?>
<?php

// $x : valide, commence par une lettre après le symbole $.
$x = 10;

// $_x : valide, le caractère underscore est autorisé.
$_x = 20;

// $2x : invalide, le nom commence par un chiffre.
// $2x = 30;

// $x-y : invalide, le tiret n'est pas autorisé dans un nom de variable.
// $x-y = 40;

// $Prix_HT : valide, les lettres et le underscore sont autorisés.
$Prix_HT = 50;

// $prix ht : invalide, un espace est interdit dans le nom.
// $prix ht = 60;

// $état : valide en PHP 7 et versions ultérieures, car les lettres
// non ASCII peuvent être utilisées dans les noms de variables.
$état = "ouvert";

// Démonstration : $a et $A sont deux variables distinctes.
$a = 100;
$A = 200;

echo "Valeur de a : " . $a . "<br>";
echo "Valeur de A : " . $A . "<br>";

?>
<?php

require 'config.php';

// Affichage des constantes
echo "Établissement : " . ETABLISSEMENT . "<br>";
echo "Note minimale : " . NOTE_MIN . "<br>";
echo "Note maximale : " . NOTE_MAX . "<br>";
echo "Seuil : " . SEUIL . "<br>";

// Vérification de l'existence des constantes
var_dump(defined('SEUIL'));
echo "<br>";

var_dump(defined('INCONNUE'));
echo "<br>";

// Réponses aux questions :

// 1. L'affichage d'une constante non définie génère généralement
// une erreur de type E_WARNING en PHP 8, et la constante est
// interprétée comme une chaîne contenant son nom.
// Il est préférable de vérifier son existence avec defined().

// 2. const déclare une constante au niveau du code.
// define() permet de déclarer une constante à l'exécution.
// Les deux méthodes créent des constantes qui ne peuvent pas
// être réaffectées normalement.

?>
//--------------------------------Exercice 1.4---------------------------------------------------
<?php
$prix_ht = 60;
$tva = 20;
$prix_ttc = $prix_ht * (1 + $tva / 100);
echo "Le prix TTC du produit est de " . $prix_ttc . " €.";
?>
<?php
$test = 42;
$test = (string) $test;
var_dump($test);
?>
<?php
var_dump((bool) 0);
var_dump((bool) 0.0);
var_dump((bool) "0");
var_dump((bool) "");
var_dump((bool) "abc");
var_dump((bool) []);
var_dump((bool) null);
?>
<?php
var_dump((int) 3.9);
var_dump((int) "12abc");
var_dump((float) "1.5e3");
var_dump((int) true);
?>
<?php
$decimal = 255;
$hexadecimal = 0xFF;
$octal = 0377;
$binaire = 0b11111111;
echo "Décimal : " . $decimal . "<br>";
echo "Hexadécimal : " . $hexadecimal . "<br>";
echo "Octal : " . $octal . "<br>";
echo "Binaire : " . $binaire . "<br>";
?>
//------------------------------------Exercice 1.5---------------------------------------------------
<?php

$traitees = "égales à";
$ici = 2;

// 1. Guillemets doubles et apostrophe
echo "Ahmed a dit : \"J'ai réussi\"";
echo "<br>";

// 2. Antislashs et caractères spéciaux
echo 'Voulez-vous supprimer C:\*.*?';
echo "<br>";

// 3. Afficher \n littéralement
echo 'Ceci n\'affichera pas \n de nouvelle ligne';
echo "<br>";

// 4. Variables non interprétées
echo 'Les variables ne seront pas $traitees $ici';
echo "<br>";

// 5. Variables interprétées
echo "Les variables seront {$traitees} {$ici}";
echo "<br>";

// Supprimer les astérisques au début et à la fin
$texte = "*Bonjour les développeurs*";
$texte = trim($texte, "*");

echo $texte;
echo "<br>";

// Afficher chaque caractère sur une ligne différente
$chaine = "Bonjour";
$longueur = strlen($chaine);

for ($i = 0; $i < $longueur; $i++) {
    echo $chaine[$i] . "<br>";
}

?>