
<?php
session_start();

$data = 'mysql:host=127.0.0.1;dbname=projet1;charset=utf8';
$username = 'root';
$password = '';
$options = [];
try {
$bdd= new PDO($data, $username, $password, $options);
} catch(PDOException $e) {
die("erreur". $e->getMessage());
}


if(isset($_POST['connect'])) {
  $mailconnect = htmlspecialchars($_POST['mail']);
  $mdpconnect = sha1($_POST['pass']);
  if(!empty($mailconnect) AND !empty($mdpconnect)) {
     $requser = $bdd->prepare("SELECT * FROM administrateur WHERE Email = ? AND Motdepasse = ?");
     $requser->execute(array($mailconnect, $mdpconnect));
     $userexist = $requser->rowCount();
     if($userexist == 1) {
        $userinfo = $requser->fetch();
        $_SESSION['id'] = $userinfo['id'];
        $_SESSION['Nom'] = $userinfo['Nom'];
        $_SESSION['Email'] = $userinfo['Email'];
        header("Location: dashboard.php?id=".$_SESSION['id']);
     } else {
        $erreur = "Mauvais email ou mot de passe !";
     }
  } else {
     $erreur = "Tous les champs doivent être rempli !";
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
  <link rel="stylesheet" href="css/style LOGIN.css">
    <title>Connexion</title>
</head>
<body>
 
<div class="container">
  <div class="row">
    <div class="col-lg-12">
    <img src="CFPCanadienne.png" alt="" height="50px"; width="90px"><img src="images/admin.jpg" alt="" height="50px"; width="90px" style="float:right;">
    <h2><center> CONNEXION</center></h2>
    <hr>
      

  <form method="POST" id="for">
  


      <label for="mail"><b>Email</b></label>
      <input type="email" placeholder="Entrez votre email" name="mail" >

      <label for="pass"><b>Password</b></label>
      <input type="password" placeholder="Entrez votre mot de passe" name="pass" >
<a style="text-decoration: none; float: right; margin-right: 4%;" href="">Mot de passe oublié?</a>
      <button type="submit" name="connect">Se connecter</button>

     <center><span> Si vous êtes nouveau! <a  style="text-decoration: none; " href="inscription.php"> Cliquez ici pour vous inscrire</a> </span></center> 
<br>
    
  </form>
  </div>
  </div>
    <div>
        <?php
          if(isset($erreur)) {
             echo  '<center> <font color="red" size="5px" weight="600">'. $erreur."</font> </center>";
               }
           ?> 
    </div>
  </div>
</body>
</html>
