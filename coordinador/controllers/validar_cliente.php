<?php

		
		include "../../conexion.php";

		session_start();
	
		$nit = $_POST['nit'];
		$razon = $_POST['razon'];


		
		
					pg_query($conexion,"INSERT INTO facturacionhts.clientes (nit, razonsocial_cliente ) VALUES('$nit','$razon');") or die(pg_last_error($conexion));
					//echo 'Se ha registrado con exito';
					echo ' <script language="javascript">alert("Cliente ingresado con éxito.");</script> ';
					echo "<script>location.href='../cliente.php'</script>";
					pg_close($conexion);	
				
?>