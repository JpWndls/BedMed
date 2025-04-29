<?php
file_put_contents("etat_alerte.txt", "non");
header("Location: soignant.php"); // Redirige vers la page du soignant
exit;
