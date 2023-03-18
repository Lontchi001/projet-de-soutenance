<?php
session_start();

$bdd= new PDO('mysql:host=localhost;dbname=projet1','root','');

if (isset($_POST['formconnexion']))
{
$pseudo = htmlspecialchars($_POST['pseudo']);
$mdpconnect = $_POST['pass'];
   if(!empty($pseudo) AND !empty($mdpconnect)){
   $req = $bdd->prepare("SELECT * FROM etudiant WHERE pseudo = ? AND motdepasse = ?");
   $req->execute(array($pseudo, sha1($mdpconnect)));
   $user = $req->rowCount();
      if($user == 1){
           $userinfo = $req->fetch();
           $_SESSION['id']=$userinfo['id'];
           $_SESSION['mail']=$userinfo['mail'];
           $_SESSION['nom']=$userinfo['nom'];
               header("Location: compte.php?id=".$_SESSION['id']);
       }
         else{
          $erreur = "Mauvais email ou mot de passe";
       }
   }
   else
   {
    $erreur = "veuillez renseigner tout les champs s'il vous plaît!";
   }

   }
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="vendor/bootstrap.min.css" rel="stylesheet">
      <link href="vendor/all.min.css" rel="stylesheet">
      <script src="vendor/bootstrap.bundle.min.js"></script> 
      <script src="vendor/all.min.js"></script>
      <link rel="stylesheet" href="css/stylelogin.css">
        <title>Connexion</title>
        <hr>
    </head>
<body>
      <section>
        
        <form action="" method="post">
         
        <img src="images/CFPCanadienne.png" alt="" width="120px" height="50px" style="margin-left:-25px"><h1>Connexion</h1> 
          <hr>
        <label for="pseudo">Pseudo: </label>
          <input class="form-control" type="text" name = "pseudo" id="i" placeholder="Pseudonyme..."><br>
          <label  for="pass">Password: </label> 
          <input class="form-control" type="password" name = "pass" id="i" placeholder="Mot de passe...">
          
          <a style="text-decoration: none; float: right; margin-right: 4%;" href="">Mot de passe oublié?</a>
          <br>
           <input type="submit" id="btn" name="formconnexion" value="Connexion" class="btn btn-success">
          <a href="http://localhost:8080/Projet/Accueil.php">
            <input type="button" id="btn1" name="cancel" value="Annuler" class="btn btn-danger"></a>
        </form>
        <br>
        <br>
        <br>
        <?php
         if(isset($erreur)) {
            echo '<center> <font size="4px" color = "red" weight="600">'.$erreur."</font></center> ";
         }
         ?>
      </section>
</body>
</html>