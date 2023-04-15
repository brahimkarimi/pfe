<?php 

include 'connection.php';

$requet="SELECT * from equipe ";
$res=$bdd->query($requet);

if (!$res) {
    echo "la recuperation des donnees a ricintre un probleme '<br>'" ;
}

?>

<?php 
    //include 'navbar.php';
    include('sidebar.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/tble.css">
	<link rel="stylesheet" href="../css/nav.css">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/6404735ed8.js" crossorigin="anonymous"></script>

    
</head>
<body>
    <h2>liste of Team</h2>
    <section id="content">
        <main>
        <div  class="table-data">
                <div class="order">
                    <button class="button-7 bx" role="button">Ajouter</button>      
                    <br><br>
                    <table style="border-radius='2'">
                        <tr>
                            <th>Nom Equipe</th>
                            <th>la date de creation</th>
                            <th>Nombre de joueur</th>
                            <th>id</th>
                        </tr>

                        <?php
                        
                            while ($line = $res->fetch(PDO::FETCH_NUM)) {
                                echo "<tr>";
                                foreach ($line as $value) {
                                    echo "<td>$value</td>";
                                }
                                ?>
                               
                                <td class='icons-table'>
                                    <a class='status completed' href='infoTeam.php?id=<?php echo $line[0]; ?>'>Detaile<i class=''></i></a>
                                </td>
                                <?php
                                    echo "</tr>";
                                }
                        ?>
                    </table>
                    <?php $res->closeCursor()?>
                    <?php 
                        //include 'sidebar.php'
                    ?>
                </div>
            </div>
        </main>
    </section>
    <link rel="stylesheet" href="../scripte/sidenav.js">
	<!-- <script src="../scripte/script.js"></script> -->
</body>
</html>