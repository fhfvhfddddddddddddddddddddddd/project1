<?php
session_start();
include_once('index.html');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tontine</title>
    <style>
   
		#social-buttons {
            font-family:;
            background-size: cover;
            height: 15px;
         
		  }
		 
			   </style>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container"  >
            
                <div class="signup-content" >
                    <div class="signup-form" >
                        <h2 class="form-title">ajout d'une cotisation</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="id" id="Id_tontine" placeholder="ID"/>
                            </div>
                            <div class="form-group">
                                <div class="row">
									<div class="col-sm-4">
										<div class="form-group">
											<span class="form-label">Definition des tontines</span>
											<select class="form-control" name="def" id="Id_tontine">
												<option>Jounaliere</option>
												<option> Semmestrielle</option>
                                                <option> Mensuelle</option>
												<option> Annuelle</option>
											</select>
											<span class="select-arrow"></span>
										</div>
									</div>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>j'accepte tout les confidalite<a href="#" class="term-service">ajout d'une cotisation</a></label>
                            </div>
                            <div class="col">
                            <div class="form-group form-button">
                                <input type="submit" name=" name="submit_rech id="signup" class="form-submit" value="Enregistrer"/>
                                <input type="reset" name="signup" id="signup" class="form-submit" value="supprimer"/>
                            </div>
                        </form>
                        
                    </div>
      
        </section>

        <div class="row">
		
    </div>        
                          
                   
        <button class="btn btn-success btn-lg"><i class="zmdi zmdi-home zmdi-hc-lg" id="social-buttons">afficher les  tontine</i><br></button>
   
        <button class="btn btn-danger btn-lg"><i class="zmdi zmdi-border-color zmdi-hc-lg"  id="social-buttons"> modifier les tontine</i></span><br></button>
    
   
        <button class="btn btn-info btn-lg"><i class="zmdi zmdi-delete zmdi-hc-lg"  id="social-buttons"> supprimer les tontine</i><br> </button>
   
     <button class="btn btn-danger btn-lg"><i class="zmdi zmdi-mail-reply zmdi-hc-lg" id="social-buttons"> retour vers l'acceuil</i><br></button>
 
        
        <button class="btn btn-info btn-lg"><i class="zmdi zmdi-close zmdi-hc-lg" id="social-buttons">Quitter l'application</i><br> </button>



    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
