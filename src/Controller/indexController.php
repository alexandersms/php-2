<?php
require dirname(__DIR__, 2) . '/autoload.php';
// connexion à la base des données
$database = new DataBase();
//$database->connect();
// Requête SQL
$query = "SELECT * FROM produit WHERE etat_publication = 1";
$products = $database->query($query, 'Produit');

//var_dump($products);
