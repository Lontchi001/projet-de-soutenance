<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=projet1', 'root', '');
if (isset($_GET['id']) and $_GET['id'] > 0) {
    $getid = intval($_GET['id']);
    $requser = $bdd->prepare('SELECT * FROM administrateur WHERE id = ? ');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();


    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Admin Dashboard </title>
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
        <link rel="stylesheet" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
        <link href="vendor/bootstrap.min.css" rel="stylesheet">
   <link href="vendor/all.min.css" rel="stylesheet">
   <script src="vendor/bootstrap.bundle.min.js"></script>
   <script src="vendor/all.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/skin.css">
    </head>

    
    <body>

        <!--*******************
            Preloader start
        ********************-->
        <div id="preloader">
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div>
     
        <div id="main-wrapper">

        <div class="nav-header" style="background:white;">

    <a href="dashboard.php?id= <?php echo $userinfo['id']?>" class="brand-logo">
                  
                    <img class="logo-compact" src="images/logo-text-white.png" alt="">
                    <img  src="images/CFPC.png" style="width: 65px; margin-left: -10px; height: 50px;" alt="">
                    <h4 class="brand-title" >ESPACE ADMIN </h2> 
        
        <div>
       
        </div>
    </a>

    <div class="nav-control">
        <div class="hamburger">
            <span class="line"></span><span class="line"></span><span class="line"></span>
        </div>
    </div>
    </div>


            <div class="header">
                <div class="header-content">
                    <nav class="navbar navbar-expand">
                        <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
                            <a href="../Projet/Accueil.php" class="btn btn-dark">Page d'accueil du CFPC</a> 
                        </div>
  

                            <ul class="navbar-nav header-right">
                          
                                <li class="nav-item dropdown header-profile">
                                    <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                        <img src="images/avatar/<?php
                                        if (!empty($userinfo['tof'])) {
                                            echo $userinfo['tof'];
                                        }else {
                                            echo 'Capture.jpg';
                                        }
                                         ?>" width="60" alt="">
                                        <span><?php echo $userinfo['Email']; ?></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a href="profil.php?id= <?php echo $userinfo['id']; ?>" class="dropdown-item ai-icon">
                                            <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-user">
                                                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                                <circle cx="12" cy="7" r="4"></circle>
                                            </svg>
                                            <span class="ml-2">Profile </span>
                                        </a>
                                  
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
            <!--**********************************
                Header end ti-comment-alt
            ***********************************-->

            <?php
            require_once('navbar.php');
            ?>
       

            <!--**********************************
                Content body start
            ***********************************-->
        
            <div class="content-body">
            <!-- row -->
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-12 col-xxl-6 col-sm-12">
                        <div class="row">
                            <div class="col-xl-6 col-xxl-6 col-sm-6">
                                <div class="widget-stat card">
                                    <div class="card-body">
                                        <h4 class="card-title">Effectif total des étudiants pré-inscrits</h4>
                                        <h3>
                                            <?php

                                            $bd = new PDO('mysql:host=localhost;dbname=projet1', 'root', '');
                                            $nb = $bd->prepare('SELECT * FROM etudiant ');
                                            $nb->execute();
                                            $nn = $nb->fetchAll();
                                            $nb = count($nn);
                                            echo $nb;

                                            ?>
                                             </h3>         
                                        <div class="progress mb-2">
                                            <div class="progress-bar progress-animated bg-primary" style="width: 20%">
                                            </div>
                                        </div>
                                        <small>Progression</small>
                                    </div>
                                </div>
                            </div>



                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-xxl-4 col-md-12">

                    </div>

                    <div class="col-xl-12 col-xxl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title"><b> Liste des étudiants pré-inscrit</b></h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive recentOrderTable">
                                    <table class="table verticle-middle table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Noms</th>
                                                <th scope="col">Prénoms</th>
                                                <th scope="col">Date de naissance</th>
                                                <th scope="col">Lieu de naissance</th>
                                                <th scope="col">Sexe</th>
                                                <th scope="col">Pays d'origine</th>
                                                <th scope="col">Ville de résidence</th>
                                                <th scope="col">Téléphone</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Formation désirée</th>
                                                <th scope="col">Diplôme</th>
                                                <th scope="col">Année d'obtention</th>
                                                <th scope="col">Pseudo</th>
                                                <th scope="col">Nom du parent/tuteur</th>
                                                <th scope="col">Numéro du parent/tuteur</th>
                                                <th scope="col">Ville de résidence du parent/tuteur</th>

                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                            <?php
                                            $bdd = mysqli_connect("localhost", "root", "", "projet1");
                                            if (!$bdd) {
                                                echo "Vous n'êtes pas connecté à la base de donnée";
                                            }

                                            $req = mysqli_query($bdd, "SELECT * FROM etudiant");
                                            if (mysqli_num_rows($req) == 0) {
                                                echo "Aucun étudiant n'est inscrit pour le moment !!";
                                            } else {
                                                while ($row = mysqli_fetch_assoc($req)) {
                                                    ?>


                                                <td><?= $row['id'] ?></td>
                                                <td><?= $row['Nom'] ?></td>
                                                <td><?= $row['Prénom'] ?></td>
                                                <td><?= $row['datedenaissance'] ?></td>
                                                <td><?= $row['Lieu'] ?></td>
                                                <td><?= $row['Sexe'] ?></td>
                                                <td><?= $row['pays'] ?></td>
                                                <td><?= $row['Ville'] ?></td>
                                                <td><?= $row['telephone'] ?></td>
                                                <td><?= $row['email'] ?></td>
                                                <td><?= $row['Formation'] ?></td>
                                                <td><?= $row['Diplome'] ?></td>
                                                <td><?= $row['Annee'] ?></td>
                                                <td><?= $row['pseudo'] ?></td>
                                                <td><?= $row['nomP'] ?></td>
                                                <td><?= $row['numP'] ?></td>
                                                <td><?= $row['villeP'] ?></td>
                                    
                                            
                                                        <td>
                                                            <a href="modifier.php?id=<?= $row['id'] ?>" class="btn btn-sm btn-primary"><i
                                                                    class="la la-pencil"></i></a>

                                                            <button type="button" class="btn btn-danger"  data-bs-toggle="modal" data-bs-target="#exampleModal"><i
                                                                    class="la la-trash-o"></i></button>

                                           
                                                                   

                                                        </td>
                                                    </tr>
                                       
                                                    <?php
                                                }
                                            }
                                            ?>
                                                                       
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>


        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                        <div class="modal-dialog">
                                                                            <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                Voulez-vous vraiment supprimer cet étudiant?
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                                                                <a href="supprimer.php?id=<?= $row['id'] ?>" class="btn btn-primary">Oui</a>
                                                                            </div>
                                                                            </div>
                                                                        </div>
                                                                        </div>
        <!--**********************************
            Main wrapper end
        ***********************************-->

        <!--**********************************
            Scripts
        ***********************************-->
        <!-- Required vendors -->
        <script src="vendor/global/global.min.js"></script>
        <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <script src="js/custom.min.js"></script>

        <!-- Chart Morris plugin files -->
        <script src="vendor/raphael/raphael.min.js"></script>
        <script src="vendor/morris/morris.min.js"></script>


        <!-- Chart piety plugin files -->
        <script src="vendor/peity/jquery.peity.min.js"></script>

        <!-- Demo scripts -->
        <script src="js/dashboard/dashboard-2.js"></script>

        <!-- Svganimation scripts -->
        <script src="vendor/svganimation/vivus.min.js"></script>
        <script src="vendor/svganimation/svg.animation.js"></script>
        <script src="js/styleSwitcher.js"></script>

        <script src="scriptDataTable/jquery-3.5.1.js"></script>
                                <script src="scriptDataTable/jquery.dataTables.min.js"></script>
                                <script src="scriptDataTable/rosto.infinity.js"></script>

    </body>

    </html>
    <?php
}
?>