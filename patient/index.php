<?php
// Simulation : données patient
$prenom = "Jean";
$nom = "Dupont";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accueil Patient</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header>
        <img src="assets/img/logoCHU.png " alt="Logo CHU" class="logo">
        <img src="assets/img/BED MED.png" alt="Logo ORL" class="logo">
    </header>

    <main>
        <h1>Bienvenue, <?php echo htmlspecialchars($prenom . ' ' . $nom); ?></h1>

        <div class="button-group">
            <button onclick="appelerSoignant()">Appeler un soignant</button>
            <a href="control_lit.php"><button>Contrôler le lit</button></a>
            <a href="payer_tv.php"><button>Accès TV</button></a>
        </div>

        <div id="alerte" class="hidden">Alerte envoyée au soignant !</div>
    </main>
    
<script>
function appelerSoignant() {
    fetch("alerte.php")
        .then(response => response.text())
        .then(data => {
            document.getElementById('alerte').textContent = "Alerte envoyée au soignant !";
            document.getElementById('alerte').classList.remove('hidden');
            setTimeout(() => {
                document.getElementById('alerte').classList.add('hidden');
            }, 3000);
        });
}
</script>

</body>
</html>
