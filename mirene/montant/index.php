<?php
session_start();
include_once('index.html');


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Montant</title>
	<style>
   
		.social-buttons {
		  margin-top: 40;
		  position:relative;
		  overflow: hidden;
		  left:95% ;
		  top: 0px;
		  width: 89px;
		  padding: 0 0px;
		  border-radius: 6px; 
		  }
		 
			   </style>
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

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<div id="booking" class="section">
		<div class="section-center">
			<div class="container">
				<div class="row">
					<div class="booking-form">
						<div class="form-header">
							<h1>Ajouter une Mise ou un Montant</h1>
						</div>
						<form method="post">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">ID Mise</span>
										<input class="form-control" type="text" placeholder="" auto-increment name="id_mise">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<span class="form-label">Nom Mise</span>
										<input class="form-control" type="text" placeholder="" name="nom">
									</div>
								</div>

							</div>
							
					<div class="row">
						<div class="col-sm-6">
						    <div class="form-group">
							
								<span class="form-label">Tarif</span>
								<input class="form-control" type="text" placeholder="Entrez le Montant" name="tarif">
							</div>
						</div>
					</div>
					
				<div class="row">
					
					<div class="col-sm-6">
					    <div class="form-btn">
						<input type ="submit" class="submit-btn"></button>
					</div>		
				        </div>
				<div class="col-sm-6">
					<div class="form-btn">
						<input type ="reset" class="submit-btn"></button>
					</div>		
				</div>	
						</form>
					</div>
				</div>
			</div>
			<div class="row">
		
				<div class="col-sm-6">
					<div class="form-label">
			<button class="btn btn-dark btn-lg"><span class="fa fa-print fa-2x"></span><br></button>
			<button class="btn btn-success btn-lg"><span class="fa fa-info fa-2x " ></span><br></button>
			<button class="btn btn-danger btn-lg"><span class="fa fa-trash fa-2x " aria-hidden="true"></span><br></button>
			<button class="btn btn-info btn-lg"><span class="fa fa-tag fa-2x " aria-hidden="true"></span><br> </button>
			<button class="btn btn-danger btn-lg"><span class="fa  fa-bars fa-2x" aria-hidden="true"></span><br></button>
			<button class="btn btn-info btn-lg"><span class="fa fa-times fa-2x " aria-hidden="true"></span><br> </button>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>