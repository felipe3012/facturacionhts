<?php

		
		include "../../conexion.php";

		session_start();
	
		$nit = $_POST['nit'];
		$razon = $_POST['razon'];
		$estado = $_POST['estado'];

		
		
					pg_query($conexion,"INSERT INTO facturacionhts.proveedor (nit, razonsocial_proveedor, id_estadoproveedor) VALUES('$nit','$razon','$estado');") or die(pg_last_error($conexion));
					//echo 'Se ha registrado con exito';
					echo ' <script language="javascript">alert("Proveedor ingresado con éxito.");</script> ';
					echo "<script>location.href='../proveedor.php'</script>";
					pg_close($conexion);	
				
?>