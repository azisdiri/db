<?php 
$host = 'localhost';
$user = 'root';
$bdd = 'tp23';
$passwd = '';
$c = $_POST['categorie'];
$d = $_POST['description'];
$t = $_POST['taille'];
$p = $_POST['prix'];
// Connexion au serveur
mysql_connect($host, $user,$passwd) or die("erreur de connexion au serveur");
// Connexion à la base
mysql_select_db($bdd) or die("erreur de connexion a la base de données");
// Creation et envoi de la requete
mysql_query("INSERT Into  ");
 ?>