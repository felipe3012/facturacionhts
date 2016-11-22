// select relacionado Regiones y Departamentos //
$(function(){
$("#regional").change(function(){ // se activa el script cuando selecciono el select regional
	 regional=$(this).val() // Tomo el valor seleccionado
 
	 //envio a una pagina que hara la consulta sql y me devolvera los datos para poner en el select
 
	 $.get("../coordinador/controllers/departamentos.php?idregional="+regional,
		 function(data){
			 $("#departamento").html(data); // Tomo el resultado e inserto los datos en el select departamento								
		 });															
});
});


// select relacionado Departamentos y Ciudades //
$(function(){
$("#departamento").change(function(){
	 departamento=$(this).val() // Valor seleccionado
	 $.get("../coordinador/controllers/ciudades.php?idciudad="+departamento,
		 function(data){
			 $("#ciudad").html(data); //Tomo el resultado de pagina e inserto los datos en el select
		 });															
});
});	