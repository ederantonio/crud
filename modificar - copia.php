<?php
error_reporting(0);/*Desactivar toda notificación de error*/
/*session_start();*/
$con = new mysqli("localhost", "root", "bcdr2013", "clientes");/*conexion a la base de datos*/
if ($con->connect_errno)
{
	echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
	exit();
}
$id=$_POST['modid'];
$nombre=$_POST['modnombre'];
$apellido=$_POST['modapellido'];

if(isset($_POST['guardar']))
                {
                         

                         $consulta=("UPDATE cliente SET nombre='$nombre' WHERE id='$id'");
                         $resultado=$con->query(($consulta));

                        if($resultado)
                        {
                        	echo "se han hecho los cambios correctamente";
                        }
                        else{
                        	$mensaje="No se pudo hacer el cambio";
                        }
                }
 
?>