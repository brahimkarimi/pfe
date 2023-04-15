<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="pfe";

//la connexion a la base de donnee 
$bdd=new PDO('mysql:host=localhost;dbname=pfe','root','');
$bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>