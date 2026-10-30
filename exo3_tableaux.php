<?php

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

?>
<?php

$modules = ["PHP", "UML", "Linux"];
// Affichage avec foreach
foreach ($modules as $module) {
    echo $module . "<br>";
}
// Accès par indice
echo $modules[0] . "<br>";
echo $modules[1] . "<br>";
echo $modules[2];

?>
<?php

require "config.php";
function mention($note) {
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
echo "<table border='1' cellpadding='8'>";
echo "<tr>
        <th>Nom</th>
        <th>Note</th>
        <th>Mention</th>
      </tr>";
foreach ($notes as $nom => $note) {
    $couleur = ($note < SEUIL) ? "red" : "black";
    echo "<tr style='color:$couleur'>";
    echo "<td>$nom</td>";
    echo "<td>$note</td>";
    echo "<td>" . mention($note) . "</td>";
    echo "</tr>";
}
echo "</table>";

?>
<?php

$somme = 0;
$meilleure = 0;
$faible = 20;
$nombre = 0;
foreach ($notes as $nom => $note) {
    $somme += $note;
    $nombre++;
    if ($note > $meilleure) {
        $meilleure = $note;
    }
    if ($note < $faible) {
        $faible = $note;
    }
}
$moyenne = $somme / $nombre;
echo "Somme : " . $somme . "<br>";
echo "Moyenne : " . $moyenne . "<br>";
echo "Meilleure note : " . $meilleure . "<br>";
echo "Plus faible note : " . $faible . "<br>";

?>
<?php

echo "Somme : " . array_sum($notes) . "<br>";
echo "Nombre : " . count($notes) . "<br>";
echo "Meilleure note : " . max($notes) . "<br>";
echo "Plus faible note : " . min($notes) . "<br>";
echo "Moyenne : " . array_sum($notes) / count($notes);

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
foreach ($effectifs as $mention => $nombre) {
    echo $mention . " : " . $nombre . "<br>";
}

?>
<?php

function afficher($tab) {
    echo "<pre>";
    print_r($tab);
    echo "</pre>";
}

?>
<?php

ksort($notes);
afficher($notes);

?>
<?php

arsort($notes);
afficher($notes);

?>
<?php

krsort($notes);
afficher($notes);

?>
<?php

asort($notes);
afficher($notes);

?>
<?php

$a = ["x" => 1, "y" => 2];
$b = ["y" => 2, "x" => 1];
var_dump($a + $b);
var_dump($a == $b);
var_dump($a === $b);

?>