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
$concepto=$_POST['modconcepto'];
$precio=$_POST['modprecio'];
$fecha=$_POST['modfecha'];


               
                         

                         $consulta=("UPDATE cliente SET nombre='$nombre', apellido='$apellido', concepto='$concepto', precio='$precio', fecha='$fecha' WHERE id='$id'");
                         $resultado=$con->query(($consulta));

                        if($resultado)
                        {
                        	echo "se han hecho los cambios correctamente";
                        }
                        else{
                        	echo"No se pudo hacer el cambio";
                        }
               
 
?>