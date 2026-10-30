<?php
session_start();

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$login = htmlspecialchars($_SESSION["login"], ENT_QUOTES, "UTF-8");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
</head>
<body>
    <h2>Bienvenue <?= $login ?> !</h2>
    <a href="deconnexion.php">Se déconnecter</a>
</body>
</html>