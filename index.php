<!DOCTYPE html>
<html lang="en">
<head>
	<title>TONTINE ++</title>
    <?php
	define("serveur","localhost");
	define("utilisateur","root");
	define("mot_de_passe",'');
	define("base","tontine");

	$bdd=mysqli_connect(serveur,utilisateur,mot_de_passe,base) or die(mysqli_connect_error());


	// $bdd=mmysqli_connect(serveur,utilisateur,mot_de_passe,base) or die(mysqli_connect_error());
?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg.jpg');">
			<div class="wrap-login100 p-t-30 p-b-50">
				<span class="login100-form-title p-b-41">
					connexion
				</span>
				<form class="login100-form validate-form p-b-33 p-t-5" method="post" action="/mirene/index.php">

					<div class="wrap-input100 validate-input" data-validate = "Enter email">
						<input class="input100" type="email" name="email" placeholder="email">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					

					<div class="container-login100-form-btn m-t-32">
						<input type ="submit"class="login100-form-btn">
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							mots de passe oublie? connectez-vous avec
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5" data-use-continue-as="true">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="https://www.google.fr" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-google" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
<?php
	
	if($_POST){
		extract($_POST);
		$sql="INSERT INTO  connexion VALUES('$email','$pass')";

		$resultat=mysqli_query($bdd,$sql);
		if($resultat){
			echo '<script> alert("connexion reussir reussir")</script>';
		}
		else{
			echo '<script> alert("'.$error.'")</script>';
		}
		mysqli_close($bdd);
	}
?>