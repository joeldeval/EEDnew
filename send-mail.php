<?php
if (isset($_POST['asunto']) && !empty($_POST['asunto']) && 
	isset($_POST['mensaje']) && !empty($_POST['mensaje'])) {
	
	$destino = "jooelvaldivi@gmail.com";
    $desde = "From:". "CodigoFacilito";
    $asunto = $_POST['asunto'];
    $mensaje = $_POST['mensaje'];

    mail($destino, $asunto, $mensaje, $desde);
    echo "correo enviado";

}else{
	echo "hay un problema";
}
/**
* Author: Luis Zuno
* Email: luis@luiszuno.com
* URL: http://www.luiszuno.com
* Version: 1.0.0 
**/



?>
