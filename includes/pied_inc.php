<hr>
<footer>
    <p>TP PHP - Suivi des notes</p>
    <p>Date : <?= date("d/m/Y") ?></p>
</footer>
</body>
</html>
<?php require_once "includes/entete_inc.php"; ?>
<?php require_once "includes/menu_inc.php"; ?>

<h2>Contenu de ma page</h2>
<p>Bienvenue dans l'application.</p>

<?php require_once "includes/pied_inc.php"; ?>
<p>Date du jour : <?= date("d/m/Y") ?></p>
<?php
$aujourdhui = new DateTime();
$finSemestre = new DateTime("2027-01-31");

if ($finSemestre < $aujourdhui) {
    echo "La date de fin du semestre est passée.";
} else {
    $difference = $aujourdhui->diff($finSemestre);

    echo "Jours restants : " . $difference->days;
}
?>
<?php
$jour = 29;
$mois = 2;
$annee = 2028;

if (checkdate($mois, $jour, $annee)) {
    echo "Date valide.";
} else {
    echo "Date invalide.";
}
?>