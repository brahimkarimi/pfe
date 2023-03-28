<?php 
    include "connection.php";

    $requet="SELECT nom_equipe, date_creation FROM equipe";
    $res=$connection->query($requet);

    if (!$res) {
        echo "la recuperation des donnees a ricintre un probleme '<br>'" ;
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste de equipe</title>
    <link rel="stylesheet" href="../css/tble.css">
	<link rel="stylesheet" href="../css/nav.css">
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/6404735ed8.js" crossorigin="anonymous"></script>

</head>
<body>
    <section id="content">
    	<main>
            <table>
                <tr>
                    <th>Nom equipe</th>
                    <th>image</th>
                    <th>Nom equipe</th>
                </tr>

                <?php 
                    while ($line=$res->fetch(PDO::FETCH_NUM)) {
                        echo "<tr>";
                        foreach ($line  as $value) {
                            echo"<td>$value</td>";
                        } 
                        echo "
                        <td class='icons-table'>
                            <button class='btn-icons trash'><i class='fa-sharp fa-solid fa-trash'></i></button>
                            <button class='btn-icons pen'><i class='fa-sharp fa-solid fa-pen-to-square'></i></button>
                        </td>
                        ";
                        echo "</tr>";
                    }
                ?>
            </table>
        </main>
    </section>

</body>
</html>