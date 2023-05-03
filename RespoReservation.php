<?php
// Récupération des données du formulaire
$equipe1 = $_POST['equipe1'];
$equipe2 = $_POST['equipe2'];
$date_debut = $_POST['tmep_debut'];
$date_fin = $_POST['temp_fin'];

// Préparation de la requête SQL pour l'insertion des données
$sql = "INSERT INTO matchclub (equipe1, equipe2, date_debut, date_fin) VALUES (:equipe1, :equipe2, :date_debut, :date_fin)";
$stmt = $bdd->prepare($sql);

// Bind des paramètres de la requête SQL
$stmt->bindParam(':equipe1', $equipe1);
$stmt->bindParam(':equipe2', $equipe2);
$stmt->bindParam(':date_debut', $date_debut);
$stmt->bindParam(':date_fin', $date_fin);

// Exécution de la requête SQL
if ($stmt->execute()) {
  echo "Les données ont été enregistrées avec succès.";
} else {
  echo "Une erreur est survenue lors de l'enregistrement des données.";
}// Fermeture de la connexion
$connexion = null;
?>