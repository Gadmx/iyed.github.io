<?php require_once('connexion.php'); ?>


<?php
// get information from table
 	
// On définit un login et un mot de passe de base pour tester notre exemple. Cependant, vous pouvez très bien interroger votre base de données afin de savoir si le visiteur qui se connecte est bien membre de votre site

// on teste si nos variables sont définies

			if (isset($_POST['user_name'])) {
				
				// verifier s'il est admin oramge
				// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
				
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
 