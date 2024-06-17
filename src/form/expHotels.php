<?php
// Chemin vers le fichier JSON
$filePath = '../json/hostels.json';

// Lire le contenu du fichier JSON
$jsonData = file_get_contents($filePath);

// Décoder le JSON en tableau PHP
$hotels = json_decode($jsonData, true); // `true` convertit les données en tableau associatif

// Vérifier si le tableau est bien chargé
if (is_array($hotels)) {
    // Itérer sur chaque hôtel et afficher certaines informations
    foreach ($hotels as $hotel) {
        echo "Nom de l'hôtel: " . $hotel['nom'] . "<br>";
        echo "Numéro de téléphone: " . $hotel['numero_telephone'] . "<br>";
        echo "Adresse: " . $hotel['nom_rue'] . ", " . $hotel['code_postal'] . " " . $hotel['ville'] . "<br><br>";
    }
} else {
    echo "Erreur lors du chargement des données JSON.";
}
