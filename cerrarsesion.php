<?php
session_start();
if(!isset($_SESSION['usuario'])){
	header("Location: principal.php");
}
session_destroy();
header("Location: principal.php");

?>
