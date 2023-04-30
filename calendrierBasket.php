
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>calendrier de Basket-ball</title>

    <title>Liste of user</title>
    <link rel="stylesheet" href="../responsable/css/tble.css">
    <link rel="stylesheet" href="../responsable/css/nav.css">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../responsable/css/style.css">
    <link rel="stylesheet" href="../responsable/css/sidebar.css">
    <link rel="stylesheet" href="https://kit.fontawesome.com/6404735ed8.css" crossorigin="anonymous">


    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../responsable/css/style.css">
    <script src="https://kit.fontawesome.com/6404735ed8.js" crossorigin="anonymous"></script>



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
<?php 
include 'navbar.php';
?>   
<?php
    include "sidebar.php";
?>

    <section id="content">
        <main>
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
                                    <th>Samedi<br><?php echo date('d/m/Y', strtotime('saturday this week')); ?></th>
                                    <th>Dimanche<br><?php echo date('d/m/Y', strtotime('sunday this week')); ?></th>
                                    <th>Action</th>
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
                                    <td class='icons-table'>
                                        <a class='status completed' href='#'>
                                            <i class='bx  bxs-trash' ></i>
                                            <span class="text"></span>
                                        </a>
                                        <a class='status completed' href='#'>
                                            <i class='bx  bxs-edit' ></i>
                                            <span class="text"></span>
                                        </a>
                                    </td>
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
                                    <td class='icons-table'>
                                        <a class='status completed' href='#'>
                                            <i class='bx  bxs-trash' ></i>
                                            <span class="text"></span>
                                        </a>
                                        <a class='status completed' href='#'>
                                            <i class='bx  bxs-edit' ></i>
                                            <span class="text"></span>
                                        </a>
                                    </td>
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
                                    <td class='icons-table'>
                                        <a class='status completed' href='#'>
                                            <i class='bx  bxs-trash' ></i>
                                            <span class="text"></span>
                                        </a>
                                        <a class='status completed' href='#'>
                                            <i class='bx  bxs-edit' ></i>
                                            <span class="text"></span>
                                        </a>
                                    </td>
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
                                    <td class='icons-table'>
                                        <a class='status completed' href='#'>
                                            <i class='bx  bxs-trash' ></i>
                                            <span class="text"></span>
                                        </a>
                                        <a class='status completed' href='#'>
                                            <i class='bx  bxs-edit' ></i>
                                            <span class="text"></span>
                                        </a>
                                    </td>
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
                                    <td class='icons-table'>
                                        <a class='status completed' href='#'>
                                            <i class='bx  bxs-trash' ></i>
                                            <span class="text"></span>
                                        </a>
                                        <a class='status completed' href='#'>
                                            <i class='bx  bxs-edit' ></i>
                                            <span class="text"></span>
                                        </a>
                                    </td>
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
                                    <td class='icons-table'>
                                        <a class='status completed' href='#'>
                                            <i class='bx  bxs-trash' ></i>
                                            <span class="text"></span>
                                        </a>
                                        <a class='status completed' href='#'>
                                            <i class='bx  bxs-edit' ></i>
                                            <span class="text"></span>
                                        </a>
                                    </td>
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
                                    <td class='icons-table'>
                                        <a class='status completed' href='#'>
                                            <i class='bx  bxs-trash' ></i>
                                            <span class="text"></span>
                                        </a>
                                        <a class='status completed' href='#'>
                                            <i class='bx  bxs-edit' ></i>
                                            <span class="text"></span>
                                        </a>
                                    </td>
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
                                    <td class='icons-table'>
                                        <a class='status completed' href='#'>
                                            <i class='bx  bxs-trash' ></i>
                                            <span class="text"></span>
                                        </a>
                                        <a class='status completed' href='#'>
                                            <i class='bx  bxs-edit' ></i>
                                            <span class="text"></span>
                                        </a>
                                    </td>
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
                                    <td class='icons-table'>
                                        <a class='status completed' href='#'>
                                            <i class='bx  bxs-trash' ></i>
                                            <span class="text"></span>
                                        </a>
                                        <a class='status completed' href='#'>
                                            <i class='bx  bxs-edit' ></i>
                                            <span class="text"></span>
                                        </a>
                                    </td>
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
                                    <td class='icons-table'>
                                        <a class='status completed' href='#'>
                                            <i class='bx  bxs-trash' ></i>
                                            <span class="text"></span>
                                        </a>
                                        <a class='status completed' href='#'>
                                            <i class='bx  bxs-edit' ></i>
                                            <span class="text"></span>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="row">
                            <div class="btn col-md-6"><a href="#" >Suprimer</a></div>
                        </div>
                    
                </div>
            </div>
        </main>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
        integrity="sha384-+JZJzvJZJzvJzvJZJzvJZJzvJZJzvJZJzvJZJzvJZJzvJZJzvJZJzvJZJzvJZJz"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="../responsable/scripte/script.js"></script>
</body>
</html>