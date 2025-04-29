<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Accès TV</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <header>
        <a href="index.php">← Retour</a>
    </header>

    <main>
        <h1>Accès Télévision</h1>
        <p>Accédez à la télévision pour 5€/jour.</p>
        <button onclick="payerTV()">Payer</button>
        <div id="message" class="hidden"></div>
    </main>

    <script>
    function payerTV() {
        document.getElementById('message').innerHTML = "Paiement effectué ! Profitez de la TV.";
        document.getElementById('message').classList.remove('hidden');
    }
    </script>
</body>
</html>
