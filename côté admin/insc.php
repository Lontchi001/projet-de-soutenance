
<?php
session_start();

$data = 'mysql:host=127.0.0.1;dbname=admin';
$username = 'root';
$password = '';
$options = [];
try {
$bdd= new PDO($data, $username, $password, $options);
} catch(PDOException $e) {
die("erreur". $e->getMessage());
}
if(isset($_POST['inscription'])) {
   $nom = htmlspecialchars($_POST['nom']);
   $mail = htmlspecialchars($_POST['email']);
   $mdp = sha1($_POST['pass']);
   $mdp2 = sha1($_POST['passconf']);

   if(!empty($_POST['nom']) AND !empty($_POST['email']) AND !empty($_POST['pass']) AND !empty($_POST['passconf'])) {

      $nomlength = strlen($nom);
      if($nomlength <= 255) {
         $reqnom = $bdd->prepare("SELECT * FROM administrateur WHERE Nom = ?");
         $reqnom->execute(array($nom));
         $nomexist = $reqnom->rowCount();
         if($nomexist == 0) {

            
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
              
               $reqmail = $bdd->prepare("SELECT * FROM administrateur WHERE Email = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
                  if($mdp == $mdp2) {
                     $insertmbr = $bdd->prepare("INSERT INTO administrateur(Nom, Email, Mot de passe) VALUES(?, ?, ?)");
                     $insertmbr->execute(array($nom, $mail, $mdp));
                     $erreur = "Votre compte a bien été créé ! <a href=\"login.php\">Me connecter</a>";
                  } else {
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } else {
                  $erreur = "Adresse mail déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse mail n'est pas valide !";
            }
        
      }else{
         $erreur = "Pseudo déjà utilisée !";
      }
      } else {
         $erreur = "Votre pseudo ne doit pas dépasser 255 caractères !";
      }
   } else {
      $erreur = "Tous les champs doivent être complétés !";
   }
}
?>

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
    <link rel="stylesheet" href="css/ins style.css">
    <title>Document</title>
</head>
<body>
    
      <!-- Button to open the modal -->
<button onclick="document.getElementById('id01').style.display='block'" id="btt">Inscription</button>

<!-- The Modal (contains the Sign Up form) -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal"><i class="fas fa-times"></i></span>
  <form class="modal-content" action="" method="post">
    <div class="container">
      <h1><center>S'INSCRIRE</center></h1>
      <hr>
      <label for="nom"><b>Nom d'utilisateur</b></label>
      <input type="text" placeholder="Entrez votre nom d'utilisateur" name="nom" > 

      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Entrez votre Email" name="email" > 

      <label for="pass"><b>Mot de passe</b></label>
      <input type="password" placeholder="Entrez votre mot de passe" name="pass" >

      <label for="passconf"><b>Confirmer le mot de passe</b></label>
      <input type="password" placeholder="Confirmer le mot de pass" name="passconf" >

      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Se souvenir de moi
      </label>

      <div class="row">
        <div class="col-md-6">
            <button type="submit" class="signup" name="inscription">S'INSCRIRE</button>
      </div>
        <div class="col-md-6">
            <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Fermer</button>
      </div>
      </div>
    </div>
  </form>
  <?php
         if(isset($erreur)) {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
</div>
</body>
</html>