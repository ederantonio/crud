<?php
include ('./conexion/conexion.php');
error_reporting(0);
session_start();/*crea una sesión o reanuda la actual basada en un identificador de sesión pasado mediante una petición GET o POST, o pasado mediante una cookie.*/
 
// $con=mysqli_connect("localhost","root","","crudequipos");
if(!$con){
	die("no se pudo conectar a la base de datos".mysqli_connect_erno());
}
@mysqli_query($con, "SET NAMES 'utf8'");
$user = mysqli_real_escape_string($con, $_POST['user']);/*para proteger los campos*/
$pass = mysqli_real_escape_string($con, $_POST['pass']);
if ($user == null || $pass == null)/*si van vacios los campos mando el letrero*/
{
	echo '<span>Por favor complete todos los campos.</span>';
}
else
{
	 
	$consulta = mysqli_query($con, "SELECT usuario, password FROM usuarios WHERE usuario = '$user' AND password = '$pass'");
	if (mysqli_num_rows($consulta) > 0)
	{
		$_SESSION["usuario"] = $user;
		 
		// echo("<script>console.log('PHP: " . json_encode($_SESSION["usuario"]) . "');</script>");
		 
		echo '<script>location.href = "bienvenido.php"</script>';
		 
	}
	else
	{
		echo '<span>El usuario y/o clave son incorrectas, vuelva a intentarlo.</span>';
	}
}
?>
