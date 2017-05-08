<?php require_once('connexion.php'); ?>


<?php
// get information from table
 	
// On définit un login et un mot de passe de base pour tester notre exemple. Cependant, vous pouvez très bien interroger votre base de données afin de savoir si le visiteur qui se connecte est bien membre de votre site

// on teste si nos variables sont définies
if (isset($_POST['login']) && isset($_POST['pwd'])) {
	
	// verifier s'il est admin oramge
	// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
	
	$result = mysqli_query($dbprotect,"SELECT * FROM users WHERE user='" . $_POST["login"] . "' and pwd = '". $_POST["pwd"]."' ");
	$count  =mysqli_num_rows($result);
	
	if($count!=0) {
		// dans ce cas, tout est ok, on peut démarrer notre session
		// on la démarre :)
		session_start ();
		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
		$_SESSION['login'] = $_POST['login'];
		$_SESSION['pwd'] = $_POST['pwd'];

		// on redirige notre visiteur vers une page de notre section membre
		header ('location: admin.php');
	}
	
	else {
		// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
		echo '<body onLoad="alert(\'User non reconnu...Veuillez verifier votre nom d-utilisateur et votre mot de passe\')">';
		// puis on le redirige vers la page d'accueil
		echo '<meta http-equiv="refresh" content="0;URL=index.php">';
	}
}
else {
	echo '<meta http-equiv="refresh" content="0;URL=page_not_found.html">';
}
?>
 