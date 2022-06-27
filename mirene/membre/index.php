<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MEMBRE</title>
    
    <style>
   
   .social-buttons {
    color: #da2a2a;
  text-align: center;
  display: block;
  width: 40px;
  height: 38px;
  padding: 9px 0px;
 
  margin: 2px;
   }
   #social-buttons::before {
    
    content:'';
      position:absolute;
      width:100%;
      height:100%;
      background:$b;
      left:0;
      top:0;
      border-radius:75px;
      z-index:-1;
      transition-delay:1s;
      transition:0.4s ease-in-out;
   }

 
  

               </style>
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

	<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
   

    <link rel="stylesheet" href="css/style.css">

  

    <div class="main">

        <div class="container">
            <form method="POST" class="appointment-form" id="appointment-form">
                <h2>ENREGISTREMENT D'UN NOUVEAU MEMBRE</h2>
                <div class="form-group-1">
                    <input type="text" name="id_membre" id="title" placeholder="id" required />
                    <input type="text" name="Nom" id="name" placeholder="entrez votre id" required />
                    <input type="text" name="Nom" id="name" placeholder="entrez votre nom" required />
                    <input type="text" name="Nom" id="name" placeholder="entrez votre nom" required />
                    <input type="email" name="Prenom" id="prenom" placeholder="prenom" required />
                    <input type="number" name="phone" id="phone_number" placeholder="numero telephone" required />
                    <div class="select-list">
                        <select name="course_type" id="course_type">quelle est votre   sexe
                            <option value="society">masculin</option>
                            <option value="language">Feminin</option>
                        </select>
                    </div>
                </div>
                <div class="form-group-2">
                    <input type="date" name="date" id="title" placeholder="" required />
                    <input type="text" name="lieu" id="name" placeholder="entrez votre lieur de naissance" required />
                    <input type="text" name="fonction" id="prenom" placeholder="fonction" required />
                    <input type="text" name="Num" id="title" placeholder="numero CNI" required />
                    <input type="text" name="adresse" id="name" placeholder="entrez votre adresse" required />
                </div>
                    
               
                <div class="form-check">
                    <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                    <label for="agree-term" class="label-agree-term"><span><span></span></span>j'accepte tout les confidaliter <a href="#" class="term-service">Terms and Conditions</a></label>
                </div>
        
                <div class="row">
                    <div class="row">
                    <input type="submit" name="submit" id="" class="reset" value="envoyer" /> 
                    <input type="reset" name="reset" id="" class="submit" value="Supprimer" /></div>
                    <button class="btn btn-info btn-lg"><span class=" " aria-hidden="true">ajouter un adherent</span><br> </button>
                    
                </div>
            </div>
            </form>
            
        </div>
        
	
                
               

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
<div class="col-md-7 col-md-push-5">
		
        <div class="">
            <div class="">

    <button class="btn btn-dark btn-lg"><span class="fa fa-print fa-3x">imprimer membre</span><br></button>
<button class="zmdi-facebook"><span class="fa fa-info fa-3x " > modifier</span><br></button>
<button class="btn btn-danger btn-lg"><span class="fa fa-trash fa-3x " aria-hidden="true">supprimer</span><br></button>
<button class="btn btn-info btn-lg"><span class="fa fa-tag fa-3x " aria-hidden="true">retour</span><br> </button>
<button class="btn btn-danger btn-lg"><span class="fa  fa-bars fa-3x" aria-hidden="true">listez </span><br></button>
<button class="btn btn-info btn-lg"><span class="fa fa-times fa-3x " aria-hidden="true">quitter</span><br> </button>
</div>
