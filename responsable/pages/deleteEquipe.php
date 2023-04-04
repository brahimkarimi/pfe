<?php 
include 'connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $requete = "DELETE FROM equipe WHERE nom_equipe=:nom_equipe";
    $statement = $connection->prepare($requete);
    $statement->execute(array(':nom_equipe' => $id));
}

header('location:afficherUSER.php');
exit;
?>
