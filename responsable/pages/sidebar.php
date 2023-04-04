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

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
	
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
					<i class='bx bxs-shopping-bag-alt' ></i>
					<span class="text">Order</span>
				</a>
			</li>
			<li>
				<a href="#">
					<i class='bx bxs-message-dots'></i>
					<div class="listeU">
					<span class="text">list of user</span>
						<a href="../affiche_user/inscrit.php"><li><button class="dropdown-item" type="button">inscrit</button></li></a>
						<a href="../affiche_user/attent_respo.php"><li><button class="dropdown-item" type="button">attent responsable</button></li></a>
						<a href="../affiche_user/attent_capit.php"><li><button class="dropdown-item" type="button">attent capitaine</button></li></a>
						<a href="../affiche_user/refus_respo.php"><li><button class="dropdown-item" type="button">refus responsable</button></li></a>
						<a href="../affiche_user/refus_capit.php"><li><button class="dropdown-item text" type="button">refus capitaine</button></li></a>
					</div>
				</a>
			</li>
			<li>
				<a href="equipe.php">
					<i class='bx bxs-group' ></i>
					<span class="text">Team</span>
				</a>
			</li>
			<li>
				<a href="profil.php">
					<i class='bx bxs-doughnut-chart' ></i>
					<span class="text">Profil</span>
				</a>
			</li> 
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Settings</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Logout</span>
				</a>
			</li>
		</ul>
	</section>
	<script src="../scripte/script.js"></script>

</body>
</html>