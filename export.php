<?php
$fichierCSV = __DIR__ . "/data/notes.csv";
$fichierJSON = __DIR__ . "/data/notes.json";

if (!file_exists($fichierCSV)) {
    exit("Le fichier CSV n'existe pas.");
}

$fp = fopen($fichierCSV, "r");

if ($fp === false) {
    exit("Impossible de lire le fichier CSV.");
}

$resultats = [];

while (($ligne = fgetcsv($fp, 0, ";")) !== false) {
    if (count($ligne) < 3) {
        continue;
    }

    [$nom, $info, $math] = $ligne;

    $resultats[] = [
        "nom" => $nom,
        "note_info" => (float)$info,
        "note_math" => (float)$math,
        "moyenne" => ((float)$info + (float)$math) / 2
    ];
}

fclose($fp);

// Transformer le tableau PHP en JSON
$json = json_encode(
    $resultats,
    JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
);

if ($json === false ||
    file_put_contents($fichierJSON, $json) === false) {
    exit("Erreur lors de l'écriture du fichier JSON.");
}

echo "<h2>Résultats exportés</h2>";

// Relire le fichier JSON
$contenu = file_get_contents($fichierJSON);
$donnees = json_decode($contenu, true);

echo "<pre>";
print_r($donnees);
echo "</pre>";

// Comparaison avec serialize()
echo "<h3>Exemple de serialize()</h3>";
echo "<pre>" . htmlspecialchars(serialize($resultats)) . "</pre>";
?>