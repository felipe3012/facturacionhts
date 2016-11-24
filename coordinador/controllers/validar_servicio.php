<?php

		
		include "../../conexion.php";

		session_start();
		$nombre = $_POST['nombre'];
		$descripcion = $_POST['descripcion'];
	
		
		
					pg_query($conexion,"INSERT INTO facturacionhts.servicios (nombre, descripcion ) VALUES('$nombre','$descripcion');") or die(pg_last_error($conexion));
					//echo 'Se ha registrado con exito';
					echo ' <script language="javascript">alert("Servicio ingresado con éxito.");</script> ';
					echo "<script>location.href='../servicio.php'</script>";
					pg_close($conexion);	
				
?>