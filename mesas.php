<?php
session_start();
if(!isset($_SESSION['usuario'])){
	header("Location: principal.php");
}
?>
<!DOCTYPE  html>
<html>
	<head>
	<link rel="shortcut icon" href="favicon.png" />
		<meta charset="utf-8">
		<title>EED | Mesas</title>
 <script src="jquery-ui/js/jquery-1.9.1.js"></script>
    <script src="jquery-ui/js/jquery-ui.js"></script>
    <script src="ajax-jquery.js"></script>
		
		<!-- CSS -->
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/social-icons.css" type="text/css" media="screen" />
		<!--[if IE 8]>
			<link rel="stylesheet" type="text/css" media="screen" href="css/ie8-hacks.css" />
		<![endif]-->
		<!-- ENDS CSS -->	
		
		<!-- GOOGLE FONTS 
		<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>-->
		
		<!-- JS -->
		<script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.13.custom.min.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript" src="js/jquery.scrollTo-1.4.2-min.js"></script>
		<script type="text/javascript" src="js/jquery.cycle.all.js"></script>
		<script type="text/javascript" src="js/custom.js"></script>
		
		<!-- Isotope -->
		<script src="js/jquery.isotope.min.js"></script>
		
		<!--[if IE]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		
		<!--[if IE 6]>
			<script type="text/javascript" src="js/DD_belatedPNG.js"></script>
			<script>
	      		/* EXAMPLE */
	      		//DD_belatedPNG.fix('*');
	    	</script>
		<![endif]-->
		<!-- ENDS JS -->
		
		
		<!-- Nivo slider -->
		<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
		<script src="js/nivo-slider/jquery.nivo.slider.js" type="text/javascript"></script>
		<!-- ENDS Nivo slider -->
		
		<!-- tabs -->
		<link rel="stylesheet" href="css/tabs.css" type="text/css" media="screen" />
		<script type="text/javascript" src="js/tabs.js"></script>
  		<!-- ENDS tabs -->
  		
  		<!-- prettyPhoto -->
		<script type="text/javascript" src="js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" />
		<!-- ENDS prettyPhoto -->
		
		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="css/superfish.css" /> 
		<link rel="stylesheet" media="screen" href="css/superfish-left.css" /> 
		<script type="text/javascript" src="js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script type="text/javascript" src="js/superfish-1.4.8/js/superfish.js"></script>
		<script type="text/javascript" src="js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
		
		<!-- poshytip -->
		<link rel="stylesheet" href="js/poshytip-1.0/src/tip-twitter/tip-twitter.css" type="text/css" />
		<link rel="stylesheet" href="js/poshytip-1.0/src/tip-yellowsimple/tip-yellowsimple.css" type="text/css" />
		<script type="text/javascript" src="js/poshytip-1.0/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
		
		<!-- Tweet -->
		<link rel="stylesheet" href="css/jquery.tweet.css" media="all"  type="text/css"/> 
		<script src="js/tweet/jquery.tweet.js" type="text/javascript"></script> 
		<!-- ENDS Tweet -->
		
		<!-- Fancybox -->
		<link rel="stylesheet" href="js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
		<script type="text/javascript" src="js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
		<!-- ENDS Fancybox -->
		
		

	</head>
	
	<body class="home">

			<!-- HEADER -->
			<div id="header">
				<!-- wrapper-header -->
				<div class="wrapper">
					<a href="http://www.cutonala.udg.mx"><img id="logo" src="images/dummylogo.png" alt="Nova" /></a>
					<img id="logo1" src="images/logo1.png">
					<br/>
		
					<?php
  echo "<form id='head' method='post' action='cerrarsesion.php'>
     <label id='lblusu'>Bienvenido  ".$_SESSION['usuario']."</label><br/>
     <input type='submit' id='cerrarsesion' name='cerrarsesion' value='CERRAR SESI&Oacute;N' size='50'>
     </form>";
     ?><div class="top-search">
						<form  method="get" id="searchform" action="Buscador.php">
							<div>
								<input type="text" value="Search..." name="s" id="s" onfocus="defaultInput(this)" onblur="clearInput(this)" />
								<input type="submit" id="searchsubmit" value=" " />
							</div>
						</form>
					</div>
					<!-- search -->
				
					<!-- ENDS search -->
				</div>
				<!-- ENDS wrapper-header -->					
			</div>
			<!-- ENDS HEADER -->
			
			
			<!-- Menu -->
			<div id="menu">
			
			
			
				<!-- ENDS menu-holder -->
				<div id="menu-holder">
					<!-- wrapper-menu -->
					<div class="wrapper">
						<!-- Navigation -->
						<ul id="nav" class="sf-menu">
							<li class="current-menu-item"><a href="index.php">Inicio<span class="subheader">Bienvenido</span></a>
							
								</li>
								<li><a id="Alumnos" href="index_mesas.php">Mesas<span class="subheader">Organizar mesas</span></a>
							<ul>
					
									
									
								</ul>
							</li>
							

						</ul>

							<div id="bottom">
				<!-- wrapper-bottom -->
				
					
					<!-- Social -->
					<ul class="social ">
						<li><a href="https://www.facebook.com/centrouniversitariodetonala" class="poshytip  facebook" title="ME GUSTA"></a></li>
						<li><a href="https://www.youtube.com/watch?v=LEso6YsTM_Y" class="poshytip youtube" title="Ve Nuestros Videos"></a></li>
					</ul>
					<!-- ENDS Social -->
				
				<!-- ENDS wrapper-bottom -->
			</div>
				
						<!-- Navigation -->
					</div>
					<!-- wrapper-menu -->
				</div>
				<!-- ENDS menu-holder -->

			</div>
			<!-- ENDS Menu -->
			
			
			

			<!-- Slider -->
			
			<div id="slider-block">
				<div id="slider-holder">
					<h2>Elegir Número de mesas:</h2></br>
					 <form method="post" action="mesas.php">  
					<input type="text" name="num" id="n1" size="20" maxlength="20" onkeypress= required><br/>
					<font color="red"></font> <pre><select name="mesa" id="new"> 
<option selected="selected">
<font color="red">1</font></option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>6</option>
<option>12</option>
</select>
<input type="submit">  
</form>

				</div>
			</div>
			<!-- ENDS Slider -->
			
			<!-- MAIN -->
			<?php  
			
			include ("conexion.php");
  $link = @mysql_connect("localhost", "root","")
      or die ("Error al conectar a la base de datos.");
  @mysql_select_db("cutonala", $link)
      or die ("Error al conectar a la base de datos.");
	  mysql_query("SET NAMES 'UTF8'");
if($_POST['mesa']=='1')  
{  
        
        $query ="INSERT INTO mesas (id_Licenciatura, Num_mesa) VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1)
		,(8,1),(9,1),(10,1),(11,1),(12,1)";  
		 $result1 = mysql_query($query) or die (mysql_error());
		 header("Location: mesa1.php");
}  
else if($_POST['mesa']=='2')  
{  
      $query ="INSERT INTO mesas (id_Licenciatura, Num_mesa) VALUES (1,1),(2,1),(3,1),(4,1),(5,1),(6,1),(7,2)
		,(8,2),(9,2),(10,2),(11,2),(12,2)";  
		 $result1 = mysql_query($query) or die (mysql_error()); 
     header("Location: mesa2.php");
}  
else if($_POST['mesa']=='3')  
{  
   $query ="INSERT INTO mesas (id_Licenciatura, Num_mesa) VALUES (1,1),(2,1),(3,1),(4,1),(5,2),(6,2),(7,2)
		,(8,2),(9,3),(10,3),(11,3),(12,3)";  
		 $result1 = mysql_query($query) or die (mysql_error()); 
header("Location: mesa3.php");		 
}  
else if($_POST['mesa']=='4')  
{  
     $query ="INSERT INTO mesas (id_Licenciatura, Num_mesa) VALUES (1,1),(2,1),(3,1),(4,2),(5,2),(6,2),(7,3)
		,(8,3),(9,3),(10,4),(11,4),(12,4)"; 
		$result1 = mysql_query($query) or die (mysql_error());  
		header("Location: mesa4.php");
}  
else if($_POST['mesa']=='6')  
{  
     $query ="INSERT INTO mesas (id_Licenciatura, Num_mesa) VALUES (1,1),(2,1),(3,2),(4,2),(5,3),(6,3),(7,4)
		,(8,4),(9,5),(10,5),(11,6),(12,6)"; 
		$result1 = mysql_query($query) or die (mysql_error());  
		header("Location: mesa6.php");
}  
else if($_POST['mesa']=='12')  
{  
     $query ="INSERT INTO mesas (id_Licenciatura, Num_mesa) VALUES (1,1),(2,2),(3,3),(4,4),(5,5),(6,6),(7,7)
		,(8,8),(9,9),(10,10),(11,11),(12,12)";  
		 $result1 = mysql_query($query) or die (mysql_error()); 
header("Location: mesa12.php");		 
}  

mysql_free_result($result1);
  mysql_close($link);
?>  
			
			<!-- ENDS MAIN -->
			
			<!-- Twitter -->
			<div id="twitter">
				<div class="wrapper">
					<a href="#" id="prev-tweet"></a>
					<a href="#" id="next-tweet"></a>
					<img id="bird" src="img/logoudg.png" alt="Tweets" />
					<div id="tweets">
						<ul class="tweet_list"></ul>
					</div>
				</div>
			</div>
			<!-- ENDS Twitter -->

			
		
			<!-- Bottom -->
			<div id="bottom">
				<!-- wrapper-bottom -->
				<div class="wrapper">
					<div id="bottom-text">Universidad de Guadalajara © Derechos reservados ©1997-2012.</div>
					<!-- Social -->
					<ul class="social ">
						<li><a href="http://www.facebook.com" class="poshytip  facebook" title="Become a fan"></a></li>
						<li><a href="https://www.youtube.com/watch?v=LEso6YsTM_Y" class="poshytip youtube" title="View our videos"></a></li>
					</ul>
					<!-- ENDS Social -->
					<div id="to-top" class="poshytip" title="To top"></div>
				</div>
				<!-- ENDS wrapper-bottom -->
			</div>
			<!-- ENDS Bottom -->
	
	</body>
</html>