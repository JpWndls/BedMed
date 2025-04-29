<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contrôle du Lit</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header>
        <a href="index.php">← Retour</a>
    </header>

    <main>
        <h1>Contrôle du lit</h1>
        <div class="button-group">
            <button onclick="envoyerCommande('monter')">Monter</button>
            <button onclick="envoyerCommande('descendre')">Descendre</button>
            <button onclick="envoyerCommande('incliner')">Incliner dossier</button>
            <button onclick="envoyerCommande('plat')">Revenir à plat</button>
        </div>
    </main>

    <script>
    function envoyerCommande(action) {
        // Plus tard tu peux envoyer un POST à Arduino ici
        alert("Commande envoyée : " + action);
    }
    </script>
</body>
</html>
