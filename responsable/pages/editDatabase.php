<?php

// // Récupération des données du formulaire
// $equipe1 = $_POST['equipe1'];
// $equipe2 = $_POST['equipe2'];
// $date_debut = $_POST['date_debut'];
// $date_fin = $_POST['date_fin'];
// $court = $_POST['court'];
// $newContent = "$equipe1 vs $equipe2";

// // Connexion à la base de données
// $host = "localhost";
// $username = "root";
// $password = "";
// $dbname = "test";

// $conn = mysqli_connect($host, $username, $password, $dbname);

// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
// }

// // Requête SQL pour mettre à jour la cellule
// $sql = "UPDATE matchclub SET equipe1='$equipe1' equipe2='$equipe2' and  WHERE AND date>='$date_debut' AND date<='$date_fin'";

// if (mysqli_query($conn, $sql)) {
//     echo "La réservation a été mise à jour avec succès.";
// } else {
//      echo "Erreur lors de la mise à jour de la réservation: " . mysqli_error($conn);
// }

// mysqli_close($conn);

?>
<?php
// Récupération des données envoyées en POST
$data = json_decode(file_get_contents('php://input'), true);

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification de la connexion
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Mise à jour de la base de données avec les nouvelles informations
$sql = "UPDATE matchclub SET equipe1='" . $data['equipe1'] . "', equipe2='" . $data['equipe2'] . "', temp_debut='" . $data['dateDebut'] . "', temp_fin='" . $data['dateFin'] . "' WHERE id=" . $data['id'];

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
$response = array('success' => true, 'message' => 'Modification enregistrée avec succès : ' . json_encode($data));
echo json_encode($response);
$conn->close();
?>
<!-- Ce code récupère les données envoyées en POST sous forme de tableau associatif grâce à la fonction json_decode. Ensuite, il se connecte à la base de données et met à jour la table "matchs" avec les nouvelles informations. Enfin, il renvoie un message de succès ou -->