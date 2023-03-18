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
		$nom = htmlspecialchars($_POST['nom']);
		$prénom = htmlspecialchars($_POST['prénom']);
		$date = htmlspecialchars($_POST['date']);
		$lieu = htmlspecialchars($_POST['lieu']);
		$sexe = htmlspecialchars($_POST['sexe']);
		$phone = htmlspecialchars($_POST['phone']);
		$email = htmlspecialchars($_POST['email']);
		$ville = htmlspecialchars($_POST['ville']);
		$nomP = htmlspecialchars($_POST['nomP']);
		$numP = htmlspecialchars($_POST['numP']);
		$villeP = htmlspecialchars($_POST['villeP']);
		$pays = htmlspecialchars($_POST['pays']);
		$annee = htmlspecialchars($_POST['annee']);
		$formation = htmlspecialchars($_POST['formation']);
		$diplome = htmlspecialchars($_POST['diplome']);
		$pseudo = htmlspecialchars($_POST['pseudo']);
	
		if (!empty($_POST['email']) and !empty($_POST['nom']) and !empty($_POST['prénom']) and !empty($_POST['date']) and !empty($_POST['lieu']) and !empty($_POST['phone']) and !empty($_POST['sexe']) and !empty($_POST['pays']) and !empty($_POST['ville']) and !empty($_POST['pseudo'])) {

			$insertmbr = $bdd->prepare('UPDATE etudiant SET Nom=?,Prénom=?,datedenaissance=?,Lieu=?,Sexe=?,pays=?,Ville=?,telephone=?,email=?,Formation=?,Diplome=?,Annee=?,pseudo=?,nomP=?,numP=?,villeP=? WHERE id = ?');
			$insertmbr->execute(array($nom, $prénom, $date, $lieu, $sexe,  $pays, $ville, $phone, $email, $formation, $diplome, $annee, $pseudo,$nomP,$numP,$villeP, $id));



			header("Location: dashboard.php?id=15");



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
		<?php
		require_once('navbar.php');
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
								<h5 class="card-title">Modifiation des informations presonelles de <b><?php echo $userinfo['Nom']; ?> </b> </h5>
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

										<div class="col-md-6">
											<label>Plus grand diplome obtenu <span class="blue"> *</span></label>
											<select name="diplome" id="" style="border-radius:5px; height: 40%; width:100%">
												<option value="<?php echo $userinfo['Diplome']; ?>">
													<?php echo $userinfo['Diplome']; ?>
												</option>
												<option value="BACCALAUREAT/GCE A LEVEL">BACCALAUREAT/Diplôme équivalent
												</option>
												<option value="PROBATOIRE">PROBATOIRE/Diplôme équivalent</option>
												<option value="BEPC/GCE O LEVEL">BEPC/Diplôme équivalent</option>
											</select>
											<!-- 
					  <input type="text" name="" class="form-control" placeholder="Votre Plus grand diplome"> -->

										</div>
										<div class="col-md-6">
											<label>Année d'obtension <span class="blue"> *</span></label>
											<input type="number" name="annee" class="form-control" placeholder="Année"
												value="<?php echo $userinfo['Annee']; ?>">

										</div>


										<div class="col-md-6">
											<label for="formation" id="formation"> Formation désirée<span class="blue">
													*</span></label>
											<select name="formation" style="border-radius:5px; height: 40%; width:100%">
												<option value="<?php echo $userinfo['Formation']; ?>">
													<?php echo $userinfo['Formation']; ?>
												</option>
												<option value="Secrétariat bureautique(SB">Secrétariat bureautique(SB)
												</option>
												<option value="Secrétariat de Direction(SD)">Secrétariat de Direction(SD)
												</option>
												<option value="Comptabilité informatisée de gestion(CIG)">Comptabilité
													informatisée de gestion(CIG)
												</option>
												<option value="Graphisme de production (GP)">Graphisme de production (GP)
												</option>
												<option value="Maintenance Informatique(MI)">Maintenance Informatique(MI)
												</option>
												<option value="Maintenance des réseaux informatique(MRI) ">Maintenance des
													réseaux informatique(MRI)
												</option>
												<option value="Developpement d'applications(Génie Logiciel)">Developpement
													d'applications(Génie
													Logiciel) </option>
												<option value="web Developpeur/WebMaster">Web Developpeur/WebMaster</option>
											</select>

										</div>


										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">pseudo</label>
												<input type="text" class="form-control"
													value="<?php echo $userinfo['pseudo']; ?>" name="pseudo">
											</div>
										</div>
										<br>
										<hr>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Nom du parent/tuteur</label>
												<input type="text" class="form-control"
													value="<?php echo $userinfo['nomP']; ?>" name="nomP">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Numéro du parent/tuteur</label>
												<input type="text" class="form-control"
													value="<?php echo $userinfo['numP']; ?>" name="numP">
											</div>
										</div>
										<div class="col-lg-6 col-md-6 col-sm-12">
											<div class="form-group">
												<label class="form-label">Ville de résidence du parent/tuteur</label>
												<input type="text" class="form-control"
													value="<?php echo $userinfo['villeP']; ?>" name="villeP">
											</div>
										</div>

										<br>
										<br>
										<br>
										<br>
<div class="row">
										<div class="col-lg-6 col-md-12 col-sm-12">
											<center><button type="submit" style="margin-top: 5%; margin-bottom: 5%;"
													class="btn btn-primary w-50" name="modifier">Modifier</button></center>

										</div>
										<br>
										<br>
										<br>
										<div class="col-lg-6 col-md-12 col-sm-12">

											<center> <a style="margin-top: 5%;margin-bottom: 5%;"
													href="dashboard.php?id=15" class="btn btn-danger w-50" name="cancel">Annuler</a></center>
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
		<br>
		<br>
		<br>
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