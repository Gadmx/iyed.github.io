
<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();
require_once('connexion.php');

$username=$_SESSION['login'];
$pwd=$_SESSION['pwd'];
$result = mysqli_query($dbprotect,"SELECT type FROM users WHERE user='$username' and pwd='$pwd'" );
$row = mysqli_fetch_array($result);

$type=$row['type'];	

?>

<html>
<head>
<title>Get Your Ticket</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<script>
 
</script>
<style>
 .hist{
	 background-color:#FBFDB7;
	 border:1px solid black;
	 width:100%;
	 padding:5px;
	 margin-bottom:5px;
  }
</style>

 </head>
<body id="top">


<?php require "nav_admin.html"; ?> 

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="center btmspace-80">
      <p class="nospace">
 
				 <h1>Historique</h1>
		
		<div class="col-sm-12">
			
			<?php
				
				if($type=="admin")
				{
				 $sql = "SELECT * FROM historique ORDER BY id DESC ;"; // pour admin privilége
				}else {
					$sql = "SELECT * FROM historique WHERE user='" .$_SESSION['login']."' ORDER BY id DESC ;"; 
				}
					$result = mysqli_query($dbprotect, $sql);
					$numb=mysqli_num_rows($result);
					if (mysqli_num_rows($result) > 0) {
						// output data of each row
						while($row = mysqli_fetch_assoc($result)) {
							echo "<div class=\"hist\">" .$row["user"]." bought a ticket from ".$row["from_t"].
									" to ".$row["to_t"] 
									."<span style=\"float:right; font-style: italic;\" > <a href=\"#\">Voir detail</a>&nbsp; <a href=\"#\">Supprimer</a>&nbsp; &nbsp;[ ".$row["date_heure"]." ]</span>
									</div>";	
							// here goes the php code for the button to print 
							//...
						}
					} else {
						echo "<div class=\"hist\"> 0 results </div>";
					}
					?>
			
		</div>
	  
 			
	  </div>
	  
				 
				
     <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<?php require "footer.html"; ?> 
</body>
</html>

 