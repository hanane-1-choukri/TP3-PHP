<?php
require_once "config.php";

if (
    !isset($_POST["nom"], $_POST["note_info"], $_POST["note_math"]) ||
    trim($_POST["nom"]) === "" ||
    $_POST["note_info"] === "" ||
    $_POST["note_math"] === ""
) {
    exit("Erreur : tous les champs sont obligatoires.");
}

$nom = trim($_POST["nom"]);

if (!is_numeric($_POST["note_info"]) ||
    !is_numeric($_POST["note_math"])) {
    exit("Erreur : les notes doivent être numériques.");
}

$info = (float) $_POST["note_info"];
$math = (float) $_POST["note_math"];

if (
    $info < NOTE_MIN || $info > NOTE_MAX ||
    $math < NOTE_MIN || $math > NOTE_MAX
) {
    exit("Erreur : les notes doivent être comprises entre 0 et 20.");
}

$nomSecurise = htmlspecialchars($nom, ENT_QUOTES, "UTF-8");

$moyenne = ($info + $math) / 2;

echo "<h2>Récapitulatif</h2>";
echo "Nom : $nomSecurise<br>";
echo "Informatique : $info<br>";
echo "Mathématiques : $math<br>";
echo "Moyenne : " . round($moyenne, 2);
?>
<?php
// Le dossier data doit déjà exister.
$fichier = __DIR__ . "/data/notes.csv";

$fp = fopen($fichier, "a");

if ($fp === false) {
    exit("Erreur : impossible d'ouvrir le fichier.");
}

fputcsv($fp, [$nom, $info, $math], ";");

fclose($fp);

echo "<p>Notes enregistrées avec succès.</p>";
?>