<?php
require "config.php";
// Fonction qui retourne la mention selon la note
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
// Tester la fonction
echo mention(18) . "<br>";
echo mention(15) . "<br>";
echo mention(13) . "<br>";
echo mention(10) . "<br>";
echo mention(7);

$mois = date("m");

switch ($mois) {

    case "01":
        echo "Janvier";
        break;

    case "02":
        echo "Février";
        break;

    case "03":
        echo "Mars";
        break;

    case "04":
        echo "Avril";
        break;

    case "05":
        echo "Mai";
        break;

    case "06":
        echo "Juin";
        break;

    case "07":
        echo "Juillet";
        break;

    case "08":
        echo "Août";
        break;

    case "09":
        echo "Septembre";
        break;

    case "10":
        echo "Octobre";
        break;

    case "11":
        echo "Novembre";
        break;

    case "12":
        echo "Décembre";
        break;

    default:
        echo "Mois invalide";
}
?>
<?php

for ($i = 1; $i <= 6; $i++) {

    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }

    echo "<br>";
}
?>
<?php

$i = 0;

while ($i <= 20) {

    if ($i == 10) {
        echo "<strong>$i</strong><br>";
    } else {
        echo $i . "<br>";
    }

    $i += 2;
}

?>
<?php

for ($i = 0; $i <= 10; $i++) {

    if ($i % 2 != 0) {
        continue;
    }

    echo $i . "<br>";
}

?>
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
    }

    $i++;
}

?>
<?php

$i = 0;

do {

    if ($i == 10) {
        echo "<strong>$i</strong><br>";
    } else {
        echo $i . "<br>";
    }

    $i += 2;

} while ($i <= 20);

?>
