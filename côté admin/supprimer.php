<?php
session_start();
$dsn = 'mysql:host=127.0.0.1;dbname=projet1;charset=utf8';
$username = 'root';
$password = '';
$options = [];
try {   
$bdd= new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {
die("erreur". $e->getMessage());
}




$id = $_GET['id'];
$req = $bdd->prepare("DELETE FROM etudiant WHERE etudiant.id = ?");
$req->execute(array($id));
header("Location: dashboard.php?id=".$_SESSION['id']);
?>