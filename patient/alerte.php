<?php
// On écrit "oui" dans un fichier pour simuler l'alerte
file_put_contents("etat_alerte.txt", "oui");
echo "Alerte envoyée";
?>
