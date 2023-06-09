<?php 
    include 'sidebar.php';
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
	<link rel="stylesheet" href="../css/style.css">
  <<link rel="stylesheet" href="https://kit.fontawesome.com/6404735ed8.css" crossorigin="anonymous">title>Document</title>
    <link rel="stylesheet" href="../css/tble.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/sidebar.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/6404735ed8.css" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://kit.fontawesome.com/6404735ed8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/stylecalender.css">

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
			</div>
				<div class="todo">
					<div class="head">
						<h3>Todos</h3>
						<i class='bx bx-plus' ></i>
						<i class='bx bx-filter' ></i>
					</div>
<div id="container">
                        <h1>&bull; Reserver un match &bull;</h1>
                        <div class="underline">
                        </div>
                        <div class="icon_wrapper">
                            <svg class="icon" viewBox="0 0 145.192 145.192">
                                <path d="M126.82,32.694c-2.804,0-5.08,2.273-5.08,5.075v2.721c-1.462,0-2.646,1.185-2.646,2.647v1.995    c0,1.585,1.286,2.873,2.874,2.873h20.577c1.462,0,2.646-1.185,2.646-2.647v-3.041c0-1.009-0.816-1.825-1.823-1.825v-2.722    c0-2.802-2.276-5.075-5.079-5.075h-1.985v-3.829c0-3.816-3.095-6.912-6.913-6.912h-0.589h-20.45c0-2.67-2.164-4.835-4.833-4.835    H56.843c-2.67,0-4.835,2.165-4.835,4.835H34.356v-3.384h-9.563v3.384v1.178h-7.061v1.416c-2.67,0.27-10.17,1.424-13.882,5.972    c-1.773,2.17-2.44,4.791-1.983,7.793c0.463,3.043,1.271,6.346,2.128,9.841c2.354,9.616,5.024,20.515,0.549,28.077    C2.647,79.44-3.125,90.589,2.201,99.547c4.123,6.935,13.701,10.44,28.5,10.44c1.186,0,2.405-0.023,3.658-0.068v9.028h-0.296    c-2.516,0-4.558,2.039-4.558,4.558v4.566h100.04v-4.564c0-2.519-2.039-4.558-4.558-4.558h-0.297V84.631h0.297    c2.519,0,4.558-2.037,4.558-4.556v-0.009c0-2.516-2.039-4.556-4.556-4.556l-36.786-0.009V61.973c0-2.193-1.777-3.971-3.972-3.971    v-4.711h0.456c1.629,0,2.952-1.32,2.952-2.949h14.227V34.459h1.658c2.672,0,4.834-2.165,4.834-4.834h20.45v3.069H126.82z     M34.06,75.511c-2.518,0-4.558,2.04-4.558,4.556v0.009c0,2.519,2.042,4.556,4.558,4.556h0.296v24.12l-0.042-1.168    c-15.994,0.574-26.122-2.523-30.106-9.229C-0.464,90.5,4.822,80.347,6.55,77.423c4.964-8.382,2.173-19.774-0.29-29.825    c-0.843-3.442-1.639-6.696-2.088-9.638c-0.354-2.35,0.129-4.3,1.484-5.958c3.029-3.714,9.509-4.805,12.076-5.1v1.233h7.061v1.49    v2.684c-2.403,1.114-4.153,2.997-4.676,5.237H18.15c-0.584,0-1.056,0.474-1.056,1.056v0.83c0,0.584,0.475,1.056,1.056,1.056h1.984    c0.561,2.18,2.304,3.999,4.658,5.092v0.029c0,0-2.282,20.823,16.479,22.099v1.102c0,1.177,0.955,2.133,2.133,2.133h3.297    c1.178,0,2.133-0.956,2.133-2.133V50.135c0-1.177-0.955-2.132-2.133-2.132h-3.297c-1.178,0-2.133,0.955-2.133,2.132    c-1.575-0.235-5.532-1.17-6.635-4.547c2.36-1.092,4.109-2.913,4.669-5.097h1.308c0.722,0,1.309-0.584,1.309-1.308v-0.578    c0-0.584-0.475-1.056-1.056-1.056h-1.539c-0.542-2.332-2.416-4.271-4.968-5.363v-2.559h17.651c0,2.67,2.166,4.835,4.836,4.835 h2.392v15.88h13.639c0,1.629,1.321,2.949,2.951,2.949h0.899v4.711c-2.194,0-3.972,1.778-3.972,3.971v13.529L34.06,75.511z     M95.188,101.78c0,8.655-7.012,15.665-15.664,15.665c-8.653,0-15.667-7.01-15.667-15.665c0-8.647,7.014-15.664,15.667-15.664    C88.177,86.116,95.188,93.132,95.188,101.78z M97.189,45.669h-9.556c0-0.896-0.726-1.62-1.619-1.62H74.494    c-0.896,0-1.621,0.727-1.621,1.62h-8.967v-11.21h33.283V45.669z"></path>
                            <path d="M70.865,101.78c0,4.774,3.886,8.657,8.66,8.657c4.774,0,8.657-3.883,8.657-8.657c0-4.773-3.883-8.656-8.657-8.656    C74.751,93.124,70.865,97.006,70.865,101.78z"></path>
                        </svg>
                        </div>
                        <div id="formulaires">
                            <form action="reservation.php" method="post" id="contact_form">
                                <div class="name">
                                    <label for="equipe1"></label>
                                    <!-- <input type="text" placeholder="equipe1" name="equipe1" id="name_input" required> -->
                                    <p><em> EQUIPE 1 :</em></p>
                                    <select value="equipe1">
                                    <?php 
                                        $sql = "SELECT Nom_equipe FROM equipe";
                                        $stmt = $bdd->prepare($sql);
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            echo "<option>";
                                            echo  $row['Nom_equipe'] . "<br>";
                                            echo "</option>";
                                    } ?>
                                    </select>
                                </div>
                                <div class="email">
                                    <label for="equipe2"></label>
                                    <!-- <input type="text" placeholder="equipe2" name="equipe2" id="name_input" required> -->
                                    <p><em> EQUIPE 2 :</em></p>
                                    <select value="equipe1">
                                        <Option></Option>
                                    <?php 
                                        $sql = "SELECT Nom_equipe FROM equipe";
                                        $stmt = $bdd->prepare($sql);
                                        $stmt->execute();
                                        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                                            
                                            echo "<option>";
                                            echo  $row['Nom_equipe'] . "<br>";
                                            echo "</option>";

                                    } ?>
                                    </select>
                                </div>
                                <div class="subject">
                                    <label for="subject"></label>
                                    <select placeholder="Subject line" name="subject" id="subject_input" required>
                                        <option disabled hidden selected>Votre choix :</option>
                                        <option>Football</option>
                                        <option>Basket-ball</option>
                                        <option>Volley-ball</option>
                                    </select>
                                </div>
                                <div class="date">
                                    <p style="padding-top: 20px; padding-left: 30px;"><em>Soutaitez-vous que ce match soit fixe tout au long de l'année :</em></p>
                                    <div class="EquipeChoice " style="padding-top: 20px; padding-left: 30px;">
                                    
                                        <label class="input-group" for="newEquipe">
                                            <input type="radio" name="equipe" id="newEquipe"  value="newEquipe">
                                            Non :
                                        </label>
                                        <label class="input-group" for="oldEquipe">
                                            <input type="radio" name="equipe" id="oldEquipe" value="oldEquipe">
                                            Oui :
                                        </label>
                                        
                                    </div>
                                    
                                    <div id="content">
                                        <select id="chEq" name="selectChEq" style="display:none;">
                                            <option value="1">Lundi</option>
                                            <option value="2">Mardi</option>
                                            <option value="3">Mercredi</option>
                                            <option value="4">Jeudi</option>
                                            <option value="5">Vendredi</option>
                                            <option value="6">Samedi</option>
                                            <option value="7">Dimanche</option>
                                        </select>
                                        <div class="input-group">
                                            <input class="datepicker-input" type="date" name="equipeName" placeholder="date :" id="crEq" style="display:none;" >
                                        </div>
                                        </div>
                                    <label for="date_debut"> Heure début :</label>
                                    <input type="time" name="date_debut" id="date_debut_input" required>
                                </div>
                                <div class="date">
                                    <label for="date_fin">  Heure fin :</label>
                                    <input type="time" name="date_fin" id="date_fin_input" required>
                                </div>
                                <div class="submit">
                                    <input type="submit" value="Envoyer message" id="form_button" />
                                </div>
                            </form><!-- // End form -->
                        </div>
                        <button class="submit" type="button" onclick="ajouterFormulaire()" id="form_button">Ajouter un formulaire</button>
                        <button class="submit" type="button" onclick="enregistrer()" id="form_button">Reserver</button>
                    </div>
			</div>
		</main>

	</section>

	<script src="../scripte/script.js"></script>
  <script src="https://kit.fontawesome.com/6404735ed8.js" crossorigin="anonymous"></script>


</body>

</html>