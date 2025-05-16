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
    <title>Choix de l'abonnement TV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="abonnement.css?v=1.0">
    <script src="abonnement.js?v=1.0" defer></script>
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

<main class="subscription-options">
    <div class="plan gratuit selected">
        <h2>🆓 Gratuit</h2>
        <p>Accès aux chaînes publiques<br><strong>0€ / jour</strong></p>
        <button class="select-btn">Annuler</button>
    </div>

    <div class="plan basique">
        <h2>📺 Basique</h2>
        <p>Chaînes principales (TF1, France 2...)<br><strong>1,50€ / jour</strong></p>
        <button class="select-btn">Sélectionner</button>
    </div>

    <div class="plan cinema">
        <h2>🎬 Cinéma & Séries</h2>
        <p>Films, séries, classiques<br><strong>2,50€ / jour</strong></p>
        <button class="select-btn">Sélectionner</button>
    </div>

    <div class="plan divertissement">
        <h2>🎉 Divertissement</h2>
        <p>Jeux TV, téléréalité, humour<br><strong>2,00€ / jour</strong></p>
        <button class="select-btn">Sélectionner</button>
    </div>

    <div class="plan sport">
        <h2>⚽ Sport</h2>
        <p>Matchs, replays, magazines sportifs<br><strong>2,50€ / jour</strong></p>
        <button class="select-btn">Sélectionner</button>
    </div>

    <div class="plan jeunesse">
        <h2>👶 Jeunesse</h2>
        <p>Chaînes enfants, dessins animés<br><strong>1,00€ / jour</strong></p>
        <button class="select-btn">Sélectionner</button>
    </div>

    <div class="plan premium">
        <h2>⭐ Premium</h2>
        <p>Tous les forfaits inclus<br><strong>4,50€ / jour</strong></p>
        <button class="select-btn">Sélectionner</button>
    </div>
</main>

</body>
</html>