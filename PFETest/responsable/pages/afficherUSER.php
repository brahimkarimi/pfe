<?php 
include 'connection.php';

$requete = "SELECT * FROM user";
$res = $bdd->query($requete);

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
        <div  class="table-data">
                <div class="order">
                    <button class="button-7 bx" role="button">Ajouter</button>   
                    <label for="my-select" class="my-select">Filtre par état d'inscription :</label>
                    <select id="my-select" name="options">
                        <optgroup label="Attente">
                        <option value="Attente_Respo">En attente responsable</option>
                        <option value="Attente_Capit">En attente capitaine</option>
                        </optgroup>
                        <optgroup label="Terminé">
                        <option value="Inscrit">Inscrit</option>
                        <option value="Refus_Capit">Refusé par capitaine</option>
                        <option value="Refus_Respo">Refusé par responsable</option>
                        </optgroup>
                    </select>
                    <br><br>
                    <table id="tableau">
                        <thead>
                            <tr>
                                <th>CIN</th>
                                <th>Nom</th>1
                                <th>Prénom</th>
                                <th>Téléphone</th>
                                <th>Capitaine</th>
                                <th>Nom équipe</th>
                                <th>id Respo</th>
                                <th>Type</th>
                                <th>Etat d'inscription</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php                                    
                                while ($line = $res->fetch(PDO::FETCH_ASSOC)) {
                                    echo "<tr>";
                                    echo "
                                        <td>$line[CIN]</td>
                                        <td>$line[Nom]</td>
                                        <td>$line[Prenom]</td>
                                        <td>$line[Tel]</td>
                                        <td>$line[Email]</td>
                                        <td>$line[Type]</td>
                                        <td>$line[état_inscription]</td>
                                        <td>$line[Nom_equipe]</td>
                                        <td>$line[id_Respo]</td>
                                        <td class='icons-table'>
                                            <a class='status completed' href='profileuser.php?id=$line[CIN]'>profile<i class=''></i></a>
                                        </td>
                                    ";
                                    echo "</tr>";
                                }
                                $res->closeCursor();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>                
        </main>
    </section>
    <!-- <script src="../scripte/script.js"></script> -->
    <script>
        // Récupération de la référence du menu déroulant et du tableau
        const selectFilter = document.getElementById('my-select');
        const tableau = document.getElementById('tableau');

        // Écouteur d'événement sur le menu déroulant
        selectFilter.addEventListener('change', () => {
        // Récupération de la valeur sélectionnée
        const selectedValue = selectFilter.value;
  
        // Parcours des lignes du tableau à partir de la deuxième ligne (la            première ligne correspond à l'en-tête)
        for (let i = 1; i < tableau.rows.length; i++) {
            const row = tableau.rows[i];
            const cell = row.cells[8]; // On suppose que la colonne à filtrer            est la première colonne
    
            // Si la valeur sélectionnée correspond à la valeur de la cellule            ou si la valeur sélectionnée est vide (cas "Tous")
            if (selectedValue === '' || cell.textContent === selectedValue) {
            row.style.display = ''; // Affichage de la ligne
            } else {
            row.style.display = 'none'; // Masquage de la ligne
            }
        }
        });

    </script>
</body>
</html>
