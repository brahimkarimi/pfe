<?php
// Connexion à la base de données
require_once 'connection.php';
include 'sidebar.php';
// Récupération de l'ID de l'utilisateur
$id_utilisateur = $_GET['id'];
$requete2 = "SELECT Nom_equipe FROM user WHERE CIN = ?";
$reponse2 = $bdd->prepare($requete2);
$reponse2->execute([$id_utilisateur]);
$requete1 = "SELECT Capitaine FROM equipe WHERE Nom_equipe = ?";
$reponse1 = $bdd->prepare($requete1);
$reponse1->execute([$reponse2[0]]);
$requete = "DELETE FROM user WHERE CIN = ?";
$reponse = $bdd->prepare($requete);
$reponse->execute([$id_utilisateur]);
$requete4 = "SELECT COUNT(*) FROM user WHERE Nom_equipe = ?;";
$reponse4 = $bdd->prepare($requete4);
$reponse4->execute([$reponse2[0]]);
$requete3 = "UPDATE equipe SET nbr_joueurs = ? WHERE Nom_equipe = ?";
$reponse3 = $bdd->prepare($requete3);
$reponse3->execute([$reponse4[0],$reponse2[0]]);
if($id_utilisateur==$reponse1[0]){
   $msg_suppu = "Capitaine Supprimé, vous devez choisir un nouveau capitaine pour l'equipe :".$reponse2[0];
   $_SESSION['msg_suppu']=$msg_suppu;
   header("Location: updateEquipe.php?equipe=$reponse2[0]");
}
else{
   $msg_supp = "Membre supprimé";
   $_SESSION['msg_supp']=$msg_supp;
   header("Location: afficherUSER.php");
}
exit();