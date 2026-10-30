<?php
require_once "config.php";

$fichier = __DIR__ . "/data/notes.csv";

if (!file_exists($fichier)) {
    exit("Aucune note enregistrée pour le moment.");
}

$fp = fopen($fichier, "r");

if ($fp === false) {
    exit("Erreur lors de l'ouverture du fichier.");
}

$sommeMoyennes = 0;
$nombre = 0;
?>

<h2>Liste des apprenants</h2>

<table border="1" cellpadding="5">
    <tr>
        <th>Nom</th>
        <th>Info</th>
        <th>Math</th>
        <th>Moyenne</th>
        <th>Mention</th>
    </tr>

    <?php
    while (($ligne = fgetcsv($fp, 0, ";")) !== false) {
        if (count($ligne) < 3) {
            continue;
        }

        [$nom, $info, $math] = $ligne;

        $moyenne = ((float)$info + (float)$math) / 2;

        if ($moyenne >= 16) {
            $mention = "Très bien";
        } elseif ($moyenne >= 14) {
            $mention = "Bien";
        } elseif ($moyenne >= 12) {
            $mention = "Assez bien";
        } elseif ($moyenne >= 10) {
            $mention = "Passable";
        } else {
            $mention = "Ajourné";
        }

        $sommeMoyennes += $moyenne;
        $nombre++;
        ?>
        <tr>
            <td><?= htmlspecialchars($nom) ?></td>
            <td><?= htmlspecialchars($info) ?></td>
            <td><?= htmlspecialchars($math) ?></td>
            <td><?= round($moyenne, 2) ?></td>
            <td><?= $mention ?></td>
        </tr>
        <?php
    }
    ?>

</table>

<?php
fclose($fp);

if ($nombre > 0) {
    echo "<p>Moyenne générale de la classe : "
       . round($sommeMoyennes / $nombre, 2) . "</p>";
} else {
    echo "<p>Aucun apprenant trouvé.</p>";
}
?>
<?php
$fichier = "data/notes.csv";
$fp = fopen($fichier, "r");

if ($fp === false) {
    exit("Impossible d'ouvrir le fichier.");
}

while (($ligne = fgets($fp)) !== false) {
    $champs = explode(";", trim($ligne));
    print_r($champs);
    echo "<br>";
}

fclose($fp);
?>