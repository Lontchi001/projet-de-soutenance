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
    <h2 style="font-size: 30px;">WEBMASTER</h2>
  </div>
  <div class="row">
    <div class="col-lg-12">

      <div class="row">

        <div class="col-md-6">

          <img src="images/téléchargement (1).jfif" alt="photo" id="im"
            style="margin-left: 20px; width: 90%; height: 60%; margin-top: 70px;margin-bottom:-300px; border-radius: 20px;">

        </div>

        <div class="col-md-6">
          <div style="margin-top: 30px;">
            <h3
              style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; text-align: center; text-shadow: 5px 3px 2px black; margin-bottom: 20px; color:rgb(255, 255, 255)">
              DESCRIPTION</h3>

            <p style="text-align: center; margin-right: 20px; margin-left: 20px; font-size: 21px;"> Touche-à-tout du
              web, le webmaster fait vivre son site en s’intéressant à la technique, au graphisme et au contenu. Ses
              objets fétiches ? Des écrans en tous genres, car il est aussi là pour s’assurer d’un rendu parfait sur
              tous les formats. On l’appelle aussi Webmestre – Administrateur (trice) de site web – Animateur (trice)
              web – Webmaster éditorial; <br> Le webmaster se charge de concevoir et de mettre un site en place, tout en
              s’occupant de son développement ainsi que de son entretien et du référencement. Des tâches quotidiennes
              qui nécessitent de passer du temps derrière l’écran d’ordinateur et de maîtriser différentes compétences
              pour disposer d’une certaine autonomie de travail et répondre à tous les besoins.
            </p>


          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <div class="col-lg-12" style="margin-top: -90px;">
    <h2 style="margin-bottom: 40px;">Rôles</h2>
    <p style="text-align: center; margin-right: 20px; margin-left: 20px; font-size: 21px;">Près de 2 milliards… c’est le
      nombre de sites créés dans le monde. Complexe ou simple, chaque site est piloté par un webmaster, en charge de le
      faire tourner au quotidien. Au cœur de sa mission : intégrer les derniers contenus (textes, images, sons, vidéos),
      analyser les stats de fréquentation ou encore résoudre en urgence un bug d’affichage. Selon le budget alloué, cet
      accro du digital peut endosser des missions plus techniques (optimiser des fonctionnalités, gérer des bases de
      données), ou plus éditoriales (créer des contenus, animer sa communauté).
    </p>
    <h2 style=" margin-top: 50px;">Niveau requis</h2>
    <p style="text-align: center; font-weight: bold; font-size: 21px">BACC/GCE AL</p>
    <br>
    <br>
    <h2 style="margin-bottom: 40px;">Débouchés</h2>
    <h6 style="text-align: center; font-size: 21px; margin-left: 10%; margin-right: 6%;">
      <p> L’activité de webmaster diffère selon l’employeur et les missions qui lui sont confiées. De l’animation au
        rédactionnel en passant par la gestion marketing ou encore technique, le webmaster garde en toute circonstance
        un rôle d’interface. Dans une petite entreprise, il aura tendance à cumuler les fonctions lorsque dans une
        entreprise plus importante, il chapotera davantage les différentes équipes pour veiller au bon fonctionnement du
        site ainsi qu’au respect des délais. Pour intégrer des agences de communication et autres web agencies, une
        solide expérience allant de 1 à 5 ans est souvent demandée. Le webmaster peut également exercer en freelance. À
        lui de se faire connaître et de se rendre indispensable auprès de ses clients. La fonction de webmaster peut
        servir de véritable tremplin et mener à d’autres fonctions propres au web : chef de projet, directeur technique,
        développeur multimédia voire même l’univers marketing. La formation et les compétences permettent d’évoluer
        assez rapidement.



        Il peut travailler à la conception d’un site (avant sa mise en ligne) ou animer un site déjà existant. Il sera
        alors chargé de le « faire vivre » en publiant de nouveaux contenus, textuels, visuels (photos, vidéo…),
        sonores…
        Il veille également à la maintenance technique (compatibilité avec tous navigateurs, réparation des bugs
        d’affichage…), à l’amélioration constante du référencement naturel…
        Il travaille en contact étroit avec les développeurs et les webdesigners ou encore avec le responsable marketing
        afin d’optimiser et faire évoluer le site.
      </p>



    </h6>
    <br>
    <br>
    <h2>Frais de scolarité </h2>
    <ul style="margin-left: 10% ; font-size: 21px;">
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