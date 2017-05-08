
<?php
// On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
session_start ();
require_once('connexion.php');
?>

<html>
<head>
<title>Get Your Ticket</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="css/style.css" rel="stylesheet" type="text/css" media="all">
<script>

(function(){
    /*1*/var customSelects = document.querySelectorAll(".custom-dropdown__select");
    /*2*/for(var i=0; i<customSelects.length; i++){
        if (customSelects[i].hasAttribute("disabled")){
            customSelects[i].parentNode.className += " custom-dropdown--disabled";
        }
    }
})()

</script>


 </head>
<body id="top">


<?php require "nav_admin.html"; ?> 

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="center btmspace-80">
      <p class="nospace"><a href="#">
	  Ticket Online
	  </p></a>
	
      <h2 class="heading font-x3">Choose your Destination</h2>
    </div>
 
 <form method="POST" target="_blanc" action="buy.php" id="form1">
		 <label>
			Depart:
			<span   class="custom-dropdown custom-dropdown--white">
				<select name="taskOption" class="custom-dropdown__select custom-dropdown__select--white">
					<option>Ariana</option>
					<option>Béja</option>
					<option>Ben Arous</option>
					<option>Bizerte</option>
					<option>Gabès</option>
					<option>Gafsa</option>
					<option>Jendouba</option>
					<option>Kairouan</option>
					<option>Kasserine</option>
					<option>Kébili</option>
					<option>Le Kef</option>
					<option>Mahdia</option>
					<option>La Manouba</option>
					<option>Médenine</option>
					<option>Monastir</option>
					<option>Nabeul</option>
					<option>Sfax</option>
					<option>Sidi Bouzid</option>
					<option>Siliana</option>
					<option>Sousse</option>
					<option>Tataouine</option>
					<option>Tozeur</option>
					<option>Tunis</option>
					<option>Zaghouan</option>
					
				</select>
			</span>
		 ------
			Destination:
			<span   class="custom-dropdown custom-dropdown--white">
				<select name="taskOption2" class="custom-dropdown__select custom-dropdown__select--white">
					<option>Ariana</option>
					<option>Béja</option>
					<option>Ben Arous</option>
					<option>Bizerte</option>
					<option>Gabès</option>
					<option>Gafsa</option>
					<option>Jendouba</option>
					<option>Kairouan</option>
					<option>Kasserine</option>
					<option>Kébili</option>
					<option>Le Kef</option>
					<option>Mahdia</option>
					<option>La Manouba</option>
					<option>Médenine</option>
					<option>Monastir</option>
					<option>Nabeul</option>
					<option>Sfax</option>
					<option>Sidi Bouzid</option>
					<option>Siliana</option>
					<option>Sousse</option>
					<option>Tataouine</option>
					<option>Tozeur</option>
					<option>Tunis</option>
					<option>Zaghouan</option>

				</select>
			</span>
		</label>
		<br><br>
		<button class="btn" type="submit" form="form1" value="Submit" >Pay &amp; Buy</button>
 
 </form>
 
				 
     <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<?php require "footer.html"; ?> 
</body>
</html>

 