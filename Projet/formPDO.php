<?php
$dsn = 'mysql:host=127.0.0.1;dbname=projet1;charset=utf8';
$username = 'root';
$password = '';
$options = [];
try {
   $bdd = new PDO($dsn, $username, $password, $options);
} catch (PDOException $e) {
   die("erreur" . $e->getMessage());
}
if (isset($_POST['Valider'])) {
   $email = htmlspecialchars($_POST['email']);
   $nom = htmlspecialchars($_POST['nom']);
   $prénom = htmlspecialchars($_POST['prénom']);
   $date = htmlspecialchars($_POST['date']);
   $lieu = htmlspecialchars($_POST['lieu']);
   $sexe = htmlspecialchars($_POST['sexe']);
   $phone = htmlspecialchars($_POST['phone']);
   $ville = htmlspecialchars($_POST['ville']);
   $villeP = htmlspecialchars($_POST['villeP']);
   $nomP = htmlspecialchars($_POST['nomP']);
   $numP = htmlspecialchars($_POST['numP']);
   $pays = htmlspecialchars($_POST['pays']);
   $diplome = htmlspecialchars($_POST['diplome']);
   $annee = htmlspecialchars($_POST['annee']);
   $formation = htmlspecialchars($_POST['formation']);
   $pseudo = htmlspecialchars($_POST['pseudo']);
   $mdp = sha1($_POST['pass']);
   $mdp2 = sha1($_POST['passconf']);
   $tof="Capture.JPG";


   if (!empty($_POST['email']) and !empty($_POST['nom']) and !empty($_POST['prénom']) and !empty($_POST['date']) and !empty($_POST['lieu']) and !empty($_POST['phone']) and !empty($_POST['sexe']) and !empty($_POST['pays']) and !empty($_POST['ville']) and !empty($_POST['villeP']) and !empty($_POST['nomP']) and !empty($_POST['numP']) and !empty($_POST['diplome']) and !empty($_POST['annee']) and !empty($_POST['formation']) and !empty($_POST['pseudo']) and !empty($_POST['pass']) and !empty($_POST['passconf'])) {
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
         $reqmail = $bdd->prepare("SELECT * FROM etudiant WHERE email = ?");
         $reqphone = $bdd->prepare("SELECT * FROM etudiant WHERE telephone = ?");
         $reqmail->execute(array($email));
         $reqphone->execute(array($phone));
         $mailexist = $reqmail->rowCount();
         $phoneexist = $reqphone->rowCount();
         if ($mailexist == 0 && $phoneexist == 0) {
            if ($mdp == $mdp2) {
               $insertmbr = $bdd->prepare("INSERT INTO etudiant(Nom, Prénom, datedenaissance, Lieu, Sexe, telephone, pays, Ville, nomP, numP, villeP, email, Formation, Diplome, Annee ,pseudo, motdepasse,tof) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
               $insertmbr->execute(array($nom,$prénom,$date,$lieu,$sexe,$phone,$pays,$ville,$nomP,$numP,$villeP,$email,$formation,$diplome,$annee,$pseudo,$mdp,$tof));
               $erreur = "<font color='green' align='center'> Pré-Inscription réussie !  </font> <font color='black' >Merci d'avoir choisi le CFPC <br> Votre compte d'étudiant a Bien été créé </font><a href=\"http://localhost:8080/Projet/connexion_etudiant.php\">Cliquez ici pour vous connecter</a>";
            } else {
               $erreur = "Vos mots de passes ne correspondent pas !";
            }
         } else {
            $erreur = "<font color='red'>Etudiant déjà inscrit !</font>";
         }
      } else {
         $erreur = "<font color='red'>Votre adresse email n'est pas valide !</font>";
      }
   } else {
      $erreur = "<font color='red'>veillez renseigner tous les champs s'il vous plaît!!!</font>";
   }
}


?>