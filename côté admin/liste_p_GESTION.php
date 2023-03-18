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
       
  
    </head>

    <body>
    <?php
        require 'en-tete.php';

        ?>
        
     
        <div id="main-wrapper">
        
            <div class="content-body">
            <!-- row -->
            <div >

                <div class="row" style="padding:100px 0px 0px 0px">
                   

                    <div >
                        <div class="card">
                            <div class="card-header">
                               <center> <h4 class="card-title">Liste des étudiants pré-inscrit en gestion</h4></center>
                            </div>
                            <div class="card-body" >
                                <div class="table-responsive recentOrderTable">
                                    <table class="table verticle-middle table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Nom</th>
                                                <th scope="col">Prénom</th>
                                                <th scope="col">Date de naissance</th>
                                                <th scope="col">Lieu de naissance</th>
                                                <th scope="col">Sexe</th>
                                               
                                                <th scope="col">Formation désirée</th>
                                                
                                             
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>

                                            <?php
                                            $bdd = mysqli_connect("localhost", "root", "", "projet1");
                                            if (!$bdd) {
                                                echo "Vous n'êtes pas connecté à la base de donnée";
                                            }

                                            $req = mysqli_query($bdd, "SELECT * FROM etudiant WHERE Formation = 'Comptabilité informatisée de gestion(CIG)'");
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
                                              
                                                <td><?= $row['Formation'] ?></td>
                                                
                                                
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

        <script src="vendor/global/global.min.js"></script>
        <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <script src="js/custom.min.js"></script>

       




   
   
   
       
    </body>
    <script>
window.addEventListener("load",window.print());
</script>
    </html>
    <?php
}
?>