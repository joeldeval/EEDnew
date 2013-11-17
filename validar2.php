<html>
  <head>
  
  
  </head>
  <body>
    
<?php
   
    $Usuario = $_POST['txtusuario'];
    $Contra = $_POST['txtcontra'];
if( ($Usuario == "joel" && $Contra == "joel")){
	session_start();
	$_SESSION["usuario"] = $Usuario;
	header("Location: index.php");
      }else{
	header("Location: principal.php");
  echo "INCORRECTO";
	}
?>
 
   	
</body>

</html>
