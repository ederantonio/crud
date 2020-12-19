<?php
error_reporting(0);/*Desactivar toda notificación de error*/
/*session_start();*/
include ('./conexion/conexion.php')
if ($con->connect_errno)
{
	echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
	exit();
}
@mysqli_query($con, "SET NAMES 'utf8'");

$id=mysqli_real_escape_string($con,$_POST['id']);
$nombre=mysqli_real_escape_string($con,$_POST['nombre']);/*para proteger los campos*/
$apellido=mysqli_real_escape_string($con,$_POST['apellido']); 
$concepto=mysqli_real_escape_string($con,$_POST['concepto']); 
$precio=mysqli_real_escape_string($con,$_POST['precio']); 
$datepicker=mysqli_real_escape_string($con,$_POST['datepicker']);
 

if (!isset($nombre)||!isset($apellido)||!isset($concepto)||!isset($precio)||!isset($datepicker))/*si van vacios los campos mando el letrero*/
{
	echo '<span>Por favor complete todos los campos.</span>';
}
else{
	$consulta="INSERT INTO clientes VALUES ('".$id."','".$nombre."','".$apellido."','".$concepto."','".$precio."','".$datepicker."')";
	mysqli_query($con, $consulta);

		if($consulta)
		{            
			echo "<span>Guardado Correctamente</span>";
		}
		else
		{
			echo "<span>No se pudieron guardar los datos</span>";
		}
}
?>


