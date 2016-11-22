<?php

		
		include "../../conexion.php";

		session_start();
	
		$nombre = $_POST['nombre'];
		$direccion = $_POST['direccion'];
		$ciudad = $_POST['ciudad'];

		
		
					pg_query($conexion,"INSERT INTO facturacionhts.centro_costos(
            nombre, direccion, municipios_id_municipio)
 			 VALUES('$nombre','$direccion','$ciudad');") or die(pg_last_error($conexion));

					echo ' <script language="javascript">alert("Centro de costo ingresado con éxito.");</script> ';
					echo "<script>location.href='../centro_costos.php'</script>";
					pg_close($conexion);	
				
?>