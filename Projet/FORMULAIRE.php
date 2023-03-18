<?php
require_once 'formPDO.php';
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
  <link rel="stylesheet" href="css/style form.css">
  <title>Formulaire</title>
</head>

<body style="background: rgb(146, 143, 143);">
  <img src="images/CFPCanadienne.png" alt=""> <br><br>
  <div class="heading">
    <h1>Formulaire de Pré-inscription</h1>
    Remplissez attentivement le formulaire
  </div>
  <div>
    <?php
    if (isset($erreur)) {
      echo '<center> <font size="5px" color="red" weight="600">' . $erreur . "</font></center> ";
    }
    ?>
  </div>
  <hr>
  <div class="container">


    <div class="row">
      <div class="col-lg-12">


        <form action="" id="ins-form" method="post" role="form">

          <div class="row">
            <center>
              <h2 style="color: white;">informations d'identification</h2>
            </center>
            <div class="col-md-6">
              <label for="nom" id="name" sty>Nom <span class="blue"> *</span></label>
              <input type="text" id="name" name="nom" class="form-control" placeholder="Votre Nom">

            </div>

            <div class="col-md-6">
              <label for="prénom" id="first-name">Prénom <span class="blue"> *</span></label>
              <input type="text" name="prénom" class="form-control" placeholder="Votre prénom">

            </div>

            <div class="col-md-6">
              <label for="date" id="date">Date de naissance <span class="blue"> *</span></label>
              <input type="date" id="date" name="date" class="form-control">

            </div>

            <div class="col-md-6">
              <label for="lieu" id="lieu">Lieu de naissance <span class="blue"> *</span></label>
              <input type="text" id="lieu" name="lieu" class="form-control" placeholder="Votre Lieu de naissance">

            </div><br>
            <label for="" style="margin-top: 23px;">Sexe: <span class="blue"> *</span></label>
            <div class="col-md-6">
              <select name="sexe" id="" style="border-radius:10px">
                <option value=""></option>
                <option value="Masculin">Masculin</option>
                <option value="Féminin">Féminin</option>
              </select>
              
            </div>
            <hr size="5px; margin-top:100px; color:red">
            <!--  ssssssssssssssssssss-->
            <center>
              <h2 style="color: white;">informations de contact</h2>
            </center>


            <div class="col-md-6">
              <label for="phone" id="phone">Téléphone<span class="blue"> *</span></label>
              <input type="number" id="phone" name="phone" class="form-control" placeholder="Votre numéro de téléphone">

            </div>
            <div class="col-md-6">
              <label for="pays" id="pays">Pays <span class="blue"> *</span></label>
              <input type="text" id="pays" name="pays" class="form-control" placeholder="Votre Pays d'origine">

            </div>

            <div class="col-md-6">
              <label for="email" id="email">Email <span class="blue"> *</span></label>
              <input type="email" id="email" name="email" class="form-control" placeholder="Votre email">

            </div>

            <div class="col-md-6">
              <label for="ville">Ville de résidence de l'étudiant<span class="blue"> *</span></label>
              <input type="text" id="ville" name="ville" class="form-control" placeholder="Votre ville de résidence">

            </div>

            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <hr size="5px; margin-top:100px; color:red">
            <center>
              <h2 style="color: white;">informations de contact du parent/tuteur</h2>
            </center>

            <div class="col-md-6">
              <label for="ville">Nom du parent/tuteur <span class="blue"> *</span></label>
              <input type="text" name="nomP" class="form-control" placeholder="Nom du parent/tuteur">

            </div>
            <div class="col-md-6">
              <label for="ville">Numéro de téléphone du parent/tuteur <span class="blue"> *</span></label>
              <input type="number" name="numP" class="form-control" placeholder="Contact du parent/tuteur">

            </div>
            <div class="col-md-6">
              <label for="ville">Ville de résidence du parent/tuteur <span class="blue"> *</span></label>
              <input type="text" id="ville" name="villeP" class="form-control"
                placeholder="Ville de résidence du parent...">

            </div>

            <br><br><br> <br><br><br><br>
            <hr size="5px; margin-top:100px; color:red">
            <br>
            <br>

            <!--  ssssssssssssssssssss-->
            <center>
              <h2 style="color: white;">Diplôme</h2>
            </center>

            <div class="col-md-6">
              <label>Plus grand diplome obtenu <span class="blue"> *</span></label>
              <select name="diplome" id="" style="border-radius:5px; height: 38%; width:100%">
                <option value=""></option>
                <option value="BACCALAUREAT/GCE A LEVEL">BACCALAUREAT/Diplôme équivalent</option>
                <option value="PROBATOIRE">PROBATOIRE/Diplôme équivalent</option>
                <option value="BEPC/GCE O LEVEL">BEPC/Diplôme équivalent</option>
              </select>
              <!-- 
              <input type="text" name="" class="form-control" placeholder="Votre Plus grand diplome"> -->

            </div>
            <div class="col-md-6">
              <label>Année d'obtension <span class="blue"> *</span></label>
              <input type="number" name="annee" class="form-control" placeholder="Année">

            </div>


            <center>
              <h2 style="color: white;margin-top:80px">Choisissez une Spécialité</h2>
            </center>


            <div class="col-md-6">
              <label for="formation" id="formation"> Spécialités</label>
              <select name="formation" style="border-radius:5px; height: 20%; width:100%">
                <option value=""></option>
                <option value="Secrétariat bureautique(SB)">Secrétariat bureautique(SB) </option>
                <option value="Secrétariat de Direction(SD)">Secrétariat de Direction(SD) </option>
                <option value="Comptabilité informatisée de gestion(CIG)">Comptabilité informatisée de gestion(CIG)
                </option>
                <option value="Graphisme de production (GP)">Graphisme de production (GP) </option>
                <option value="Maintenance Informatique(MI)">Maintenance Informatique(MI) </option>
                <option value="Maintenance des réseaux informatique(MRI) ">Maintenance des réseaux informatique(MRI)
                </option>
                <option value="Developpement applications web et mobile">Developpement d'applications web et
                  mobile(Génie
                  Logiciel) </option>
                <option value="web Developpeur/WebMaster">Web Developpeur/WebMaster</option>


              </select>

            </div>



            <br><br><br> <br><br><br><br>
            <hr size="5px; margin-top:100px; color:red">

            <div class="row" id="log" style="background: rgba(146, 143, 143, 0.575);">


              <!--  ssssssssssssssssssss-->
              <center>
                <h2 style="color: white;">informations de connexion</h2>
              </center><br><br>
              <center>
                <h4 style="color: #cc0808ee;">NB: Ces informations sont confidentielles</h4>
              </center>
              <div class="col-md-6">
                <label for="pseudo">Pseudo <span class="blue"> *</span></label>
                <input type="pseudo" name="pseudo" class="form-control" placeholder="Votre Pseudo"><br>

              </div>

              <div class="col-md-6">
                <label for="pass">Mot de passe <span class="blue"> *</span></label>
                <input type="password" name="pass" class="form-control" placeholder="Votre mot de passe">

              </div>
              <div class="col-md-6">


              </div>
              <div class="col-md-6">
                <label for="pass">Confirmer le mot de passe <span class="blue"> *</span></label>
                <input type="password" name="passconf" class="form-control" placeholder="Confirmez le mot de passe">

              </div>
            </div>

            <div class="col-md-12">
              <br>
              <br>
              <p class="blue"> <strong>*Ces informations sont requises</strong> </p>
            </div>
            <hr>
            <div class="row">

              <div class="col-md-6">
                <input type="submit" class="btn btn-primary" name="Valider" value="Soumettre">

              </div>
              <div class="col-md-6">
                <center> <a href="http://localhost:8080/Projet/Accueil.php" class="btn btn-danger"
                    id="cancel">Annuler</a></center>

              </div>

            </div>
          </div>
          <br>

        </form>


      </div>
    </div>
  </div>
  <?php

  ?>
</body>

</html>