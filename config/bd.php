<?php
//Connection a la BDD
$server = 'localhost';
$dbname = 'foot';
$username = 'user';
$password = '';

try {
    $linkpdo = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
    $linkpdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erreur : " . $e->getMessage());
}
