<?php
session_start();
if (isset($_SESSION['usuario']))
{
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>BIENVENIDO</title>
<link rel="stylesheet" href="css/estilo.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  
</head>
<body>
<div class="contenido">
	<p class="wusuario">Usuario conectado : <b><?php echo $_SESSION['usuario']; ?></b></p>
	<p class="cerrar"><a href="logout.php">CERRAR SESIÓN</a></p>
	 <form onsubmit="return false" action="return false">
	 <div id="resultadow"></div>
	 	<table id="clientes" >
			<h2>Agenda</h2>
			<tr>
				<td><button type="button" class="btn btn-primary" value="Ver Registros" id="ver">Ver registros</button> 
				<td><button type="button" class="btn btn-secondary" value="Registrar Cliente" id="registrar">Registrar</button> 
				<td><button type="button" class="btn btn-success" value="Modificar Cliente" id="modificar">Modificar</button> 
				<td><button type="button" class="btn btn-danger" value="Eliminar Registro" id="eliminar">Eliminar</button> 
			</tr> 
	 	</table>
	 </form>
	  <!-- <section id="resultado">Bienvenido</section>Aqui llegan los datos de modbuscar.php -->
	<div class="alert alert-success" id="resultado" role="alert">
		Bienvenido
	</div>
	 	<section id="respuesta">
	 		
	 	</section> <!--Aqui llega el formulario modificar.html -->
	  
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
<script src="js/ajax.js"></script> 
</body>
</html>
<?php
}
else
{
	echo '<script>alert("primero debes loguearte para ver esta pagina")</script>';
	echo '<script>location.href = "index.php";</script>';
}
?>
