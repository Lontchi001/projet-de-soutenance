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
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
  <title>accueil</title>
</head>

<body style="background:#b9afafa2">



  <div class="topnav" id="myTopnav" >
  <a href="javascript:void(0);" id="ico" onclick="myFunction()"> 
  <i class="fas fa-window-close"></i></a> 
      <br>
    <a href="http://localhost:8080/c%C3%B4t%C3%A9%20admin/dashboard.php?id=<?php echo $userinfo['id']; ?>"><i class="fas fa-home"></i> Accueil</a>
    
   
   
    <a href="editerA.php?id=<?php echo $userinfo['id']?>"><i class="far fa-edit"></i> Editer profil</a>
    <a href="déconnexion.php" id="dec" align="center"> Se déconnecter</a>
    <?php
  }
    ?>
  </div>
  <a href="javascript:void(0);" id="icon" onclick="myFunction()"> 
      <i class="fa fa-bars"></i></a>
    <h5 style="float: right; margin: 18px 18px 0px 0;";> <strong>Email:</strong><?php echo $userinfo['Email']; ?></h5>
  <!-- image -->
  <br /><br />
  <?php if (!empty($userinfo['tof'])) { ?>

  <img style="border-radius: 50%; border: .5px solid #31313556;;" src="images/avatar/<?php echo $userinfo['tof'];?>" width="150px" height="140px">
  <?php
  } ?>

  <br /><br />




  <h2 style="align:center; color: black">Profil de: <strong>
      <?php echo $userinfo['Nom']  ?>
    </strong>
    

  </h2>
  <div class="content-body">
    <!-- row -->
    <div class="container-fluid">
      <div class="row">
        <div>
          <div class="col-lg-12 ">
            <div class="card">
              <div class="row" >
                <div class="profile-personal-info pt-4">
                  <h4 class="text-primary mb-4" style="padding-bottom: 10px;padding-top: 10px;">Informations personnelles</h4>
                  <hr>
                  <div class="row mb-4">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                      <h5 class="w-500">Nom <span class="">:</span>
                      </h5>
                    </div>
                    <div class="col-lg-9 col-sm-6 col-6"><span>
                        <?php echo $userinfo['Nom']; ?>
                      </span>
                    </div>
                  </div>
                  <div class="row mb-4">
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                      <h5 class="">Email <span class="">:</span>
                      </h5>
                    </div>
                    <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>
                        <?php echo $userinfo['Email']; ?>
                      </span>
                    </div>
                  </div>
                  

              </div>

            </div>
          </div>
        </div>

      </div>
    </div>
    
   



              
</body>

</html>
