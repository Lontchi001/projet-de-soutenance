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
  <link rel="stylesheet" href="css/page style.css">
    <title>page</title>
    <script>
      function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
          x.className += " responsive";
      } else {
          x.className = "topnav";
      }
  }
     </script>
</head>
<body>
<?php
require "navbar.php";
?>
    
        <div class="heading">
          <h2 style="font-size: 30px;">SECRETARIAT DE DIRECTION</h2>
        </div>
        <div class="row">
          <div class="col-lg-12">
            
              <div class="row">

                <div class="col-md-6">
                  
                 <img src="images/Assistant de direction.jfif" alt="photo" id="im" style="margin-left: 20px; width: 90%; margin-top: 70px; border-radius: 20px;">
                
                </div>

                <div class="col-md-6">
                  <div style="margin-top: 30px;">
                  <h3 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; text-align: center; text-shadow: 5px 3px 2px black; margin-bottom: 40px; color:rgb(255, 255, 255)">DESCRIPTION</h3>
                  
                 <p style="text-align: center; margin-right: 20px; margin-left: 20px; font-size: 21px;">    Dans une entreprise, un cabinet ou une administration, le secrétariat de direction est souvent un post destiné aux femmes. L’assistante est une employée assez polyvalente au sein de l’organisation puisqu’elle jongle entre l’accueil et les tâches administratives. Sa polyvalence et son efficacité sont deux éléments primordiaux dans l’accomplissement de ses missions.

 

                  La secrétaire de direction a principalement un rôle de soutien à tout ce qui a trait au secrétariat au sein de l’entreprise. Cela prend généralement en compte les tâches administratives et l’accueil des visiteurs.
              
                   En effet, l’assistant(e) de direction est responsable pour une large part de l’efficacité, de la coordination et de la bonne atmosphère
              de l’entreprise. C’est pourquoi, pour exercer cette profession il est indispensable de bien maîtriser certaines techniques, des qualités de
              communication, d’autonomie, d’initiative et de responsabilité.  </p>
                </div>
                </div>
               </div>
        </div>
        </div>
        <br>
        <br>
        <br>
        <div class="col-lg-12">
          <h2>Niveau requis</h2>
          <p style="text-align: center; font-weight: bold; ">BACC/GCE AL</p>
          <br>
          <br>
          <h2>Débouchés</h2>
          <h6 style="text-align: justify; margin-left: 10%; margin-right: 6%; font-size: 21px;"> 
            <p>Les débouchés pour les personnes qui suivent une formation assistante de direction sont :</p>
            
              <li>Assistant (e) de direction -Secrétaire de direction;</li>
              <li> Attachée de direction;</li>
              <li>Assistante services commerciaux;</li>
              <li>Responsable service administratif.</li>
             
          </h6>
          <br>   
          <br>  
          <h2>Frais de scolarité </h2>
          <ul style="margin-left: 10%; font-size: 21px;" >
            <li>Premiere tranche <strong>100 000 FCFA</strong></li>
            <li>Deuxième tranche <strong>80 000 FCFA</strong></li>
            <li>Troisième tranche <strong>70 000 FCFA</strong></li>
            <li>  TOTAL<strong>250 000 FCFA</strong></li>
          </ul> 
        </div>
       
        <?php
require 'footer.php';
?>
</body>
</html>