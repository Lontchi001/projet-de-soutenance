<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=projet1', 'root', '');
if (isset($_GET['id']) and $_GET['id'] > 0) {
  $getid = intval($_GET['id']);
  $requser = $bdd->prepare('SELECT * FROM etudiant WHERE id = ? ');
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

  
  <title>compte-print</title>
</head>

<body style="background:#b9afafa2;margin-left:0px">

<?php
        require 'en-tete.php';

        ?>
       

    
  <!-- image -->
  
  <?php if (!empty($userinfo['tof'])) { ?>
    <center>
  <img style="border-radius: 50%; height: 90px; width: 80px; border: solid .5px #31313556;" src="images/avatar/<?php echo $userinfo['tof'];?>" width="150px" height="140px">
  </center>
  <?php
  } ?>
  <?php if (empty($userinfo['tof'])) { ?>
<center>
  <img style="border-radius: 50%; border: .5px solid #31313556;" id="im" src="images/avatar/Capture.JPG" width="150px" height="140px">
  </center>
 <?php
  } ?>

  

  
  <div class="content-body">
    <!-- row -->
    <center><h4  style="padding-bottom: 0px;padding-top: 10px; text-decoration: underline;">FICHE DE PRE-INSCRIPTION AU CFPC</h4></center>
                  <hr>
                  <hr>
      


<div class="row">
  <div class="col-lg-6 col-md-4 col-sm-6 col-6">
  <center><h2>Identifiants de l'étudiant</h2></center>
                 
                 <div class="row mb-4">
                   <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                     <h5 class="w-500">Nom <span class="">:</span>
                     </h5>
                   </div>
                   <div class="col-lg-9  col-6"><span>
                       <?php echo $userinfo['Nom']; ?>
                     </span>
                   </div>
                 </div>
                 <div class="row mb-4">
                   <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                     <h5 class="">Prénom <span class="">:</span>
                     </h5>
                   </div>
                   <div class="col-lg-9 col-md-8  col-6"><span>
                       <?php echo $userinfo['Prénom']; ?>
                     </span>
                   </div>
                 </div>
                 <div class="row mb-4">
                   <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                     <h5 class="f-w-500">Date de naissance <span class="pull-right">:</span>
                     </h5>
                   </div>
                   <div class="col-lg-9 col-md-8  col-6"><span>
                       <?php echo $userinfo['datedenaissance']; ?>
                     </span>
                   </div>
                 </div>
                 <div class="row mb-4">
                   <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                     <h5 class="f-w-500">Lieu de naissance <span class="pull-right">:</span>
                     </h5>
                   </div>
                   <div class="col-lg-9 col-md-8  col-6"><span>
                       <?php echo $userinfo['Lieu']; ?>
                     </span>
                   </div>
                 </div>
               
               <div class="row mb-4">
                 <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                   <h5 class="f-w-500">Sexe <span class="pull-right">:</span>
                   </h5>
                 </div>
                 <div class="col-lg-9 col-md-8  col-6"><span>
                     <?php echo $userinfo['Sexe']; ?>
                   </span>
                 </div>
               </div>
               <div class="row mb-4">
                 <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                   <h5 class="f-w-500">Pseudo <span class="pull-right">:</span></h5>
                 </div>
                 <div class="col-lg-9 col-md-8  col-6"><span>
                     <?php echo $userinfo['pseudo']; ?>
                   </span>
                 </div>
               </div>
               </div>

  <div class="col-lg-6 col-sm-6 col-6">

  <center><h2>Contacts</h2></center>

<div class="row mb-4">
  <div class="col-lg-3 col-md-4 col-sm-6 col-6">
    <h5 class="f-w-500">Email <span class="pull-right">:</span>
    </h5>
  </div>
  <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>
      <?php echo $userinfo['email']; ?>
    </span>
  </div>
</div>
<div class="row mb-4">
  <div class="col-lg-3 col-md-4 col-sm-6 col-6">
    <h5 class="f-w-500">Téléphone <span class="pull-right">:</span>
    </h5>
  </div>
  <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>
      <?php echo $userinfo['telephone']; ?>
    </span>
  </div>
</div>
<div class="row mb-4">
  <div class="col-lg-3 col-md-4 col-sm-6 col-6">
    <h5 class="f-w-500">Pays <span class="pull-right">:</span></h5>
  </div>
  <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>
      <?php echo $userinfo['pays']; ?>
    </span>
  </div>
</div>
<div class="row mb-4">
  <div class="col-lg-3 col-md-4 col-sm-6 col-6">
    <h5 class="f-w-500">Ville <span class="pull-right">:</span></h5>
  </div>
  <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>
      <?php echo $userinfo['Ville']; ?>
    </span>
  </div>
</div>
  </div>
  </div>
</div>



          <div class="col-lg-12 ">
            
              <div class="row" >
                <div class="col-md-6">

                 
                
                <div class="col-md-6">
               
              </div>


                <center><h2>Formation</h2></center>

                <div class="row mb-4">
                  <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <h5 class="f-w-500">Plus grand diplôme<span class="pull-right">:</span></h5>
                  </div>
                  <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>
                      <?php echo $userinfo['Diplome']; ?>
                    </span>
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <h5 class="f-w-500">Année d'obtention <span class="pull-right">:</span></h5>
                  </div>
                  <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>
                      <?php echo $userinfo['Annee']; ?>
                    </span>
                  </div>
                </div>
                <div class="row mb-4">
                  <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                    <h5 class="f-w-500">Filière choisie <span class="pull-right">:</span></h5>
                  </div>
                  <div class="col-lg-9 col-md-8 col-sm-6 col-6"><span>
                      <?php echo $userinfo['Formation']; ?>
                    </span>
                  </div>
                </div>
              

              </div>

            
          </div>
        
  
    

          

<style>
  h5{
    margin-left: 10%;
    font-size: 12px;
    margin-top: 5px;
  }
  span{
    font-size: 12px;
    
  }
  h2{
     text-decoration: underline;
     margin: 20px;
     font-size: 14px;
  }
</style>


</body>
<script>
 window.addEventListener("load",window.print());
</script>
</html>
<?php
}
?>