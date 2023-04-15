<?php 
    require_once 'connection.php';
    include "sidebar.php";
    $CIN=$_GET['id'];
    $reponse=$bdd->prepare('SELECT * FROM user WHERE CIN =:CIN ');
    $reponse->execute(array(':CIN'=>$CIN));//':password'=>$mdp
    $data = $reponse->fetch();
    //AND password = :password   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/profil.css"> 
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <section id="content">
        <main>
            <div class="head-title">
                <div class="container emp-profile">
                    <form method="post">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="profile-img">
                                    <?php if ($data && isset($data['img'])) { ?>
                                        <img src="<?php echo $data['img'];?>" alt=""/>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="profile-head">
                                    <h5>
                                        les informations personnel 
                                    </h5>
                                    <h6>
                                        <?php echo $data['Nom_equipe'] ?? '';?>
                                    </h6>
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <div class="tab-content profile-tab" id="myTabContent">
                                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <?php if ($data && is_array($data)) { ?>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>CIN</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $data['CIN'] ?? '';?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Nom</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $data['Nom'] ?? '';?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Prénom</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $data['Prenom'] ?? '';?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Téléphone</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $data['Tel'] ?? '';?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>Email</label>
                                                </div>
                                                <div class="col-md-6">
                                                    <p><?php echo $data['Email'] ?? '';?></p>
                                                </div>
                                            </div>
                                            <div class=" row">
                                                <div class="btn col-md-6"><a href="#" >Editer</a></div>
                                                <div class="btn col-md-6"><a href="#" >Suprimer</a></div>
                                            </div>
                                        <?php } else { ?>
                                            <p>Aucune donnée trouvée.</p>
                                        <?php } ?>
                                    </div>
                                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <label>Your Bio</label><br/>
                                                <p>Your detail description</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>           
                </div>
            </div>
        </main>
    </section>
</body>
</body>
</html>