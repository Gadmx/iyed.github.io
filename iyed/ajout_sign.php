<?php require_once('connexion.php'); ?>


<?php
// get information from table
 	
// On d�finit un login et un mot de passe de base pour tester notre exemple. Cependant, vous pouvez tr�s bien interroger votre base de donn�es afin de savoir si le visiteur qui se connecte est bien membre de votre site

// on teste si nos variables sont d�finies

			if (isset($_POST['user_name'])) {
				
				// verifier s'il est admin oramge
				// on v�rifie les informations du formulaire, � savoir si le pseudo saisi est bien un pseudo autoris�, de m�me pour le mot de passe
				
				$user = $_POST["user_name"];
				$nom = $_POST["name"];
				$prenom = $_POST["f_name"];
				$password = $_POST["mot_de_passe"]; 
				$mail = $_POST["courriel"];
				$cin = $_POST["cin"];
				$sql=("insert into users(user,name,sur_name,pwd,email,cin,type) values('$user','$nom','$prenom','$password','$mail','$cin','user')") OR die (mysql_error());
				mysqli_query($dbprotect,$sql);
				header ('location: admin.php');
				}
		 
?>
 