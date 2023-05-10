<?php
    include "sidebar.php";
    include_once "connection.php";
     $terrain = trim($_GET['id']);
     $sql = "SELECT * FROM matchclub WHERE WEEK(temp_debut,1) = WEEK(NOW(),1) AND WEEK(temp_fin,1) = WEEK(NOW(),1) AND id_terrain = $terrain And (statut = 'accept' OR statut = 'fixe')";
     $result = $bdd->query($sql);

    // Parcours des résultats de la requête
  while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
     // Récupération des informations sur le match
     $equipe1 = $row['equipe1'];
     if(empty($row['equipe2'])) {
        $equipe2 = ' - ';
      } else {
        $equipe2 = $row['equipe2'];
      }
     $date_debut = date('H:i', strtotime($row['temp_debut']));
     $date_fin = date('H:i', strtotime($row['temp_fin']));
     // Calcul de l'indice de la case correspondant à la date de début du match
     $dayOfWeek = date('N', strtotime($row['temp_debut']));
     $hour = date('H', strtotime($row['temp_debut']));
     $index = $hour - 8;
     if ($index < 0 || $index > 9) {
         continue;
     }
     // Remplissage de la case correspondante avec les informations sur le match
     echo "<script>
        function loadTableData() {
            // Votre code pour ajouter les données dans le tableau ici
            document.querySelector('table tbody tr:nth-child(" . ($index + 1) . ") td:nth-child(" . ($dayOfWeek + 1) . ")').innerHTML = '<b>" . $equipe1 . "</b> vs <b>" . $equipe2 . "</b><br>" . $date_debut . " - " . $date_fin . "'
        }
        window.onload = loadTableData;
        </script>";
  }
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

     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/style.css">
    <style>
        table {
            border-collapse: collapse;
            width: 75%;
            height: 75%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        th:first-child, td:first-child {
            text-align: left;
        }

        tbody th {
            background-color: #f2f2f2;
        }

        tbody td {
            background-color: #fff;
        }
    </style> 
</head>

<body>  
  <section id="content">
        <main>            
          
            </ul>
            <ul class="box-info">

            <li>
                    <i class='fc-icon fc-icon-right-single-arrow' ></i>
                    <span class="text fc-icon fc-icon-right-single-arrow">
                        <button class="btn col-md-3"><a href="calenderNext.php?week=<?php echo date('W', strtotime('last week')); ?>">Précédente</a></button>
                    </span>
                    
                </li>

                <li>
                    <i class='fc-icon fc-icon-right-single-arrow' ></i>
                    <span class="text fc-icon fc-icon-right-single-arrow">
                        <button class="btn col-md-6"><a href="calenderNext.php?week=<?php echo date('W', strtotime('last week')); ?>">Précédente</a></button>
                    </span>
                    
                </li>
                <li>
                    <i class='' ></i>
                    <span class="text">
                        <?php
                            $aujourdhui = getdate();
                            echo "Nous sommes le :" . $aujourdhui['mday'] . " " . $aujourdhui['month'] . " " . $aujourdhui['year'];
                        ?>
                    </span>
                    <button class="button-7 bx" role="button" style="width:121px;height:39px;background-color: rgb(255,253,44);color: #16774a; border-color :rgb(255,253,44);" onclick="window.location.href='AjouterMembre.php'">Ajouter</button>
                </li>
                <li>
                    <i class='fc-next-button fc-button fc-state-default fc-corner-right' ></i>
                    <span class="text fc-next-button fc-button fc-state-default fc-corner-right">
                        <div class="btn col-md-3"><a href="calenderPreview.php?week=<?php echo date('W', strtotime('next week')); ?>">Suivante</a></div> 
                    </span>
                    <button class="button-7 bx" role="button" style="width:121px;height:39px;background-color: rgb(255,253,44);color: #16774a; border-color :rgb(255,253,44);" onclick="window.location.href='AjouterMembre.php'">Ajouter</button>
                </li>
            </ul> <br><br><br><br><br><br><br> 
            <div  class="table-data">
                <div class="order ">

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Lundi<br><?php echo date('d/m/Y', strtotime('monday this week')); ?></th>
                                    <th>Mardi<br><?php echo date('d/m/Y', strtotime('tuesday this week')); ?></th>
                                    <th>Mercredi<br><?php echo date('d/m/Y', strtotime('wednesday this week')); ?></th>
                                    <th>Jeudi<br><?php echo date('d/m/Y', strtotime('thursday this week')); ?></th>
                                    <th>Vendredi<br><?php echo date('d/m/Y', strtotime('friday this week')); ?></th>
                                    <th>Samedi<br><?php echo date ('d/m/Y', strtotime('saturday this week')); ?></th>
                                    <th>Dimanche<br><?php echo date('d/m/Y', strtotime('sunday this week')); ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th class="align-middle">8h - 9h</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="align-middle">9h - 10h</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="align-middle">10h - 11h</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="align-middle">11h - 12h</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="align-middle">12h - 13h</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="align-middle">13h - 14h</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="align-middle">14h - 15h</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="align-middle">15h - 16h</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="align-middle">16h - 17h</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <th class="align-middle">17h - 18h</th>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                </div>
            </div>
        </main>
    </section>
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-+JZJzvJZJzvJzvJZJzvJZJzvJZJzvJZJzvJZJzvJZJzvJZJzvJZJzvJZJzvJZJz"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../responsable/scripte/script.js"></script> -->
    <!-- <script>
// Récupération de tous les éléments <td> du tableau
const cells = document.querySelectorAll('td');

// Ajout d'un écouteur d'événement sur chaque cellule
cells.forEach(cell => {
  cell.addEventListener('click', () => {
    // Récupération du contenu actuel de la cellule
    const currentContent = cell.textContent.trim();

    // Affichage d'une boîte de dialogue pour saisir les nouvelles informations
    const promptText = 'Entrez les nouvelles informations (équipe 1, équipe 2, date de début, date de fin) séparées par des virgules :';
    const newContent = prompt(promptText, currentContent);

    // Modification du contenu de la cellule si de nouvelles informations ont été saisies
    if (newContent !== null) {
      // Séparation des nouvelles informations en un tableau
      const newData = newContent.split(',');

      // Vérification que le tableau contient bien 4 éléments
      if (newData.length === 4) {
        // Extraction des 4 éléments du tableau
        const equipe1 = newData[0].trim();
        const equipe2 = newData[1].trim();
        const dateDebut = newData[2].trim();
        const dateFin = newData[3].trim();

        // Modification du contenu de la cellule
        cell.innerHTML = `
          <div>
            <div>${equipe1} vs ${equipe2}</div>
            <div>${dateDebut} - ${dateFin}</div>
          </div>
        `;

        // Envoi d'une requête AJAX pour enregistrer la modification dans la base de données
        const row = cell.parentNode;
        const day = row.cells[0].textContent.trim();
        const time = row.cells[0].textContent.trim();
        const date = row.cells[cell.cellIndex].getAttribute('data-date');
        const court = cell.cellIndex;
        const data = {equipe1, equipe2, dateDebut, dateFin };
        console.log('Données envoyées en POST :', data);
        fetch('editDatabase.php', {
          method: 'POST',
          body: JSON.stringify(data),
          headers: {
            'Content-Type': 'application/json'
          }
        })
        .then(response => response.json())
        .then(data => console.log('Réponse du serveur :', data))
        //.catch(error => console.error(error));
      } else {
        alert('Veuillez entrer les nouvelles informations séparées par des virgules.');
      }
    }
  });
});
</script> -->
</body>
</html>