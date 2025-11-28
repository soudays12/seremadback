<?php
// Script pour générer un mot de passe haché
// Utilisation : php hash_password.php

$password = 'votre_mot_de_passe'; // Remplacez par votre mot de passe
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

echo "Mot de passe : " . $password . "\n";
echo "Hash : " . $hashedPassword . "\n";
echo "\nCopiez ce hash dans phpMyAdmin pour le champ 'password'\n";
?>