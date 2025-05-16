<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
$username = htmlspecialchars($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Alerter un soignant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="alerte.css">
</head>
<body>

<header>
    <div class="username">Alerter un soignant</div>
    <a href="../../auth/logout.php" class="logout-icon">
        <i class="bi bi-box-arrow-right"></i>
    </a>
</header>

<div class="sidebar">
    <img src="../../images/logo bedmed.png" alt="Logo BEDMED" class="logo">
    <a href="../accueil/accueil.php" class="icon-btn maison">
        <img src="../../images/maison.png" alt="Accueil">
    </a>
    <a href="../alerte_soignant/alerte.php" class="icon-btn alerte">
        <img src="../../images/alerte.png" id="icone-alert" alt="Alerte">
    </a>
    <a href="../control_lit/control.php" class="icon-btn lit">
        <img src="../../images/lit.png" alt="lit">
    </a>
    <a href="../abonnement/abonnement.php" class="icon-btn tele">
        <img src="../../images/tv.png" alt="Abonnement">
    </a>
    <img src="../../images/logo chu.png" alt="CHU Lille" class="chu-logo">
</div>

</body>
</html>