<?php
// Connexion à la base de données
require_once 'connection.php';

// Récupération de l'ID de l'équipe
$nom_equipe = $_GET['id'];

// Récupération des données de l'équipe
$requete = "SELECT * FROM equipe WHERE Nom_equipe = ?";
$reponse = $bdd->prepare($requete);
$reponse->execute([$nom_equipe]);
$data = $reponse->fetch();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil de l'équipe <?php echo $nom_equipe; ?></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/profil.css"> 
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <?php include "sidebar.php";?>
    <section id="content">
        <main>
            <div class="head-title">
                <div class="container emp-profile">
                    <form method="post">
                        <div class="row">
                            <div class="col-md-4">

                            </div>
                        <div class="col-md-6">
                            <div class="profile-head">
                                <h5>
                                    Informations de l'équipe <?php echo $nom_equipe;?>
                                </h5>
                                <h6>
                                    <?php //echo $data[1];?>
                                </h6>
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">À propos</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="tab-content profile-tab" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    <?php if ($data && is_array($data) ) { ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nom de l'équipe</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $data['Nom_equipe'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Date de création</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $data['Date_Creation'];?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Nombre de joueurs</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                    <?php echo $data['nbr_joueurs'] ?? '';?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>ID du responsable</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $data['id_Respo'] ;?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Capitaine</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $data['Capitaine'];?></p>
                                            </div>
                                        </div>
                                    <?php } else { ?>
                                        <p>Aucune équipe trouvée pour l'ID <?php echo $nom_equipe; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="profile-work">
                                <p>Actions</p>
                                <div class="">
                                    <div class="btn col-md-12"><a href="listeMembre.php?equipe=<?php echo $nom_equipe; ?>">Afficher les informations des membres</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>           
            </div>
        </main>
    </section>
<script src="../scripte/script.js"></script>
<script src="https://kit.fontawesome.com/6404735ed8.js" crossorigin="anonymous"></script>
</body>
</html>