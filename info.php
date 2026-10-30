<?php
$nom = htmlspecialchars($_GET["nom"] ?? "");
$prenom = htmlspecialchars($_GET["prenom"] ?? "");
$sexe = $_GET["sexe"] ?? "";

if ($nom === "" || $prenom === "") {
    exit("Veuillez saisir le nom et le prénom.");
}

if ($sexe === "M") {
    $salutation = "Monsieur";
} elseif ($sexe === "F") {
    $salutation = "Madame";
} else {
    exit("Sexe invalide.");
}

echo "Bonjour $salutation $prenom $nom";
?>