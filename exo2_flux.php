<?php
require 'config.php';
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
// Tester plusieurs notes
$notes = [18, 15, 13, 10, 8, 20, 11];
foreach ($notes as $note) {
    echo "Note : " . $note;
    echo " — Mention : " . mention($note);
    echo "<br>";
}
?>
//----------------------------------------Exercice2.2------------------------------------------------
<?php
// Exercice 2.2 : afficher le mois courant
$mois = date("m");
switch ($mois) {
    case "01":
        $nom_mois = "Janvier";
        break;
    case "02":
        $nom_mois = "Février";
        break;
    case "03":
        $nom_mois = "Mars";
        break;
    case "04":
        $nom_mois = "Avril";
        break;
    case "05":
        $nom_mois = "Mai";
        break;
    case "06":
        $nom_mois = "Juin";
        break;
    case "07":
        $nom_mois = "Juillet";
        break;
    case "08":
        $nom_mois = "Août";
        break;
    case "09":
        $nom_mois = "Septembre";
        break;
    case "10":
        $nom_mois = "Octobre";
        break;
    case "11":
        $nom_mois = "Novembre";
        break;
    case "12":
        $nom_mois = "Décembre";
        break;
    default:
        $nom_mois = "Mois inconnu";
}
echo "Mois courant : " . $nom_mois;
?>
//------------------------------Exercice2.3-----------------------------------------------------
<?php
for ($i = 1; $i <= 6; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
?>
//boucle while
<?php
$i = 0;

while ($i <= 20) {
    if ($i == 10) {
        echo "<strong>$i</strong><br>";
    } else {
        echo "$i<br>";
    }

    $i += 2;
}
?>
//for et continue 
<?php
for ($i = 0; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        continue;
    }
    echo $i . "<br>";
}
?>
// while, switch et break 
<?php
$i = 1;
while ($i <= 15) {
    switch ($i) {
        case 5:
            echo "At 5<br>";
            break;
        case 10:
            echo "At 10; quitting<br>";
            break 2;
        default:
            echo "$i<br>";
    }
    $i++;
}
echo "Fin du programme<br>";
?>
//do-while
<?php
$i = 0;
do {
    if ($i == 10) {
        echo "<strong>$i</strong><br>";
    } else {
        echo "$i<br>";
    }
    $i += 2;
} while ($i <= 20);
?>
