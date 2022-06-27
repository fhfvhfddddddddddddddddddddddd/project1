<?php
	
	session_start();
		define("serveur","localhost");
		define("utilisateur","root");
		define("mot_de_passe",'');
		define("base","tontine");
	
		$bdd=mysqli_connect(serveur,utilisateur,mot_de_passe,base) or die(mysqli_connect_error());
	
	
		// $bdd=mmysqli_connect(serveur,utilisateur,mot_de_passe,base) or die(mysqli_connect_error());
	?>
	<?php
	if(isset($_GET['Id_categorie'])){
		$Id_categorie=$_GET['Id_categorie'];
		$sql="DELETE FROM categorie WHERE Id_categorie='$Id_categorie'";
		$resultat=mysqli_query($bdd,$sql);
		if($resultat){
			echo '<script> alert("groupe supprimer avec succes")</script>';
	}else{
		header('Location:index.php');
	}
}
?>