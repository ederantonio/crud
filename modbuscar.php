<?php
error_reporting(0);
 $con = new mysqli("localhost", "root", "bcdr2013", "clientes");/*conexion a la base de datos*/
if ($con->connect_errno)
{
	echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
	exit();
}
@mysqli_query($con, "SET NAMES 'utf8'");/*Para que se muestren las tildes correctamente*/
$mid=mysqli_real_escape_string($con,$_POST['mid']);/*recibo los datos de ajax y se escapan para la seguridad de los campos*/
$mnombre=mysqli_real_escape_string($con,$_POST['mnombre']);/*para proteger los campos*/
$mapellido=mysqli_real_escape_string($con,$_POST['mapellido']); 
$datepicker=mysqli_real_escape_string($con,$_POST['datepicker']); 
 
if (isset($mid)||isset($mnombre)|| isset($mapellido))
{
	    $consulta = "SELECT  * FROM cliente WHERE id ='".$mid."' ";
        $resultado = mysqli_query($con, $consulta);
      
        while($row = mysqli_fetch_array($resultado, MYSQL_ASSOC))
        {
            ?>
	        <hmtl>
             <body>
           <form action="return false" onsubmit="return false">
             <table>
                 <tr><td></td><td><input type="text" id="modid" name="idmodificar"value="<?php echo $row["id"]; ?>"     /></td></tr>
                 <tr><td>Nombre:</td><td><input type="text" id="modnombre" name="nombrem"value="<?php echo $row["nombre"]; ?>"   /></td></tr>
                 <tr><td>Apellido:</td><td><input type="text" id ="modapellido" value="<?php echo $row["apellido"]; ?>"   /></td></tr>
                 <tr><td>concepto:</td><td><input type="text" id ="modconcepto" value="<?php echo $row["concepto"]; ?>"   /></td></tr>
                 <tr><td>precio:</td><td><input type="text" id ="modprecio" value="<?php echo $row["precio"]; ?>"   /></td></tr>
                 <tr><td>fecha:</td><td><input type="text" id ="modfecha" value="<?php echo $row["fecha"]; ?>"   /></td></tr>
                 <tr><td><input type="button" onclick="cambio();" value="guardar"/></td></tr>
                 
                 </table>
               
           </form>
            </body>    
            </hmtl>
<?php 
        } 
 
           
      

            
}

?>







 