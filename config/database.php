<?php


try{
    //Connection à la Base de donnée
    $pdo = new PDO(
        "mysql:host=database;dbname=heros;charset=utf8",
        "root",
        "admin"
    );
    echo "Connexion réussie ✅";
} catch (PDOException $e) {
    // Gestion d'erreur
    echo "Erreur de connexion ❌ : " . $e->getMessage();
}