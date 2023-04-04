<?php 
include 'connection.php';

$requete = "SELECT * FROM users";
$res = $connection->query($requete);

if (!$res) {
    echo "La récupération des données a rencontré un problème '<br>'";
}

?>

<?php 
include 'sidebar.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste of user</title>
    <link rel="stylesheet" href="../css/tble.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/6404735ed8.css" crossorigin="anonymous">


    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/6404735ed8.js" crossorigin="anonymous"></script>
</head>
<body>
    <h2>Liste of user</h2><br><br><br>
    <section id="content">
        <main>
            <div class="head-title">
            <button class="button-7 bx" role="button">Ajouter</button>

            </div>
            <?php if ($rqi>0) {?>
            <br><h3>list des member inscrit</h3><br><br><br>
            
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>CIN</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Téléphone</th>
                            <th>Capitaine</th>
                            <th>Nom équipe</th>
                            <th>id Respo</th>
                            <th>Type</th>
                            <th>Etat inscription</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            

                            while ($line = $res->fetch(PDO::FETCH_ASSOC)) {

                                if ($line['etat_inscription']=='inscrit') {

                                        echo "<tr>";
                                        echo "
                                            <td>$line[id]</td>
                                            <td>$line[CIN]</td>
                                            <td>$line[Nom]</td>
                                            <td>$line[Prenom]</td>
                                            <td>$line[Tel]</td>
                                            <td>$line[Capitaine]</td>
                                            <td>$line[nom_equipe]</td>
                                            <td>$line[id_Respo]</td>
                                            <td>$line[Type]</td>
                                            <td>$line[etat_inscription]</td>
                                            <td class='icons-table'>
                                                <button class='btn-icons trash'><a href='delete.php?id=$line[id]'><i class='fas fa-trash'></i></a></button>
                                            </td>
                                            <td class='icons-table'>
                                                <button class='btn-icons pen'><a href='update.php?id=$line[id]'><i class='fas fa-pen-square'></i></a></button>
                                            </td>
                                        ";
                                        echo "</tr>";
                                }
                            }
                        ?>
                    </tbody>
                </table>
                <?php }else if ($rqrc>0 ) {?>
                <br><h3>list des member attente responsable</h3><br><br><br>
                <br><br>
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>CIN</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Téléphone</th>
                            <th>Capitaine</th>
                            <th>Nom équipe</th>
                            <th>id Respo</th>
                            <th>Type</th>
                            <th>Etat inscription</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            
                                
                            while ($line = $res->fetch(PDO::FETCH_ASSOC)) {

                                if ($line['etat_inscription']=='refus_capit') {

                                        echo "<tr>";
                                        echo "
                                            <td>$line[id]</td>
                                            <td>$line[CIN]</td>
                                            <td>$line[Nom]</td>
                                            <td>$line[Prenom]</td>
                                            <td>$line[Tel]</td>
                                            <td>$line[Capitaine]</td>
                                            <td>$line[nom_equipe]</td>
                                            <td>$line[id_Respo]</td>
                                            <td>$line[Type]</td>
                                            <td>$line[etat_inscription]</td>
                                            <td class='icons-table'>
                                                <button class='btn-icons trash'><a href='delete.php?id=$line[id]'><i class='fas fa-trash'></i></a></button>
                                            </td>
                                            <td class='icons-table'>
                                                <button class='btn-icons pen'><a href='update.php?id=$line[id]'><i class='fas fa-pen-square'></i></a></button>
                                            </td>
                                        ";
                                        echo "</tr>";
                                }
                            }
                        ?>
                    </tbody>
                </table>
                <?php    }else if($rqr>0){?>
                <br><h3> liste des membres refus par capitaine</h3><br><br><br>
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>CIN</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Téléphone</th>
                            <th>Capitaine</th>
                            <th>Nom équipe</th>
                            <th>id Respo</th>
                            <th>Type</th>
                            <th>Etat inscription</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                                                                 
                            while ($line = $res->fetch(PDO::FETCH_ASSOC)) {     
                                if ($line['etat_inscription']=='attente_respo') {

                                        echo "<tr>";
                                        echo "
                                            <td>$line[id]</td>
                                            <td>$line[CIN]</td>
                                            <td>$line[Nom]</td>
                                            <td>$line[Prenom]</td>
                                            <td>$line[Tel]</td>
                                            <td>$line[Capitaine]</td>
                                            <td>$line[nom_equipe]</td>
                                            <td>$line[id_Respo]</td>
                                            <td>$line[Type]</td>
                                            <td>$line[etat_inscription]</td>
                                            <td class='icons-table'>
                                                <button class='btn-icons trash'><a href='delete.php?id=$line[id]'><i class='fas fa-trash'></i></a></button>
                                            </td>
                                            <td class='icons-table'>
                                                <button class='btn-icons pen'><a href='update.php?id=$line[id]'><i class='fas fa-pen-square'></i></a></button>
                                            </td>
                                        ";
                                        echo "</tr>";
                                }
                            }
                        ?>
                    </tbody>
                </table>
                <?php }else if($rqc>0){ ?>
                <br><h3> liste des membres attent la reponse de capitaine </h3><br><br><br>
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>CIN</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Téléphone</th>
                            <th>Capitaine</th>
                            <th>Nom équipe</th>
                            <th>id Respo</th>
                            <th>Type</th>
                            <th>Etat inscription</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            }else if($rqc>0){                                 
                            while ($line = $res->fetch(PDO::FETCH_ASSOC)) {
                                if ($line['etat_inscription']=='attent_capit') {

                                        echo "<tr>";
                                        echo "
                                            <td>$line[id]</td>
                                            <td>$line[CIN]</td>
                                            <td>$line[Nom]</td>
                                            <td>$line[Prenom]</td>
                                            <td>$line[Tel]</td>
                                            <td>$line[Capitaine]</td>
                                            <td>$line[nom_equipe]</td>
                                            <td>$line[id_Respo]</td>
                                            <td>$line[Type]</td>
                                            <td>$line[etat_inscription]</td>
                                            <td class='icons-table'>
                                                <button class='btn-icons trash'><a href='delete.php?id=$line[id]'><i class='fas fa-trash'></i></a></button>
                                            </td>
                                            <td class='icons-table'>
                                                <button class='btn-icons pen'><a href='update.php?id=$line[id]'><i class='fas fa-pen-square'></i></a></button>
                                            </td>
                                        ";
                                        echo "</tr>";
                                }
                            }
                        ?>
                    </tbody>
                </table>
                <?php  }else if($rqrr>0){  ?>
                <br>liste des membres refus par responsable<br> 
                <table>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>CIN</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Téléphone</th>
                            <th>Capitaine</th>
                            <th>Nom équipe</th>
                            <th>id Respo</th>
                            <th>Type</th>
                            <th>Etat inscription</th>
                            <th>Statut</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  
                                                         
                            while ($line = $res->fetch(PDO::FETCH_ASSOC)) {
                                if ($line['etat_inscription']=='refus_respo') {

                                        echo "<tr>";
                                        echo "
                                            <td>$line[id]</td>
                                            <td>$line[CIN]</td>
                                            <td>$line[Nom]</td>
                                            <td>$line[Prenom]</td>
                                            <td>$line[Tel]</td>
                                            <td>$line[Capitaine]</td>
                                            <td>$line[nom_equipe]</td>
                                            <td>$line[id_Respo]</td>
                                            <td>$line[Type]</td>
                                            <td>$line[etat_inscription]</td>
                                            <td class='icons-table'>
                                                <button class='btn-icons trash'><a href='delete.php?id=$line[id]'><i class='fas fa-trash'></i></a></button>
                                            </td>
                                            <td class='icons-table'>
                                                <button class='btn-icons pen'><a href='update.php?id=$line[id]'><i class='fas fa-pen-square'></i></a></button>
                                            </td>
                                        ";
                                        echo "</tr>";
                                }
                            }
                        }
                            $res->closeCursor();
                        ?>
                    </tbody>
                </table><br><br>
            
        </main>
    </section>
    <script src="../scripte/script.js"></script>
</body>
</html>
