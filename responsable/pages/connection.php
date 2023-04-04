<?php 

$servername="localhost";
$username="root";
$password="";
$dbname="pfe";

//la connexion a la base de donnee 
$connection=new PDO('mysql:host=localhost;dbname=pfe','root','');
$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

?>