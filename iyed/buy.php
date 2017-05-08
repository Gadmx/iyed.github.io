<?php require_once('connexion.php'); ?>
<?php 
session_start ();

$username=$_SESSION['login'];
$pwd=$_SESSION['pwd'];
$result = mysqli_query($dbprotect,"SELECT name,sur_name FROM users WHERE user='$username' and pwd='$pwd'" );
$row = mysqli_fetch_array($result);

$name=$row['name'];	
$sur_name=$row['sur_name'];	

		?>
<?php
// get information from table
 	
// On définit un login et un mot de passe de base pour tester notre exemple. Cependant, vous pouvez très bien interroger votre base de données afin de savoir si le visiteur qui se connecte est bien membre de votre site

// on teste si nos variables sont définies
		
 		
  if(isset($_POST['taskOption']) &&  isset($_POST['taskOption2']))

   {
	//echo '<body onLoad="alert(\'Selected\')">';
	//echo $_POST['taskOption'] ;
	//echo $_POST['taskOption2'] ;
	
	// ecire sur le ticker
		$ouvre=fopen("ticket-model.txt", "a+"); // ouverture en lecture ( a+)
		ftruncate($ouvre,0);
		$user=$name;
		$surname=$sur_name;
		$from = $_POST['taskOption'];
		$to = $_POST['taskOption2'];
		$date_h=date('d/m/Y  H:i:s' );
		$date_now=date('Y-m-d' );
		
		
		if (($from!='') && ($to!='') )
		{
  		$ouvre=fopen("ticket-model.txt", "w"); // ouverture en lecture ( a+) 
  		fwrite($ouvre," #User : ");fwrite($ouvre,$user);fwrite($ouvre," | ");fwrite($ouvre,$surname);
		fwrite($ouvre," #From : ");fwrite($ouvre,$from);fwrite($ouvre," #to : ");fwrite($ouvre,$to);
		fwrite($ouvre," #Date : ");fwrite($ouvre,$date_h);
		fclose($ouvre) ;  
		}
		
		$sql_insert="INSERT INTO historique(user,from_t,to_t,date_heure,date_now)VALUES('".$_SESSION['login']."','".$from."','".$to."','".$date_h."','".$date_now."')";
			//$sql_insert="INSERT INTO historique(user_name,type,type_attestation,etudiant,date,date_now)VALUES('','','','','')";
			$result_insert = mysqli_query($dbprotect,$sql_insert);
			if($result_insert){
			//echo "insert historique.";
 			}else {echo"failed historique."; 
 			}
		

	
	// lire le contenu de fichier 
	$fichier = 'ticket-model.txt'; 

		if ( (file_exists($fichier)) && (is_readable($fichier)) ){ 
		   $text = file_get_contents($fichier); 
		   echo $text;
		   
		} 
		else 
		{ 
		   echo 'Le fichier '.$fichier.' n\'existe pas ou n\'est pas disponible en ouverture'; 
		} 

		
		
	}

else {
	echo '<body onLoad="alert(\'Error.\')">';}
?>
<html>
<head><title>#Ticket Online#</title></head>
 <body>
 <a xhref="downlaod-ticket.php" href="downlaod-ticket.php">Download Ticket</a>
 </body>
 </html>