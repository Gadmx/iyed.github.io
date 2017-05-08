
<html>
<head>
<title>Ticket Online</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
 

</head>
<body id="top">
<div class="wrapper row1">
  <header id="header" class="hoc clear"> 
 
 <div id="logo" class="fl_left">
      
    </div>
    <div id="quickinfo" class="fl_right">
 	   <form class="f1" action="login.php" method="post">
            <input name="login" class="btmspace-15" type="text" value="" placeholder="Name">
			<input name="pwd" class="btmspace-15" type="password" value="" placeholder="Password">
			
		<button class="btn" type="submit" value="submit">Submit</button>
      <a class="btn" href="sign.php">SIGN UP</a>
       </form>
	   
	   
        
					
    </div>
		
	  
    <!--   -->
  <a href="index.php"><img src="images/v.png" alt=""/></a></header>
</div>
<?php require "nav.html"; ?> 


<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/a.png');">
  <div id="pageintro" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <article class="introtxt">
      <h2 class="heading">We made it easy to you</h2>
      <p>Bye your ticket from your place!</p>
      <footer>
        <ul class="nospace inline pushright">
          <li><a class="btn"  href="sign.php">Buy ticket</a></li>
          <li><a class="btn inverse" href="#">Show Tickets</a></li>
        </ul>
      </footer>
    </article>
    <!-- ################################################################################################ -->
  </div>
</div>

<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="center btmspace-80">
      <p class="nospace"><a href="#">
	  Ticket Online
	  </p></a>
	
      <h2 class="heading font-x3">Our Objectives</h2>
    </div>
    <div class="group center">
      <article class="one_quarter first"><i class="icon fa fa-balance-scale"></i>
        <h4 class="font-x1 uppercase"><a href="#">Instant Tickets</a></h4>
        <p>Get Your Ticket and status with just a click.</p>
      </article>
      <article class="one_quarter"><i class="icon fa fa-bank"></i>
        <h4 class="font-x1 uppercase"><a href="#">Mobile App</a></h4>
        <p>You can bye anyticket from your mobile phone using our latest app.</p>
      </article>
      <article class="one_quarter"><i class="icon fa fa-plane"></i>
        <h4 class="font-x1 uppercase"><a href="#">Security</a></h4>
        <p>We Can Garantie a Hight level Of Security And No Data Tracking While Using Our WebSite And Mobie App.</p>
      </article>
      <article class="one_quarter"><i class="icon fa fa-graduation-cap"></i>
        <h4 class="font-x1 uppercase"><a href="#">Browse Our Ticket Store Online</a></h4>
        <p>Browse Our Tickets Store .</p>
      </article>
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

 