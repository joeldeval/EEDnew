<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/> 
<link rel="stylesheet" type="text/css" href="styleprincipal.css">
</head>
<body>
<?php

class ListarContactos
{
    public $contactos;


    public function generaTabla()
    {

        echo '<table>';

  $link = @mysql_connect("localhost", "root","")
      or die ("Error al conectar a la base de datos.");
  @mysql_select_db("cutonala", $link)
      or die ("Error al conectar a la base de datos.");
  $result2 = mysql_query("SELECT count(voto) from Urnas where voto=0") or die (mysql_error()); 
  $numero = 0;
  $sinvotar = mysql_fetch_row($result2);
  
      
      //consulta alumnos que votaron 
  $result3 = mysql_query("SELECT count(voto) from Urnas where voto=1") or die (mysql_error()); 
  $votar = mysql_fetch_row($result3);


        echo '<tr>';
        echo '<th id="ID">ID  </th>';
    echo '<th id="Nombre"> Codigo</th>';
    echo '<th id="AP">  Nombre</th>';
    echo '<th id="AM">  Apellido_Paterno</th>';
    echo '<th id="Direccion">  Apellido_Materno</th>';
    echo '<th id="Direccion">  VOTO</th>';
      
               
            echo '</tr>';
            foreach($this->contactos as $contacto){
                echo '<tr>';
                    echo '<td align="center">'.$contacto['id']. '</td>';
                    echo '<td align="center">'.$contacto['Codigo'].'</td>';
                    echo '<td align="center">'.$contacto['Nombre'].'</td>';
                    echo '<td align="center">'.$contacto['Ap_Paterno'].'</td>';
                    echo '<td align="center">'.$contacto['Ap_Materno'].'</td>';
                    $numero++;
                    if ($contacto['voto']==1) {

                        echo '<td id"voto" align="center"><input type="radio" value="VOTO" checked></td>';
                    }else{
                        echo '<td id="faltavotar" align="center"><input type="radio" value="VOTO"></td>';
                       
                        
                    }
                 
                   
                  
                           
                 
                echo '</tr>';
            }
              echo "<tr colspan=\"15\"><font face=\"verdana\"><b> Total de Estudiantes: ".$numero."  </b>  ";
               echo "  <label id='alumnossinvotar'>Alumnos sin votar: " . $sinvotar[0] ." </label>  ";
                  echo " <label id='alumnosvotaron'> Alumnos votaron: " . $votar[0] . "</label></font></tr>";
        echo '</table>';
         
    }
} 
?>

</body>
</html>
