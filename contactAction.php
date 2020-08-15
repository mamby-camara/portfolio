<?php

if(!isset($_GET['nom'], $_GET['email'], $_GET['numero'], $_GET['message']) || empty($_GET['nom']) || empty($_GET['email']) || empty($_GET['numero']) || empty($_GET['message'])) {
    echo('Veuillez remplir tous les champs du formulaire.');
    exit;
}

$name  = $_GET['nom'];
$email  = $_GET['email'];
$numero = $_GET['numero'];
$message  = $_GET['message'];

$db = new PDO('mysql:host=localhost;dbname=portfolio', 'root', '');
$stmt = $db->prepare("INSERT INTO messages (name, email, phone, message) VALUES ('$name', '$email', '$numero', '$message');");
$stmt->execute();

header('Location: index.php')

?>