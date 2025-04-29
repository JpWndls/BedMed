<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Interface Soignant</title>
    <link rel="stylesheet" href="assets/style.css">
    <meta http-equiv="refresh" content="3"> <!-- recharge la page toutes les 3 secondes -->
</head>
<body>
    <main>
        <h1>Tableau d'alerte patient</h1>
        <?php
            $etat = trim(file_get_contents("etat_alerte.txt"));
            if ($etat === "oui") {
                echo '<div style="color: red; font-weight: bold; font-size: 2em;">🚨 Alerte patient en cours !</div>';
                echo '<form action="reset_alerte.php" method="post"><button>Réinitialiser alerte</button></form>';
            } else {
                echo '<div style="color: green; font-size: 1.5em;">✅ Aucun appel patient</div>';
            }
        ?>
    </main>
</body>
</html>
