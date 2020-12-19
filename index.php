<?php
session_start();/*crea una sesión o reanuda la actual basada en un identificador de sesión pasado mediante una petición GET o POST, o pasado mediante una cookie.*/
if(isset($_SESSION['usuario'])) 
{
	echo '<script>location.href = "bienvenido.php";</script>';
}
else/*sino esta iniciada la sesion muestro el formulario*/
{
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/estilo.css" /> 
	<title>INICIO DE SESIÓN</title>
</head>
<body>
<div class="container  col-4  " style="background:teal"> 
	<form class="mt-5" >
	  	<span id="resultado"></span>
		<div class="form-group   ">  
			<label for="usuario">Usuario</label>
			<input type="text" class="form-control  " id="user" aria-describedby="emailHelp"> 
		</div>
		<div class="form-group ">
			<label for="password">Password</label>
			<input type="password" class="form-control " id="pass">
		</div> 
		<button type="submit" class="btn btn-primary ml-auto" id="entrar">Ingresar</button>
	</form>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
<script src="js/ajax.js"></script>
</body>
</html>
<?php
}
?>
