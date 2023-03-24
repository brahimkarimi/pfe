

<?php 
//CIN	Nom	Prenom	Tel	Capitaine	nom_equie	id_Respo	Type	etat_inscription
include 'connection.php';

$requet="SELECT * from users ";
$res=$connection->query($requet);

if (!$res) {
    echo "la recuperation des donnees a ricintre un probleme '<br>'" ;
}

?>

<?php 
    
    '<link href="../css/style.css"></link>';
    include('sidebar.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lise of user </title>
    <link rel="stylesheet" href="../css/tble.css">
	<link rel="stylesheet" href="../css/nav.css">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/sidebar.css">


    
	<!-- My CSS -->
	<link rel="stylesheet" href="../css/style.css">
  <<link rel="stylesheet" href="https://kit.fontawesome.com/6404735ed8.css" crossorigin="anonymous">title>Document</title>


    


</head>
<body>
    <h2>Liste of user</h2>
    <section id="content">
        <main>
            <div class="head-title">
            
                        <br><br>
                        <table style="border-radius='2'">
                            <tr>
                                <th>CIN</th>
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Tel</th>
                                <th>Capitaine</th>
                                <th>Nom equie</th>
                                <th>id Respo</th>
                                <th>Type</th>
                                <th>etat_inscription</th>
                            </tr>

                            <?php
                            
                                while ($line = $res->fetch(PDO::FETCH_NUM)) {
                                    echo "<tr>";
                                    foreach ($line as $value) {
                                        echo "<td>$value</td>";
                                    }
                                    echo "</tr>";
                                }
                            
                            ?>
                        </table>
                        <?php $res->closeCursor()?>
                        <?php 
                            //include 'sidebar.php'
                        ?>
            </div>
        </main>
    </section>
	<script src="../scripte/script.js"></script>
</body>
</html>