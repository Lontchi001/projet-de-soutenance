<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="vendor/bootstrap.min.css" rel="stylesheet">
      <link href="vendor/all.min.css" rel="stylesheet">
      <script src="vendor/bootstrap.bundle.min.js"></script> 
      <script src="vendor/all.min.js"></script>
      
      <link rel="stylesheet" href="css/styleC.css">
      <script>function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }</script>
    <title>Document</title>
</head>

<div class="topnav" id="myTopnav">
  <a href="javascript:void(0);" id="ico" onclick="myFunction()"> 
  <i class="fas fa-window-close"></i></a> 
      <br>
      <h5 style="color: white">Dashboard administrateur</h5>
    <a href="http://localhost:8080/Projet/Accueil.php#"><i class="fas fa-home"></i> Accueil</a>
    
   
    <?php
  if (isset($_SESSION['id']) and $userinfo['id'] == $_SESSION['id']) {
    ?>
    <a href="http://localhost:8080/Projet/compte_edit.php?id=<?php echo $userinfo['id']?>"><i class="far fa-edit"></i> Editer profil</a>
    <a href="déconnexion.php" id="dec" align="center"> Se déconnecter</a>
    <?php
  }
    ?>
  </div>
<body>


  <a href="javascript:void(0);" id="icon" style="text-decoration: none"  onclick="myFunction()">
      <i class="fa fa-bars"></i></a>
            
                <div class="container">
                   
                    <div class="head"> <a href="http://localhost:8080/Projet/FORMULAIRE.php" class="btn_add"><center><i class="fas fa-plus"> </i>Ajouter un étudiant</center></a></div>
                <table class="table table-light table-striped">
                 <tr id="item" style="background:red;">
                     <th><center>Nom</center></th>
                     <th><center>Prénom</center></th>
                     <th><center>Date de naissance</center></th>
                     <th><center>Lieu de naissance</center></th>
                     <th><center>Sexe</center></th>
                     <th><center>Pays</center></th>
                     <th><center>Téléphone</center></th>
                     <th><center>Email</center></center> </th>
                     
                     <th><center>Formation</center></th>
                     <th><center>Modifier</center></th>
                     <th><center>Supprimer</center></th>
                     </tr>
                 <?php     
                        $bdd = mysqli_connect("localhost", "root", "", "projet1");
                        if(!$bdd){
                            echo "Vous n'êtes pas connecté à la base de donnée";
                        }

                        $req = mysqli_query($bdd, "SELECT * FROM etudiant");
                        if(mysqli_num_rows($req) == 0){
                            echo "Aucun étudiant n'est inscrit pour le moment !!";
                        }else{
                            while($row=mysqli_fetch_assoc($req)){
                                ?>
                                <tr>
                                    <td><?=$row['Nom'] ?></td>
                                    <td><?=$row['Prénom'] ?></td>
                                    <td><?=$row['datedenaissance'] ?></td>
                                    <td><?=$row['Lieu'] ?></td>
                                    <td><?=$row['Sexe'] ?></td>
                                    <td><?=$row['pays'] ?></td>
                                    <td><?=$row['telephone'] ?></td>
                                    <td><?=$row['email'] ?></td>
                                   
                                    <td><?=$row['Formation'] ?></td>
                                    <td><a href="modifier.php?id= <?=$row['id'] ?>" ><i class="fas fa-pencil-alt"></i></a></td>
                                    <td><a href="supprimer.php</div></div> ><i class="fas fa-trash-alt" id="del"></i></a></td>
                                </tr>
                               <?php
                            }
                        }
                        ?>
             </table>
         </div>
    
        
     
</div>
</body>
</html>