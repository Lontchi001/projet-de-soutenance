<?php

session_start();
$bdd = new PDO('mysql:host=localhost;dbname=projet1', 'root', '');
if (isset($_GET['id']) and $_GET['id'] > 0) {
	$getid = intval($_GET['id']);
	$requser = $bdd->prepare('SELECT * FROM etudiant WHERE id = ?');
	$requser->execute(array($getid));
	$userinfo = $requser->fetch();



	if (isset($_POST['modifier'])) {
		$id = $_GET["id"];
		$email = htmlspecialchars($_POST['email']);
		$nom = htmlspecialchars($_POST['nom']);
		$prénom = htmlspecialchars($_POST['prénom']);
		$date = htmlspecialchars($_POST['date']);
		$lieu = htmlspecialchars($_POST['lieu']);
		$sexe = htmlspecialchars($_POST['sexe']);
		$phone = htmlspecialchars($_POST['phone']);
		$ville = htmlspecialchars($_POST['ville']);
		$pays = htmlspecialchars($_POST['pays']);


		$pseudo = htmlspecialchars($_POST['pseudo']);
		$tof = $_POST['tof'];



		if (!empty($_POST['email']) and !empty($_POST['nom']) and !empty($_POST['prénom']) and !empty($_POST['date']) and !empty($_POST['lieu']) and !empty($_POST['phone']) and !empty($_POST['sexe']) and !empty($_POST['pays']) and !empty($_POST['ville']) and !empty($_POST['pseudo'])) {

			$insertmbr = $bdd->prepare('UPDATE etudiant SET Nom=?,Prénom=?,datedenaissance=?,Lieu=?,Sexe=?, telephone=?,pays=?,Ville=?,email=?,pseudo=?,tof=? WHERE id = ?');
			$insertmbr->execute(array($nom, $prénom, $date, $lieu, $sexe, $phone, $pays, $ville, $email, $pseudo, $tof, $id));



			header("Location: compte.php?id=" . $_SESSION['id']);



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
		<link href="vendor/bootstrap.min.css" rel="stylesheet">
		<link href="vendor/all.min.css" rel="stylesheet">
		<script src="vendor/bootstrap.bundle.min.js"></script>
		<script src="vendor/all.min.js"></script>
		<link rel="stylesheet" href="css/page style.css">
		<title>Document</title>
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
												<label class="form-label">Prénom</label>
												<input type="text" class="form-control"
													value="<?php echo $userinfo['Prénom']; ?>" name="prénom">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Date de naissance </label>
												<input type="date" class="form-control"
													value="<?php echo $userinfo['datedenaissance']; ?>" name="date">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Lieu de naissance</label>
												<input name="lieu" class="datepicker-default form-control" id="datepicker"
													value="<?php echo $userinfo['Lieu']; ?>">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Sexe</label>
												<select class="form-control" name="sexe"
													value="<?php echo $userinfo['Sexe']; ?>">
													<option value=""></option>
													<option value="Masculin">Masculin</option>
													<option value="Féminin">Féminin</option>
												</select>
											</div>
										</div>
										<br><br><br><br><br>
										<hr>

										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Téléphone</label>
												<input type="text" class="form-control"
													value="<?php echo $userinfo['telephone']; ?>" name="phone">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Pays</label>
												<input type="text" class="form-control"
													value="<?php echo $userinfo['pays']; ?>" name="pays">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Email</label>
												<input type="text" class="form-control"
													value="<?php echo $userinfo['email']; ?>" name="email">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Ville</label>
												<input type="text" class="form-control"
													value="<?php echo $userinfo['Ville']; ?>" name="ville">
											</div>
										</div>
										<br><br><br><br><br>
										<hr>



										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">pseudo</label>
												<input type="text" class="form-control"
													value="<?php echo $userinfo['pseudo']; ?>" name="pseudo">
											</div>
										</div>
										<div class="col-lg-12 col-md-12 col-sm-12">
											<br>
											<label for="">Ajouter/Modifier photo de profil</label>
											<div class="form-group fallback w-100">
												<br>

												<input type="file" class="dropify" name="tof"
													accept="<?php echo $userinfo['tof']; ?>"
													value="<?php echo $userinfo['tof']; ?>">
												<br>
												<br>
											</div>
										</div>
										<br>
										<br>
										<br>
										<div class="col-lg-6 col-md-12 col-sm-12">
											<center><button type="submit" class="btn btn-primary w-50"
													name="modifier">Modifier</button></center>

										</div>
										<br>
										<br>
										<br>
										<div class="col-lg-6 col-md-12 col-sm-12">

											<center> <button type="submit" class="btn btn-danger w-50"
													name="cancel">Annuler</button></center>
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
		<br>
		<br>
		<br>
	</body>

	</html>
	<?php
}
?>