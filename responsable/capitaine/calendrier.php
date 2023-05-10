<?php 
	//include "navbar.php";
    include 'sidebar.php';
	include_once 'connection.php';
	// Sélection de toutes les lignes avec etat = "fixe"
    $stmt = $bdd->prepare("SELECT * FROM matchclub WHERE statut = 'fixe'");
    $stmt->execute();
    //setlocale(LC_TIME, 'fr_FR.utf8');
// Traitement sur chaque ligne sélectionnée
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
    // Extraction de la date et de l'heure de début et fin
    $date = date('Y-m-d', strtotime($row['temp_debut']));
    $heure_debut = date('H:i:s', strtotime($row['temp_debut']));
    $heure_fin = date('H:i:s', strtotime($row['temp_fin']));
    $jourSemaine = date('l', strtotime($date)); // Récupération du jour de la semaine
    $dateCourante = date("Y-m-d");

    // date du jour de la semaine entré par l'utilisateur dans la semaine courante
    $dateJourSemaine = date("Y-m-d", strtotime("this week $jourSemaine", strtotime($dateCourante)));
    // Mise à jour de la colonne temp_debut et temp_fin avec la nouvelle date et heure
    $stmt2 = $dbh->prepare("UPDATE matchclub SET temp_debut = :new_date_debut, temp_fin = :new_date_fin WHERE id_match = :id");
    $stmt2->bindParam(':new_date_debut', $dateJourSemaine . " " . $heure_debut);
    $stmt2->bindParam(':new_date_fin', $dateJourSemaine . " " . $heure_fin);
    $stmt2->bindParam(':id', $row['id_match']);
    $stmt2->execute();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>main</title>
    
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../responsable/css/style.css">
  <<link rel="stylesheet" href="https://kit.fontawesome.com/6404735ed8.css" crossorigin="anonymous">title>Document</title>

</head>
<body>
	<section id="content">
    	<main>
			<div class="head-title">
				<div class="left">
					<h1>Calendrier</h1>
				</div>

			</div>

			<ul class="box-info">
				<li>
					<i class='bx bx-basketball' ></i>
					<span class="text btn-primary">
						<a href="calender.php?id=2"  id="basketball-link">Basket-ball</a>
					</span>
				</li>
				<li>
					<i class='bx bx-football' ></i>
					<span class="text btn-primary">
						<a href="calender.php?id=1">Football</a>
						<p></p>
					</span>
				</li>
				<li>
					<i class='bx bxs-baseball' ></i>
					<span class="text btn-primary">
						<a href="calender.php?id=3">Volley-ball</a>
						<p></p>
					</span>
				</li>
			</ul>   
<style>
    @import url("https://fonts.googleapis.com/css?family=Lato:400,700&display=swap");
    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #ddd;
    }

    th, td {
      text-align: left;
      padding: 16px;
    }

    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    .icons-table{
      display: flex;
      justify-content: space-around;
    }
    .btn-icons i {
      font-size: 1.5em;
    }
    .plus i{
      color: powderblue;
    }
    .trash i{
      color: tomato;
    }
    .pen i{
      color: forestgreen;
    }

    .Tablebtns {
        display: flex;
    }
    .Tablentn {
        padding: 1em;
        background-color: rgb(157 151 151 / 73%);
        margin: 12px;
        border-radius: 12px;
        cursor: pointer;
        font-family: sans-serif;
        font-size: 0,8em;
        font-weight: 700;
    }


    body.dark {
    --light: #2f2f36;
    --grey: #273048;
    --dark: #cdcd90fc;
}

   </style>
    <!--
				</div>
				<div class="todo">
					<div class="head">
						<h3>Todos</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<ul class="todo-list">
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
						<li class="not-completed">
							<p>Todo List</p>
							<i class='bx bx-dots-vertical-rounded' ></i>
						</li>
					</ul>
				</div>
			</div>
    -->


		</main>

	</section>

	<script src="../scripte/script.js"></script>
  <script src="https://kit.fontawesome.com/6404735ed8.js" crossorigin="anonymous"></script>


</body>

</html>