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
  <div class="topnav" id="myTopnav">
    <img src="images/CFPCanadienne.png" alt="" height="50px" style="margin-left: 10px;">
    <a href="http://localhost:8080/Projet/FORMULAIRE.php" id="btn"><i class="fas fa-user-plus"></i> Se pré-Inscrire</a>

    <a href="http://localhost:8080/Projet/connexion_etudiant.php" id="btc"><i class="fas fa-user-alt"></i> Connexion</a>
    <a href="#contact"><i class="fas fa-phone-volume"></i> Contacts</a>
    <a href="#" class="active"><i class="fas fa-home"></i> Accueil </a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  </div>

  <div class="heading">
    <h2 style=" font-size: 30px;">DEVELOPPEMENT D'APPLICATION WEB ET MOBILE</h2>
  </div>
  <div class="row">
    <div class="col-lg-12">

      <div class="row">

        <div class="col-md-6">

          <img src="images/Clubic - La meilleure source d'information Tech.jfif" alt="photo" id="im"
            style="margin-left: 20px; width: 90%; height: 70%; margin-top: 60px; border-radius: 20px;">

        </div>

        <div class="col-md-6">
          <div style="margin-top: 30px;">
            <h3
              style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; text-align: center; text-shadow: 5px 3px 2px black; margin-bottom: 40px; color:rgb(255, 255, 255)">
              DESCRIPTION</h3>

            <p style="text-align: center; margin-right: 20px; margin-left: 20px; font-size: 21px;">Le développeur web
              mobile est un expert du monde mobile. Sa mission : analyser les besoins de ses clients, concevoir des
              applications mobiles, sites internet, services en ligne, jeux vidéo pour des supports mobiles
              (smartphones, tablettes), veiller à leur bon fonctionnement et agir en qualité de support technique en cas
              de difficulté. Il est à la fois créateur, technicien, artiste, décisionnaire, analyste, mais avant tout un
              expert du monde du web mobile. Il travaille en étroite collaboration avec des designers, des chefs de
              projet, des graphistes, et se doit de faire preuve d’esprit d’équipe pour mener à bien ses projets.
              Au-delà de ces missions, il peut être amené à former ses clients sur ses réalisations. Il agit donc comme
              un conseiller et service après-vente.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-12">
    <h2>Niveau requis</h2>
    <p style="text-align: center; font-weight: bold; ">BACC/GCE AL</p>
    <br>
    <br>
    <h2>Débouchés</h2>

    <h5>
      <ul>
        <li style="font-weight: 600; margin-left: 20%;"> PME et grande sociétés</li>
        <li style="font-weight: 600; margin-left: 20%;">Agences web</li>
        <li style="font-weight: 600; margin-left: 20%;">Start-up</li>
        <li style="font-weight: 600; margin-left: 20%;"> Éditeurs de logiciels</li>
        <li style="font-weight: 600; margin-left: 20%;"> Entreprise de service du numérique</li>
        <li style="font-weight: 600; margin-left: 20%;"> Développeur freelance</li>
      </ul>
      <br>
      <br>
      <h2>Frais de scolarité </h2>
      <ul style="margin-left: 10%;">
        <li>Premiere tranche <strong>175 000 FCFA</strong></li>
        <li>Deuxième tranche <strong>150 000 FCFA</strong></li>
        <li>Troisième tranche <strong>75 000 FCFA</strong></li>
        <li> TOTAL<strong>400 000 FCFA</strong></li>
      </ul>
  </div>

  <?php
require 'footer.php';
?>
</body>

</html>