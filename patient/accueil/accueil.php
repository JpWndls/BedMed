<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
$username = htmlspecialchars($_SESSION['username']);
?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil Patient</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="accueil.css">
</head>
<body>

<header>
    <img src="../../images/logo chu.png" alt="CHU Lille" class="header-logo">
    <div class="username text-center flex-grow-1">Bienvenue, <?= $username ?> 👋</div>
    <img src="../../images/logo bedmed.png" alt="BEDMED" class="header-logo">
</header>

<main class="main-buttons">
<a href="../alerte_soignant/alerte.php" class="btn-main alert" title="Alerte">
    <img src="../../images/alerte.png" alt="Alerter un soignant" id="btn-alert">
</a>

<a href="../control_lit/control.php" class="btn-main bed" title="Lit">
    <img src="../../images/lit.png" alt="Contrôler le lit" id="btn-bed">
</a>

<a href="../abonnement/abonnement.php" class="btn-main tele" title="Abonnement TV">
    <img src="../../images/tv.png" alt="Gérer l'abonnement TV" id="btn-abonnement">
</a>
</main>

</body>
</html>