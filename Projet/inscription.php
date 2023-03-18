 <?php
session_start();

$data = 'mysql:host=127.0.0.1;dbname=projet1';
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
         $reqnom = $bdd->prepare("SELECT * FROM etudiant WHERE Nom = ?");
         $reqnom->execute(array($nom));
         $nomexist = $reqnom->rowCount();
         if($nomexist == 0) {

            
            if(filter_var($mail, FILTER_VALIDATE_EMAIL)) {
              
               $reqmail = $bdd->prepare("SELECT * FROM etudiant WHERE Email = ?");
               $reqmail->execute(array($mail));
               $mailexist = $reqmail->rowCount();
               if($mailexist == 0) {
                  if($mdp == $mdp2) {
                     $insertmbr = $bdd->prepare("INSERT INTO etudiant(nom, Email, motdepasse) VALUES(?, ?, ?)");
                     $insertmbr->execute(array($nom, $mail, $mdp));
                     $erreur = "Votre compte a bien été créé ! <a href=\"Connexion.php\">Me connecter</a>";
                  } else {
                     $erreur = "Vos mots de passes ne correspondent pas !";
                  }
               } else {
                  $erreur = "Adresse email déjà utilisée !";
               }
            } else {
               $erreur = "Votre adresse email n'est pas valide !";
            }
        
      }else{
         $erreur = "utilisateur existant !";
      }
      } else {
         $erreur = "Votre nom ne doit pas dépasser 255 caractères !";
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
    <link rel="stylesheet" href="css/ins style.css">
    <title>Inscription</title>
</head>
    <body>
      <div id="cont">
         <div class="container" >
            
            <form class="modal-content" action="" method="post">
            <img src="CFPCanadienne.png" alt="" height="40px"; width="80px">
                  
                  <h1><center>S'INSCRIRE</center></h1>
                  <hr>
                  <div>
                  <?php
                     if(isset($erreur)) {
                        echo  '<center> <font color="red" size="5px" weight="600">'. $erreur."</font> </center>";
                     }
                     ?> 
                  </div>
                  
                  <label for="nom"><b>Nom d'utilisateur</b></label>
                  <input type="text" placeholder="Entrez votre nom d'utilisateur" name="nom" > 
            
                  <label for="email"><b>Email</b></label>
                  <input type="email" placeholder="Entrez votre Email" name="email" > 
            
                  <label for="pass"><b>Mot de passe</b></label>
                  <input type="password" placeholder="Entrez votre mot de passe" name="pass" >
            
                  <label for="passconf"><b>Confirmer le mot de passe</b></label>
                  <input type="password" placeholder="Confirmer le mot de passe" name="passconf" >
            
                  <div class="row">
                              <div class="col-md-6">
                                 <button type="submit" class="signup" name="inscription">S'INSCRIRE</button>
                           </div>
                              <div class="col-md-6">
                                 <a href="Connexion.php"><center> Se connecter</center></a>
                           </div>
                  </div>
                  <br>
                 
               </form>
                     
         </div>
         </div>
    </body>
</html>