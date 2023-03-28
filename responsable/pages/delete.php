<?php 
include 'connection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $requete = "DELETE FROM users WHERE id=:id";
    $statement = $connection->prepare($requete);
    $statement->execute(array(':id' => $id));
}

header('location:afficherUSER.php');
exit;
?>
