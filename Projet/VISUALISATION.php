<?php
 $email = htmlspecialchars($_POST['email']);
 $nom = htmlspecialchars($_POST['nom']);
 $prénom = htmlspecialchars($_POST['prénom']);
 $date = htmlspecialchars($_POST['date']);
 $lieu = htmlspecialchars($_POST['lieu']);
 $sexe = htmlspecialchars($_POST['sexe']);
 $phone = htmlspecialchars($_POST['phone']);
 $pays = htmlspecialchars($_POST['pays']);
 $niveau = htmlspecialchars($_POST['niveau']);
 $formation = htmlspecialchars($_POST['formation']);
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
  <link rel="stylesheet" href="css/STYLE VISUAL.CSS">
    <title>infos</title>

</head>
<body>
    <div class="container" style="background: white; padding: 20px; margin-top: 10%; margin-bottom: 10%; border-radius: 20px;">
        <h1><center> VOS INFORMATIONS PERSONNELLES </center></h1>
        <ul>
            <li> Nom: <?php echo $nom ?> </li>
            <li> Prénom:</li>
            <li>Date de naissance:</li>
            <li> Lieu de naissance:</li>
            <li>Sexe:</li>
            <li>Pays:</li>
            <li>Téléphone:</li>
            <li>Email:</li>
            <li>Niveau d'étude:</li>
            <li>Formation désirée:</li>
        </ul>
       
    </div>
    
</body>
</html>