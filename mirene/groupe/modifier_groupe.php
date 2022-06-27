<!DOCTYPE html>
<html lang="en">

<head>

<?php
session_start();
include_once('index.html');
	define("serveur","localhost");
	define("utilisateur","root");
	define("mot_de_passe",'');
	define("base","tontine");

	$bdd=mysqli_connect(serveur,utilisateur,mot_de_passe,base) or die(mysqli_connect_error());


	// $bdd=mmysqli_connect(serveur,utilisateur,mot_de_passe,base) or die(mysqli_connect_error());
	
	if(isset($_GET['Id_categorie'])){
	
		$sql="SELECT * FROM categorie WHERE Id_categorie='$Id_categorie'";
		$resultat=mysqli_query($bdd,$sql);
		if($resultat){
			$rows=mysqli_fetch_assoc($resultat);
			
			mysqli_free_result($resultat);
		}
		else{
			echo '<script> alert("aucun groupe avec id)</script>';
			return;
		}
	}
?>


<?php
	if($_POST){
		extract($_POST);
		$sql="UPDATE  categorie SET Nom='$Nom',
			Privilege='$Privilege',
			Id_montant='$Id_montant',
			WHERE Id_categorie='$Id_categorie'
		";
		$resultat=mysqli_query($bdd,$sql);
		if($resultat) 
		echo '<script> alert("ùodifier avec succes")</script>';
		else echo '<script> alert("erreur")</script>';

		mysqli_close($bdd);
	}
?>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>gestion des groupes</title>


	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	
		
		
			

	

	<div id="booking" class="section">
		<div class="section-center">
			
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-push-5">
						<div class="booking-cta">
							<h1>AJOUTER UN GROUPE </h1>
							<p>Indication: pour modifier un groupe il suffit juste de remplir le petit formulaire
							</p>
						</div>
					</div>
					<div class="col-md-4 col-md-pull-4">
						<div class="booking-form">
							<form method="post">
								<div class="form-group">
									<span class="form-label">Id</span>
									<input class="form-control" type="text" placeholder="" name="Id_categorie" value='<?php echo $Id_categorie; ?>' >
								</div>
								<div class="form-group">
									<span class="form-label">Nom du groupe</span>
									<input class="form-control" type="text" placeholder="Entrez le nom de votre groupe" name="Nom" value='<?php echo $Nom; ?>' >
								</div>
								<div class="form-group">
									<span class="form-label">Id_montant</span>
									<input class="form-control" type="text" placeholder="Entrez le nom de votre groupe" name="Nom" value='<?php echo $Id_montant; ?>' >
								</div>
								
								<div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Privilege</span>
											<select class="form-control" name="Privilege" value='<?php echo $Privilege ; ?>' >
												<option>tout les droit</option>
												<option>aucun droit</option>
												
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
									
									
								</div>
								<div class="form-btn">
									<input type="submit" class="submit-btn" name="envoiyer">ajouter</button>
								</div>
							</form>
						</div>
					</div>

			  
                    <div class="col-md-7 col-md-push-5">
		
        <div class="">
            <div class="">

    <button class="btn btn-dark btn-lg"><span class="fa fa-print fa-2x"></span><br></button>
<button class="btn btn-success btn-lg"><span class="fa fa-info fa-2x " ></span><br></button>
<button class="btn btn-danger btn-lg"><span class="fa fa-trash fa-2x " aria-hidden="true"></span><br></button>
<button class="btn btn-info btn-lg"><span class="fa fa-tag fa-2x " aria-hidden="true"></span><br> </button>
<button class="btn btn-danger btn-lg"><span class="fa  fa-bars fa-2x" aria-hidden="true"></span><br></button>
<button class="btn btn-info btn-lg"><span class="fa fa-times fa-2x " aria-hidden="true"></span><br> </button>
</div>


		</div>
		</div>
		
		
		</div>
		</div>
	</div>		







</body>
</html>