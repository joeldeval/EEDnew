<?php
session_start();
if(!isset($_SESSION['usuario'])){
	header("Location: principal.php");
}
?>
<!DOCTYPE  html>
<html>
	<head>
		<meta charset="utf-8">
		<title>EED | Votaron Lic. Salud Publica</title>
		
		<!-- CSS -->
		<link rel="stylesheet" href="../css/style.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="../css/social-icons.css" type="text/css" media="screen" />
		<!--[if IE 8]>
			<link rel="stylesheet" type="text/css" media="screen" href="css/ie8-hacks.css" />
		<![endif]-->
		<!-- ENDS CSS -->	
		
		<!-- GOOGLE FONTS 
		<link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>-->
		
		<!-- JS -->
		<script type="text/javascript" src="../js/jquery-1.5.1.min.js"></script>
		<script type="text/javascript" src="../js/jquery-ui-1.8.13.custom.min.js"></script>
		<script type="text/javascript" src="../js/easing.js"></script>
		<script type="text/javascript" src="../js/jquery.scrollTo-1.4.2-min.js"></script>
		<script type="text/javascript" src="../js/jquery.cycle.all.js"></script>
		<script type="text/javascript" src="../js/custom.js"></script>
		
		<!-- Isotope -->
		<script src="../js/jquery.isotope.min.js"></script>
		
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
		<link rel="stylesheet" href="../css/nivo-slider.css" type="text/css" media="screen" />
		<script src="../js/nivo-slider/jquery.nivo.slider.js" type="text/javascript"></script>
		<!-- ENDS Nivo slider -->
		
		<!-- tabs -->
		<link rel="stylesheet" href="../css/tabs.css" type="text/css" media="screen" />
		<script type="text/javascript" src="../js/tabs.js"></script>
  		<!-- ENDS tabs -->
  		
  		<!-- prettyPhoto -->
		<script type="text/javascript" src="../js/prettyPhoto/js/jquery.prettyPhoto.js"></script>
		<link rel="stylesheet" href="../js/prettyPhoto/css/prettyPhoto.css" type="text/css" media="screen" />
		<!-- ENDS prettyPhoto -->
		
		<!-- superfish -->
		<link rel="stylesheet" media="screen" href="../css/superfish.css" /> 
		<link rel="stylesheet" media="screen" href="../css/superfish-left.css" /> 
		<script type="text/javascript" src="../js/superfish-1.4.8/js/hoverIntent.js"></script>
		<script type="text/javascript" src="../js/superfish-1.4.8/js/superfish.js"></script>
		<script type="text/javascript" src="../js/superfish-1.4.8/js/supersubs.js"></script>
		<!-- ENDS superfish -->
		
		<!-- poshytip -->
		<link rel="stylesheet" href="../js/poshytip-1.0/src/tip-twitter/tip-twitter.css" type="text/css" />
		<link rel="stylesheet" href="../js/poshytip-1.0/src/tip-yellowsimple/tip-yellowsimple.css" type="text/css" />
		<script type="text/javascript" src="../js/poshytip-1.0/src/jquery.poshytip.min.js"></script>
		<!-- ENDS poshytip -->
		
		<!-- Tweet -->
		<link rel="stylesheet" href="../css/jquery.tweet.css" media="all"  type="text/css"/> 
		<script src="../js/tweet/jquery.tweet.js" type="text/javascript"></script> 
		<!-- ENDS Tweet -->
		
		<!-- Fancybox -->
		<link rel="stylesheet" href="../js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
		<script type="text/javascript" src="../js/jquery.fancybox-1.3.4/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
		<!-- ENDS Fancybox -->
		
		

	</head>
	
	<body>

			<!-- HEADER -->
		<div id="header">
				<!-- wrapper-header -->
				<div class="wrapper">
					<a href="../index.html"><img id="logo" src="../images/dummylogo.png" alt="Nova" /></a>
					<img id="logo1" src="../images/logo1.png">
					<br/>
		
					<?php
  echo "<form id='head' method='post' action='cerrarsesion.php'>
     <label id='lblusu'> Bienvenido ".$_SESSION['usuario']."</label><br/>
     <input type='submit' id='cerrarsesion' name='cerrarsesion' value='CERRAR SESI&Oacute;N' size='50'>
     </form>";
     ?><div class="top-search">
						<form  method="get" id="searchform" action="../Buscador.php">
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
							<li><a href="../index.php">Inicio<span class="subheader">Bienvenido</span></a>
							
								</li>
							</li>
							<li><a href="../alumnos.php">Alumnos<span class="subheader">votantes</span></a>
								<ul>
									
									<li><a href="porvotarSalud_publica.php"><span>Por Votar(Salud Publica)</span></a></li>
									
								</ul>
							</li>
				
                            
                            
                            	<!-- sedes -->
                            <li  class="current-menu-item"><a href="../alumnos.php">Sede<span class="subheader">Alterna</span></a>
								<ul>
									
									<li><a href="../sede_casa_culturaI/Casa_CulturaI.php"><span>Casa Cultura I</span></a></li>
									<li><a href="../sede_casa_culturaII/Casa_CulturaII.php"><span>Casa Cultura II</span></a></li>
                                    <li><a href="../sede_sillitas/sillitas.php"><span>Sillitas</span></a></li>
                                    <li><a href="../sede_santa_paula/santa_paula.php"><span>Santa Paula</span></a></li>
									
								</ul>
							</li>
                            
                            
                           	<!-- carreras --> 
                            
							<li><a href="../alumnos.php">Carrera<span class="subheader">Licenciatura</span></a>
								<ul>
									
									<li><a href="Salud_publica.php"><span>Lic. Salud Publica</span></a></li>
									<li><a href="../Lic_medico_cirujano/medico_cirujano.php"><span>Lic. Medico cirujano y partero</span></a></li>
                                    <li><a href="../Ing_nanotecnologia/nanotecnologia.php"><span>Ing. Nanotecnologia</span></a></li>
                                     <li><a href="../Ing_energia/energia.php"><span>Ing. Energia</span></a></li>
                                     <li><a href="../Ing_ciencias_computo/ciencias_computo.php"><span>Ing. Ciencias Computacionales</span></a></li>
									 <li><a href="../Lic_historia_arte/historia_arte.php"><span>Lic. Historia del arte</span></a></li>
                                    <li><a href="../Lic_gerontologia/gerontologia.php"><span>Lic. Gerontologia</span></a></li>
                                     <li><a href="../Lic_estudios_libe/estudios_libe.php"><span>Lic. Estudios Liberales</span></a></li>
                                      <li><a href="../Lic_diseño_artesania/diseño_artesania.php"><span>Lic. Diseño de Artesanias</span></a></li>
                                       <li><a href="../Lic_contaduria/contaduria.php"><span>Lic. Contaduria Publica</span></a></li>
                                        <li><a href="../Lic_admin_negocios/admin_negocios.php"><span>Lic. Administracion de Negocios</span></a></li>
                                         <li><a href="../Lic_abogado/abogado.php"><span>Lic. Abogado</span></a></li>
									
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
			
			
			

			
			<!-- MAIN -->
			<div id="main">
				<!-- wrapper-main -->
				<div class="wrapper">
					
					
					<!-- content -->
					<div id="content">
						
					<!-- title -->
					<div id="page-title">
						<span class="title">Lic. Salud Publica Alumnos votaron</span>
					</div>
					<!-- ENDS title -->

					<!-- page-content -->
					<div id="page-content">
											
						<!-- Aqui va el titulo y parrafo del contenido -->
						<div class="one-half">
              <table border="1" cellspacing=1 cellpadding=2 style="font-size: 8pt"><tr>
<td><font face="verdana"><b>CODIGO</b></font></td>
<td><font face="verdana"><b>NOMBRE</b></font></td>
<td><font face="verdana"><b>APELLIDOP</b></font></td>
<td><font face="verdana"><b>APELLIDOM</b></font></td>
<td><font face="verdana"><b>VOTO</b></font></td>
<td><font face="verdana"><b>MESA</b></font></td>
</tr>
                <?php  
		include ("../conexion.php");
  $link = @mysql_connect("localhost", "root","")
      or die ("Error al conectar a la base de datos.");
  @mysql_select_db("cutonala", $link)
      or die ("Error al conectar a la base de datos.");

  $query ="SELECT Nombre,Codigo,Ap_Paterno,Ap_Materno,Urnas.voto FROM Estudiante,Licenciatura,Urnas WHERE Licenciatura.id=id_Licenciatura AND Licenciatura.id=1 AND Urnas.id_Estudiante=Estudiante.id AND Urnas.voto=1";
	 
  $result1 = mysql_query($query) or die (mysql_error());
  
  
	  
  $numero = 0;
  $voto=0;
  $Novoto=0;
  while($row = mysql_fetch_array($result1))
  {
    echo "<tr><td width=\"25%\"><font face=\"verdana\">" .        $row["Codigo"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" . 
	    $row["Nombre"] . "</font></td>";
	echo "<td width=\"25%\"><font face=\"verdana\">" .        $row["Ap_Paterno"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" .        $row["Ap_Materno"] . "</font></td>";
    echo "<td width=\"25%\"><font face=\"verdana\">" .        $row["voto"] . "</font></td>";
       if($row["voto"]==1){
	   $voto++;
  }else{
  $Novoto++;
  }
    $numero++;
  }
  echo "<tr><td colspan=\"15\"><font face=\"verdana\"><b>Numero registros: " . $numero . 
      "</b></font></td></tr>";
	  
	  
	 
  
  mysql_free_result($result1);
  mysql_close($link);
?>
              </p>
			</div>
			</table>
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
			
			<!-- Twitter -->
			<div id="twitter">
				<div class="wrapper">
					<a href="#" id="prev-tweet"></a>
					<a href="#" id="next-tweet"></a>
					<img id="bird" src="../img/bird.png" alt="Tweets" />
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
					<div id="bottom-text">CUTonal&aacute; 2013 --- Todos los derechos reservados --- </div>
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