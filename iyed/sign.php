
<html>
<head>
<title>Ticket Online</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
 <link href="css/style.css" rel="stylesheet" type="text/css" media="all">
  <script src="js/index.js"></script> 


</head>
<body id="top">
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
 
 <div id="logo" class="fl_left">
      
    </div>
 <a href="index.php"><img src="images/v.png" alt=""/></a>
 <div id="quickinfo" class="fl_right">
 	   <form class="f1" action="login.php" method="post">
            <input name="login" class="btmspace-15" type="text" value="" placeholder="Name">
			<input name="pwd" class="btmspace-15" type="password" value="" placeholder="Password">
			
		<button class="btn" type="submit" value="submit">Submit</button>
      <a class="btn" href="sign.php">SIGN UP</a>
       </form>			
    </div>
  <!--   --></header>
  <div class="wrapper row1"></div>
</div>
<?php require "nav.html"; ?> 

<div class="wrapper row3">
  <main class="hoc container clear"> 

    <div class="group center">
     <h2 class="heading font-x3">Create Your Account Please</h2>
		<form   name="formulaire" action="ajout_sign.php" method="POST" onSubmit="return verif_formulaire()" class="form-style-9">
		 Sign Up <br>
			<ul>
			<li>
				<input type="text" name="user_name" class="field-style field-split align-left" placeholder="UserName" />
				<input type="text" name="name" class="field-style field-split align-right" placeholder="Name" />

			</li>
			<li>
				<input type="text" name="f_name" class="field-style field-split align-left" placeholder="Surname" />

			</li>
			<li>
				<input type="text" name="mot_de_passe" class="field-style field-split align-left" placeholder="Password" />
				<input type="email" name="courriel" class="field-style field-split align-right" placeholder="Email" />
			</li>
			<li>
			<input type="text" name="cin" class="field-style field-full align-none" placeholder="Cin" />
			</li>
			<li>
			<!--<textarea name="field5" class="field-style" placeholder="Message"></textarea>-->
			</li>
			<li>
			<input type="submit" value="Send" />
			</li>
			</ul>
			</form>
			
		
		
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<?php require "footer.html"; ?> 
</body>
</html>

 