<?php
  require_once 'sidebar.php';
  require_once 'connection.php';
  $login = $_SESSION['Login'];
  $mdp = $_SESSION['mdp'];
  $reponse=$bdd->prepare('SELECT * FROM responsable WHERE CIN = :CIN AND mot_de_passe = :password');
  $reponse->execute(array(':CIN'=>$login,':password'=>$mdp));
  $data = $reponse->fetch();
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Css/styleDemande.css">
    <link rel="stylesheet" href="../css/stylecalender.css">
    <title>Demandes</title>
</head>
<body>
    <section id="content">
    	<main>
			<div class="table-order"><!-- head-title     list-->
                <div class="order">
                    <?php
                        $etat = "Attente_Respo";
                        $check = $bdd->prepare('SELECT * FROM user WHERE état_inscription = :etat');
                        $check->execute(array('etat' => $etat));
                        if($check->rowCount()>0){
                            $cin = array();
                            while($donnees = $check->fetch()){
                                $cin[] = $donnees[0]; ?>
                                <div class="Person">
                                        <img src="<?php echo "../" .$donnees[9] ;?>">
                                        <div class="Name"><?=$donnees[1]?> <?=$donnees[2]?></div>
                                        <div class="CIN"><?=$donnees[0]?></div>
                                        <form action="" method="post">
                                        <button class="accepter" name="Accepte">
                                        <?php echo "<a href='orderAccept.php?id=$donnees[0]'>Accepter</a> "?></button>
                                        <button class="refuser" name="Refuser">
                                        <?php echo "<a href='orderRefus.php?id=$donnees[0]'>Refuser</a> "?></button>
                                        </form>
                                </div> 
                        <?php
                            }
                        }
                        else{
                            echo "<p>Vous n'avez aucune demande</p>";
                        }
                    ?>     
                </div>
</body>
</html>