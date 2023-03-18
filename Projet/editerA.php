<?php

session_start();
$bdd = new PDO('mysql:host=localhost;dbname=projet1', 'root', '');
if (isset($_GET['id']) and $_GET['id'] > 0) {
	$getid = intval($_GET['id']);
	$requser = $bdd->prepare('SELECT * FROM administrateur WHERE id = ?');
	$requser->execute(array($getid));
	$userinfo = $requser->fetch();



	if (isset($_POST['modifier'])) {
		$id = $_GET["id"];
		$nom = htmlspecialchars($_POST['nom']);
        $email = htmlspecialchars($_POST['email']);
		$tof = $_POST['tof'];



		if (!empty($_POST['email']) and !empty($_POST['nom']) ) {
			if (!empty($_POST['tof'])) {
				# code...
			

			$insertmbr = $bdd->prepare('UPDATE administrateur SET Nom=?,Email=?,tof=? WHERE id = ?');
			$insertmbr->execute(array($nom, $email, $tof,$id));



			header("Location:dashboard.php?id=".  $userinfo['id']);

		} else{
			$insertmbr = $bdd->prepare('UPDATE administrateur SET Nom=?,Email=? WHERE id = ?');
			$insertmbr->execute(array($nom, $email,$id));
			header("Location:dashboard.php?id=".  $userinfo['id']);
		}

		} else {
			$erreur = "<font color='red'>veillez renseigner tous les champs s'il vous plaît!!!</font>";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
        <link rel="stylesheet" href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css">
        <link href="vendor/bootstrap.min.css" rel="stylesheet">
   <link href="vendor/all.min.css" rel="stylesheet">
   <script src="vendor/bootstrap.bundle.min.js"></script>
   <script src="vendor/all.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/skin.css">
	<title>Document</title>
	
</head>

<body>
<!-- header -->
<?php
            require_once('header.php');
            ?>
			
	<br><br><br><br><br>
	<div>
		<?php
	if (isset($erreur)) {
		echo '<center> <font size="5px" color="red" weight="600">' . $erreur . "</font></center> ";
	}
        ?>
	</div>
	<div class="container">
		<!-- row -->
		<div class="container-fluid">
			<div class="row">
				<div class="col-xl-12 col-xxl-12 col-sm-12">
					<div class="card">
						<div class="card-header">
							<h5 class="card-title">Modifiation des informations presonelles</h5>
						</div>
						<div class="card-body">
							<form action="#" method="post">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="form-group">
											<label class="form-label">Nom</label>
											<input type="text" class="form-control"
												value="<?php echo $userinfo['Nom']; ?>" name="nom">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="form-group">
											<label class="form-label">Email</label>
											<input type="text" class="form-control"
												value="<?php echo $userinfo['Email']; ?>" name="email">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-sm-12">
										<div class="form-group">
											<label class="form-label">Ajouter ou modifier photo de profile</label>
											<input type="file" class="form-control" 
												value="<?php echo $userinfo['tof']; ?>" name="tof">
										</div>
									</div>
									
									
									
								
									
									<br>
									<br>
									<br>
									<div class="row" >
									<div class="col-lg-6 col-md-6 col-sm-6">
										<center><button type="submit" style="margin-top: 5%; margin-bottom: 5%;" class="btn btn-primary w-50"
												name="modifier">Modifier</button></center>

									</div>
									
									<div class="col-lg-6 col-md-6 col-sm-6">

										<center> <a style="margin-top: 5%;margin-bottom: 5%;" class="btn btn-danger w-50" href="dashboard.php?id=<?php echo $userinfo['id']; ?>"
												name="cancel">Annuler</a></center>
									</div>
									</div>
									<br>
									<br>
									<br>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	
	<script src="vendor/global/global.min.js"></script>
        <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
        <script src="js/custom.min.js"></script>

        <!-- Chart Morris plugin files -->
        <script src="vendor/raphael/raphael.min.js"></script>
        <script src="vendor/morris/morris.min.js"></script>


        <!-- Chart piety plugin files -->
        <script src="vendor/peity/jquery.peity.min.js"></script>

        <!-- Demo scripts -->
        <script src="js/dashboard/dashboard-2.js"></script>

        <!-- Svganimation scripts -->
        <script src="vendor/svganimation/vivus.min.js"></script>
        <script src="vendor/svganimation/svg.animation.js"></script>
        <script src="js/styleSwitcher.js"></script>
</body>

</html>
<?php
}
?>