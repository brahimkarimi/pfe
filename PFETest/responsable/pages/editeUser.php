<?php
// Connexion à la base de données
require_once 'connection.php';

// Récupération de l'ID de l'utilisateur
$id_utilisateur = $_GET['id'];

// Récupération des données de l'utilisateur
$requete = "SELECT * FROM user WHERE CIN = ?";
$reponse = $bdd->prepare($requete);
$reponse->execute([$id_utilisateur]);
$data = $reponse->fetch();

// Traitement du formulaire
if (isset($_POST['submit'])) {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];

    // Mise à jour des données de l'utilisateur
    $requete = "UPDATE user SET Nom = ?, Prenom = ?, Email = ?, Tel = ? WHERE CIN = ?";
    $reponse = $bdd->prepare($requete);
    $reponse->execute([$nom, $prenom, $email, $telephone, $id_utilisateur]);

    // Redirection vers la page de profil de l'utilisateur
    header("Location: profil.php?id=$id_utilisateur");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Édition du profil de <?php echo $data['Nom'] . ' ' . $data['Prenom']; ?></title>
</head>
<body>
    <h1>Édition du profil de <?php echo $data['Nom'] . ' ' . $data['Prenom']; ?></h1>
    <form method="post">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" id="nom" value="<?php echo $data['Nom']; ?>"><br>

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" id="prenom" value="<?php echo $data['Prenom']; ?>"><br>

        <label for="email">Email :</label>
        <input type="email" name="email" id="email" value="<?php echo $data['Email']; ?>"><br>

        <label for="telephone">Téléphone :</label>
        <input type="text" name="telephone" id="telephone" value="<?php echo $data['Tel']; ?>"><br>

        <input type="submit" name="submit" value="Enregistrer les modifications">
    </form>
</body>
</html