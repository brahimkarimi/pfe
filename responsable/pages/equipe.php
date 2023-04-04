<?php 

include 'connection.php';

$requet=" SELECT * from equipe ";
$res=$connection->query($requet);

if (!$res) {
    echo "La récupération des données a rencontré un problème '<br>'" ;
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
    <title>Liste des équipes</title>
    <link rel="stylesheet" href="../css/tble.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/6404735ed8.js" crossorigin="anonymous"></script>

    
</head>
<body>
    <h2>Liste des équipes</h2>
    <section id="content">
        <main>
            <div class="head-title">
                <button class="button-7 bx" role="button">Ajouter</button>   
                <br><br>
                <table style='border-radius: 2px;'>
                    <tr>
                        <th>Nom Equipe</th>
                        <th>Date de création</th>
                        <th>Nombre de joueurs</th>
                        <th>Actions</th>
                    </tr>

                    <?php
                    
                        while ($line = $res->fetch(PDO::FETCH_NUM)) {
                           // echo "<tr>";
                            echo "
                            <tr>
                                <td>$line[0]</td>
                                <td>$line[1]</td>
                                <td>$line[2]</td>
                                <td class='icons-table'>
                                    <button class='btn-icons trash'><a href='deleteEquipe.php?id=$line[0]'><i class='fas fa-trash'></i></a></button>
                                </td>
                                <td class='icons-table'>
                                    <button class='btn-icons pen'><a href='updateEquipe.php?id=$line[0]'><i class='fas fa-pen-square'></i></a></button>
                                </td>
                                </tr>
                            ";
                            //echo "</tr>";
                        }
                    ?>
                </table>
            </div>
        </main>
    </section>
</body>
</html>