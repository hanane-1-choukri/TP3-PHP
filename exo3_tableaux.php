//--------------------------------Exercice3.1----------------------------------------------------------
<?php
require 'config.php';
// Fonction mention pour réutiliser les règles de la partie 2
function mention($note)
{
    if ($note >= 16) {
        return "Très bien";
    } elseif ($note >= 14) {
        return "Bien";
    } elseif ($note >= 12) {
        return "Assez bien";
    } elseif ($note >= SEUIL) {
        return "Passable";
    } else {
        return "Ajourné";
    }
}
// Tableau associatif des notes
$notes = [
    "Mohamed" => 16,
    "Ahmed" => 14,
    "Hind" => 13,
    "Aicha" => 15,
    "Samir" => 13,
    "Zakaria" => 13,
    "Rafik" => 10,
    "Ilham" => 9,
    "Hamza" => 7,
    "Sami" => 7,
    "Noura" => 14
];
// Tableau indexé des modules
$modules = ["PHP", "HTML", "CSS"];
echo "<h2>Affichage avec foreach</h2>";
foreach ($modules as $module) {
    echo $module . "<br>";
}
echo "<h2>Affichage par indice</h2>";
echo $modules[0] . "<br>";
echo $modules[1] . "<br>";
echo $modules[2] . "<br>";
?>
//---------------------------------------Exercice3.2-----------------------------------------------------------
<?php
echo "<h2>Liste des apprenants</h2>";
echo "<table border='1' cellpadding='8'>";
echo "<tr>";
echo "<th>Nom</th>";
echo "<th>Note</th>";
echo "<th>Mention</th>";
echo "</tr>";
foreach ($notes as $nom => $note) {
    // Les notes inférieures au seuil sont en rouge
    $style = ($note < SEUIL) ? "color:red;" : "";
    echo "<tr style='$style'>";
    echo "<td>" . htmlspecialchars($nom) . "</td>";
    echo "<td>" . $note . "</td>";
    echo "<td>" . mention($note) . "</td>";
    echo "</tr>";
}
echo "</table>";
?>
//-------------------------------------Exercice3.4-------------------------------------------------------
<?php
$somme = 0;
$nombre = 0;
$meilleure = null;
$faible = null;
foreach ($notes as $nom => $note) {
    $somme += $note;
    $nombre++;

    if ($meilleure === null || $note > $meilleure) {
        $meilleure = $note;
    }

    if ($faible === null || $note < $faible) {
        $faible = $note;
    }
}
$moyenne = $somme / $nombre;
echo "<h2>Statistiques calculées avec une boucle</h2>";
echo "Somme : " . $somme . "<br>";
echo "Nombre d'apprenants : " . $nombre . "<br>";
echo "Moyenne : " . round($moyenne, 2) . "<br>";
echo "Meilleure note : " . $meilleure . "<br>";
echo "Plus faible note : " . $faible . "<br>";
?>
<?php
echo "<h2>Vérification avec les fonctions PHP</h2>";
echo "Somme : " . array_sum($notes) . "<br>";
echo "Nombre : " . count($notes) . "<br>";
echo "Moyenne : " . round(array_sum($notes) / count($notes), 2) . "<br>";
echo "Maximum : " . max($notes) . "<br>";
echo "Minimum : " . min($notes) . "<br>";
?>
<?php
$effectifs = [];
foreach ($notes as $nom => $note) {
    $m = mention($note);
    if (isset($effectifs[$m])) {
        $effectifs[$m]++;
    } else {
        $effectifs[$m] = 1;
    }
}
echo "<h2>Effectifs par mention</h2>";
foreach ($effectifs as $m => $effectif) {
    echo $m . " : " . $effectif . "<br>";
}
?>
//------------------------------Exercice3.4----------------------------------------------------------- 
<?php
function afficher($tab)
{
    echo "<table border='1' cellpadding='8'>";
    echo "<tr><th>Nom</th><th>Note</th></tr>";
    foreach ($tab as $nom => $note) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars((string)$nom) . "</td>";
        echo "<td>" . $note . "</td>";
        echo "</tr>";
    }
    echo "</table><br>";
}
// 1. Tri par noms croissants
echo "<h3>1. Tri par noms croissants (ksort)</h3>";
$tab = $notes;
ksort($tab);
afficher($tab);
// 2. Tri par notes décroissantes
echo "<h3>2. Tri par notes décroissantes (arsort)</h3>";
$tab = $notes;
arsort($tab);
afficher($tab);
// 3. Tri par noms décroissants
echo "<h3>3. Tri par noms décroissants (krsort)</h3>";
$tab = $notes;
krsort($tab);
afficher($tab);
// 4. Tri par notes croissantes
echo "<h3>4. Tri par notes croissantes (asort)</h3>";
$tab = $notes;
asort($tab);
afficher($tab);
?>
//-----------------------------------Exercice3.5------------------------------------------------------------ 
<?php
$a = ["x" => 1, "y" => 2];
$b = ["y" => 2, "x" => 1];
echo "<h3>Résultat de \$a + \$b</h3>";
var_dump($a + $b);
echo "<h3>Résultat de \$a == \$b</h3>";
var_dump($a == $b);
echo "<h3>Résultat de \$a === \$b</h3>";
var_dump($a === $b);
?>
