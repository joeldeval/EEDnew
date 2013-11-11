
<?
/* A continuación, realizamos la conexión con nuestra base de datos en MySQL */
$link = mysql_connect("localhost","root","Joel10");
mysql_select_db("cutonala", $link);

$usu=$_POST['txtusuario'];
$contra=$_POST['txtcontra'];
/* El query valida si el usuario ingresado existe en la base de datos. Se utiliza la función
htmlentities para evitar inyecciones SQL. */
$myusuario = mysql_query("SELECT * FROM Usuario where Nombre = '$usu'");
$nmyusuario = mysql_num_rows($myusuario);

//Si existe el usuario, validamos también la contraseña ingresada y el estado del usuario…
if($nmyusuario == 1){
$sql = "SELECT * from Usuario where Nombre='$usu' and Password=md5('$contra')";
$myclave = mysql_query($sql,$link);
$nmyclave = mysql_num_rows($myclave);

//Si el usuario y clave ingresado son correctos (y el usuario está activo en la BD), creamos la sesión del mismo.
    if($nmyclave == 1){
       session_start();
//Guardamos dos variables de sesión que nos auxiliará para saber si se está o no “logueado” un usuario
       $_SESSION["autentica"] = "SIP";
       $_SESSION["usuario"] = $_POST['txtusuario']; //nombre del usuario logueado.
//Direccionamos a nuestra página principal del sistema.
       header ("Location: index.php");
     }
      else{
         echo"<script>alert('La contrase\u00f1a del usuario no es correcta.');
               window.location.href=\"principal.php\"</script>";
          }
}else{
echo"<script>alert('El usuario no existe.');window.location.href=\"principal.php\"</script>";
}
mysql_close($link);
?>
   	