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
  <link rel="stylesheet" href="css/style accueil.css">
  <title>accueil</title>
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

<?php
require "navbar.php";
?>


<body>
  <div class="containt" style="width: 100%;" >
  <header>
    <H1> <span style="color: red;"> C</span>entre de <span style="color: red">F</span>ormation <span
        style="color: red">P</span>rofessionnelle
      la <span style="color: red">C</span>anadienne</H1>
    <H2>Le CFPC se veut d’être un chef dans la formation des jeunes dynamiques et ambitieux tout en favorisant le
      développement des compétences et d’aptitude variées.<H2>
  </header>

  <div style="background: #860e0ec5; padding: 10px;margin-top: 20px;">
    <center>
      <h3 style="font-weight: bolt; color: white;"> Découvrez nos formations pro</h3>
    </center>
  </div>


  <div class="row row-cols-1 row-cols-md-3 g-4" style="margin: 0 60px 0 60px;">
    <div class="col">
      <div class="card h-100">
        <a href="http://localhost:8080/Projet/Secr%c3%a9tariat%20bureautique.php"> <img
            src="images/Experts_ Intern now.jfif" class="card-img-top" alt="..." id="im"></a>
        <div class="card-body">
          <h5 class="card-title">Secrétariat bureautique</h5>
          <p class="card-text">
            Avec l’avènement des ordinateurs et d’internet, le travail de secrétariat a considérablement évolué. Fini
            les machines à écrire, désormais....</p>
        </div>
        <div class="card-footer">
          <small class="text-muted"><a href="http://localhost:8080/Projet/Secr%c3%a9tariat%20bureautique.php">Savoir
              plus</a></small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <a href="http://localhost:8080/Projet/sec%20dir.php"> <img src="images/Assistant de direction.jfif"
            class="card-img-top" alt="..." id="im"></a>
        <div class="card-body">
          <h5 class="card-title">Secrétariat de direction</h5>
          <p class="card-text">Dans une entreprise, un cabinet ou une administration, le secrétariat de direction est
            souvent un post destiné aux femmes. L’assistante est une employée assez polyvalente au sein de
            l’organisation puisqu’elle....</p>
        </div>
        <div class="card-footer">
          <small class="text-muted"><a href="http://localhost:8080/Projet/sec%20dir.php">Savoir plus</a></small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <a href="http://localhost:8080/Projet/C%20I%20G.php"> <img src="images/Finance Business Partner.jfif"
            class="card-img-top" alt="..." id="im"></a>
        <div class="card-body">
          <h5 class="card-title">Comptabilité informatisée de gestion</h5>
          <p class="card-text">COMPTABILITÉ INFORMATISÉE DE GESTION : est un ensemble des systèmes qui contribuent à la
            production des écritures comptable permettant de répertorier tous les mouvements de flux ,de dépenses....
          </p>
        </div>
        <div class="card-footer">
          <small class="text-muted"><a href="http://localhost:8080/Projet/C%20I%20G.php">Savoir plus</a></small>
        </div>
      </div>
    </div>
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-4" style="margin:  0 60px 0 60px  ;">
    <div class="col">
      <div class="card h-100">
        <a href="http://localhost:8080/Projet/Graph%20pro.php"> <img
            src="images/Top 10 Graphic Design Trends 2020 to Keep An Eye On — BoostingWriter.png" class="card-img-top"
            alt="..." id="im"></a>
        <div class="card-body">
          <h5 class="card-title">Graphisme de production</h5>
          <p class="card-text"> Le champ d’application de ce métier comprend entre autre la création ou l’optimisation
            des sites Internet ou des produits multimédia destinés....</p>
        </div>
        <div class="card-footer">
          <small class="text-muted"><a href="http://localhost:8080/Projet/Graph%20pro.php">Savoir plus</a></small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <a href="http://localhost:8080/Projet/MI.php"><img src="images/Laptop Repair Service (2).jfif"
            class="card-img-top" alt="..." id="im"></a>
        <div class="card-body">
          <h5 class="card-title">Maintenance informatique</h5>
          <p class="card-text">Toute entreprise aujourd’hui détient au moins un ordinateur et il est nécessaire que son
            système informatique soit en parfait état de fonctionnement.. sous peine d’immobilisation complète de
            l’activité de la société…</p>
        </div>
        <div class="card-footer">
          <small class="text-muted"><a href="http://localhost:8080/Projet/MI.php">Savoir plus</a></small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <a href="http://localhost:8080/Projet/MRI.php"> <img src="images/How-to Make Your Own Ethernet.jfif"
            class="card-img-top" alt="..." id="im"></a>
        <div class="card-body">
          <h5 class="card-title">Maintenance des réseaux informatique</h5>
          <p class="card-text">
            Apprendre la maintenance informatique c’est connaitre comment faire marcher correctement les ordinateurs et
            garder en bon état de fonctionnement....</p>
        </div>
        <div class="card-footer">
          <small class="text-muted"><a href="http://localhost:8080/Projet/MRI.php">Savoir plus</a></small>
        </div>
      </div>
    </div>
  </div>

  <div class="row row-cols-1 row-cols-md-3 g-4" style="margin: 0 60px 60px 60px;">
    <div class="col">
      <div class="card h-100">
        <a href="http://localhost:8080/Projet/Webmaster.php"> <img src="images/téléchargement (1).jfif"
            class="card-img-top" alt="..." id="im"></a>
        <div class="card-body">
          <h5 class="card-title">WebMaster</h5>
          <p class="card-text">Touche-à-tout du web, le webmaster fait vivre son site en s’intéressant à la technique,
            au graphisme et au contenu....</p>
        </div>
        <div class="card-footer">
          <small class="text-muted"><a href="http://localhost:8080/Projet/Webmaster.php">Savoir plus</a></small>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <a href="http://localhost:8080/Projet/Dev%20app.php"><img
            src="images/Clubic - La meilleure source d'information Tech.jfif" class="card-img-top" alt="..."
            id="im"></a>
        <div class="card-body">
          <h5 class="card-title">Developpement d'applications web et mobile</h5>
          <p class="card-text">Le développeur web mobile est le chef d’orchestre des applications mobiles. Il conçoit
            des programmes informatiques, tel un développeur....</p>
        </div>
        <div class="card-footer">
          <small class="text-muted"><a href="http://localhost:8080/Projet/Dev%20app.php">Savoir plus</a></small>
        </div>
      </div>
    </div>
  </div>


<?php
require 'footer.php';
?>

</div>
</body>

  </html>