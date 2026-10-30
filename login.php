<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $login = trim($_POST["login"] ?? "");

    if ($login === "") {
        $erreur = "Veuillez saisir votre login.";
    } else {
        session_regenerate_id(true);
        $_SESSION["login"] = $login;

        header("Location: profil.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <h2>Connexion</h2>

    <?php if (isset($erreur)): ?>
        <p><?= htmlspecialchars($erreur) ?></p>
    <?php endif; ?>

    <form method="POST" action="login.php">
        <label>Login :</label>
        <input
            type="text"
            name="login"
            value="<?= htmlspecialchars($_COOKIE["dernier_login"] ?? "") ?>"
            required
        >

        <button type="submit">Se connecter</button>
    </form>
</body>
</html>
<?php
setcookie("dernier_login", $login, time() + 86400, "/");
$donneesCookie = [
    "login" => $login,
    "date" => date("Y-m-d H:i:s")
];

setcookie(
    "infos_connexion",
    json_encode($donneesCookie),
    time() + 86400,
    "/"
);
?>
<?php
if (isset($_COOKIE["infos_connexion"])) {
    $infos = json_decode($_COOKIE["infos_connexion"], true);

    echo htmlspecialchars($infos["login"] ?? "");
    echo "<br>";
    echo htmlspecialchars($infos["date"] ?? "");
}
?>