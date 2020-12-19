
$("#entrar").click(()=>{ 
	$.ajax({
		url: 'validar.php',
        method: 'POST', 
		data: {user:$("#user").val(),pass:$("#pass").val()},  
		dataType:'json'
    }).done( resultado => {  
		console.log(resultado)
    //    $('#resultado').html(resultado)//regresara error 
    });   
})

$(document).ready(function() {/*Para mostrar el formulario de registro */
	$('#registrar').click(function(){
		  $.ajax({
			type: "POST",
			url: "formregistrar.html",
			success: function(a) {
					$('#resultado').html(a);
	
			}
		   });
	   });
	});
	
	$(document).ready(function() {
	$('#modificar').click(function(){
		  $('#resultado').load('modbuscar.html');
	  });
	});
 
 function Registrar(){/*tomamos los valores del html y los enviamos a registro.php*/
 var verificar=true;
    var id=$("#id").val();
	var nombre=$("#nombre").val();/*obtengo el valor con jquery*/
	var apellido=$("#apellido").val();
	var concepto=$("#concepto").val();
	var precio=$("#precio").val();
	var datepicker=$("#datepicker").val();
	 /*no valido al id por que el script lo encontrara vacio le asigno +1 al valor obtenido en registro.php*/

 	 if(!nombre || nombre=="")/*no se puede poner en =="" ya que es un campo select*/
 	 {
 	 	alert("El campo 'CIUDAD' es requerido");
 	 	document.getElementById("ciudad").focus();
 	 	verificar=false;
 	 }
 	 else if(!apellido || apellido=="")
 	 {
 	 	alert("El campo 'LICENCIA' es requerido");
 	 	document.getElementById("lic").focus();
 	 	verificar=false;
 	 }
	else if(!concepto || concepto=="")
	{
		alert("El campo 'SERIE' es requerido");
		document.getElementById("serie").focus();
		verificar=false;	
	}
	else if(!precio || precio=="")
	{
		alert("El campo 'FECHA' es requerido");
		document.getElementById("team").focus();
		verificar=false;	
	}
	else if(!datepicker || datepicker=="")
	{
		alert("El campo 'FECHA' es requerido");
		document.getElementById("datepicker").focus();
		verificar=false;	
	}	
	
	if(verificar)
	{ 
 	 		
 	  
		$("#resultado").html("<img src='loader.gif'><span> Por favor espera un momento</span>");
		$.ajax({
			type:"POST",
			dataType:'html',
			url:"registro.php",
			data:"id="+id+"&nombre="+nombre+"&apellido="+apellido+"&concepto="+concepto+"&precio="+precio+"&datepicker="+datepicker,
			success: function(resp){/*Función: Recibe los datos que fueron llamados*/
				$('#resultado').html(resp);
				 }
		});
	}
}


function Modbuscar()
{ 
    		var verificar=true;
      		var mid=$("#mid").val();/*obtengo el valor con jquery*/
			 
	 		/*no valido al id por que el script lo encontrara vacio le asigno +1 al valor obtenido en registro.php*/

 	 
	 
if(verificar)
	{ 
 	 		
 	  
		$("#resultado").html("<img src='loader.gif'><span> Por favor espera un momento</span>");
		$.ajax({
			type:"POST",
			dataType:'html',
			url:"modbuscar.php",
			data:"mid="+mid,
			success: function(resp){/*Función: Recibe los datos que fueron llamados*/
				$('#resultado').html(resp);
				  
				 }
		});
	}
}


 

function cambio()
{
	var valor=true;
	        var modid=$("#modid").val();/*obtengo el valor con jquery*/
			var modnombre=$("#modnombre").val();
			var modapellido=$("#modapellido").val();
			var modconcepto=$("#modconcepto").val();
			var modprecio=$("#modprecio").val();
			var modfecha=$("#modfecha").val();
			
	if(valor)
	{
		 $.ajax({
			type:"POST",
			dataType:'html',
			url:'modificar.php',
			data:"modid="+modid+"&modnombre="+modnombre+"&modapellido="+modapellido+"&modconcepto="+modconcepto+"&modprecio="+modprecio+"&modfecha="+modfecha,
			success: function(resp){
				$('#resultado').html(resp);
			}
		});
	}
}

/*function modajax(){
	$(document).ready(function() {
 	$('#respuesta').load("modificar.html");

	   
    
});


}*/

 
/*function Cargar()
{
	//$('#datagrid').html("<img src='loader.gif'><span> Por favor espera un momento</span>");	
	$('#resultado').load('modbuscar.php');
	 	
}
*/


 