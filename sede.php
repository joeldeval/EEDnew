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
		<title>EED | Inicio</title>
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
						<form  method="get" id="searchform" action="#">
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
							<li><a href="index.php">Inicio<span class="subheader">Bienvenido</span></a>
							
								</li>
							<li><a id="Alumnos" href="alumnos.php">Alumnos<span class="subheader">votantes</span></a>
								<ul>
									
									<li><a href="porvotar.php"><span>Por Votar</span></a></li>
									<li><a href="votaron.php"><span>Votaron</span></a></li>
									
								</ul>
							</li>
						
                            
                            
                            	<!-- sedes -->
                            <li class="current-menu-item"><a href="sede.php">Sede<span class="subheader">Alterna</span></a>
								<ul>
									
									<li><a href="sede_casa_culturaI/Casa_CulturaI.php"><span>Casa Cultura I</span></a></li>
									<li><a href="votaron.php"><span>Casa Cultura II</span></a></li>
                                    <li><a href="votaron.php"><span>Sillitas</span></a></li>
                                    <li><a href="votaron.php"><span>Santa Paula</span></a></li>
									
								</ul>
							</li>
                            
                            
                           	<!-- carreras --> 
                            
							
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
			
			
			

			<div id="main">
				<!-- wrapper-main -->
				<div class="wrapper">
					
					
					<!-- content -->
					<div id="content">
						
					<!-- title -->
					<div id="page-title">
						<span class="title">SEDES</span>
					</div>
					<!-- ENDS title -->

					<!-- page-content -->
					<div id="page-content">
											
						<!-- 2 cols -->
						<div class="one-column">
							<h6 class="line-divider">Alternas </h6>
							<p>   
							
							<li><a href="sede_casa_culturaI/Casa_CulturaI.php"><span>Casa Cultura I</span></a></li>
									<li><a href="votaron.php"><span>Casa Cultura II</span></a></li>
                                    <li><a href="votaron.php"><span>Sillitas</span></a></li>
                                    <li><a href="votaron.php"><span>Santa Paula</span></a></li>
                            
							</p>
						</div>
						
						</div>
						<div class="clear "></div>
						<!-- ENDS 1/4 cols -->
	
					</div>
					<!-- ENDS page-content -->
		
					</div>
					<!-- ENDS content -->
				</div>
				<!-- ENDS wrapper-main -->
			</div>
			<!-- ENDS MAIN -->
			<!-- ENDS Slider -->
			
			<!-- MAIN -->
			
			<!-- ENDS MAIN -->
			
			<!-- Twitter -->
			<div id="twitter">
				<div class="wrapper">
					<a href="#" id="prev-tweet"></a>
					<a href="#" id="next-tweet"></a>
					<img id="bird" src="img/bird.png" alt="Tweets" />
					<div id="tweets">
						<ul class="tweet_list"></ul>
					</div>
				</div>
			</div>
			<!-- ENDS Twitter -->
<div id="footer">
				<!-- wrapper-footer -->
				<div class="wrapper">
					<!-- footer-cols -->
					<ul id="footer-cols">
						<li class="col">
							<h6>Páginas</h6>
							<ul>
								<li class="page_item"><a href="index.html">¿Quiénes somos?</a></li>
											
							    <li class="page_item"><a href="mision.html">Propósito</a></li>
								<li class="page_item"><a href="blog.html">Blog</a></li>
								<li class="page_item"><a href="gallery.html">Galería</a></li>
								<li class="page_item"><a href="contact.html">Contacto</a></li>

							</ul>
				
						</li>
						
					
						
						
					</ul>
					<!-- ENDS footer-cols -->
				</div>
				<!-- ENDS wrapper-footer -->
			</div>
			
			
		
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

