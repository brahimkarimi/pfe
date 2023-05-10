<?php 
    include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="../css/style.css">
	<link rel="stylesheet" href="../css/sidebar.css">

	<link rel="stylesheet" href="../css/sidemenu.css">
	</style>
</head>
<body>
<section id="sidebar">
		<a href="#" class="brand">
		<img src="../images/spotclub.svg" style="width: 38px; height: px;" >
			<span class="text">SpoClub</span>
		</a>
		<ul class="side-menu top">
			<li class="active">
				<a href="main.php">
					<i class='bx bxs-dashboard' ></i>
					<span class="text">Dashboard</span>
				</a>
			</li>
			<li>
				<a href="order.php">
					<i class='bx bxs-detail' ></i>
					<span class="text">Demandes d'inscription</span>
				</a>
			</li>
			<li>
				<a href="messages.php">
				    <i class='bx bxs-message-dots' ></i>
					<span class="text">Messages</span>
				</a>
			</li>
			<li>
				<a href="afficherUSER.PHP">
					<i class='bx bxs-notepad' ></i>
					<span class="text">Liste d'utilisateurs</span>
				</a>
			</li>
			<li>
				<a href="equipe.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Equipes</span>
				</a>
			</li>
			<li>
				<a href="profil.php">
					<i class='bx bxs-user-circle' ></i>
					<span class="text">Profile</span>
				</a>
			</li> 
			<li>
				<a href="calendrier.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Calendrier</span>
				</a>
			</li> 
		</ul>
		<ul class="mcd-menu side-menu top">
			<li>
				<a href="">
					<i class="fa fa-gear"></i>
					<strong>Parametres</strong>
				</a>
				<ul>
					<li><a href="#"><i class=""></i>Ajouter Responsable</a></li>
					<li>
						<a href="#"><i class=""></i>Modifier Profile</a>
						<!-- <ul>
							<li><a href="#"><i class="fa fa-female"></i>Leyla Sparks</a></li>
							<li><a href="#"><i class="fa fa-male"></i>Gleb Ismailov</a></li>
							<li><a href="#"><i class="fa fa-female"></i>Viktoria Gibbers</a></li>
						</ul> -->
					</li>
					<li><a href="#"><i class=""></i>Vider Base de Donnee</a></li>
				</ul>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="deconnexion.php" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Deconnexion</span>
				</a>
			</li>
		</ul>
	</section>
	<script src="../scripte/script.js"></script>

</body>
</html>