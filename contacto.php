<?php
require_once('conexion.php');

class Contacto
{
    public $nombre;
    public $ap;
    public $am;
    public $direccion;
    public $telefono;
    public $cp;

    public function encontrarTodos()
    {
        try
        {
$numero=0;
            $resultado = array();
            $conexion = new Conexion();
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }
            $sql = "SELECT id, Codigo, Nombre, Ap_Paterno, Ap_Materno, voto from Estudiante, Urnas where Urnas.id_Estudiante=Estudiante.id";
            if ($result = $conexion->mysqli->query($sql))
            {
                if ($result->num_rows > 0) 
                {
                     while($row = $result->fetch_assoc())
                     {
                        
                         $resultado[] = $row;

                         $numero++;
                     }
                }
            }
            $conexion->cerrar();
            return $resultado;
        }
        catch(Exception $e)
        {
            return array();
        } 
    }

    public function encontrarEspecifico()
    {
    $especific = $_GET['s'];
    $numero=0;
        try
        {

            $resultado = array();
            $conexion = new Conexion();
            mysql_query("SET NAMES 'UTF8'");
            if(!$conexion->conectar())
            {
                throw new Exception($conexion->getError());
            }
            $sql = "SELECT Codigo, Nombre, Ap_Paterno, Ap_Materno, voto from Estudiante, Urnas 
            where Urnas.id_Estudiante=Estudiante.id AND Codigo LIKE '%$especific%'";
            if ($result = $conexion->mysqli->query($sql))
            {
                if ($result->num_rows > 0) 
                {
                     while($row = $result->fetch_assoc())
                     {
                        
                         $resultado[] = $row;
                         $numero++;
                     }
                }
            }
            $conexion->cerrar();
            return $resultado;
        }
        catch(Exception $e)
        {
            return array();
        } 
    }


  
    }

 ?>
