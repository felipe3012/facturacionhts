<?php
		
		$idcliente = $_GET['id'];
		
		$nit = $_POST['nit'];
		$razon = $_POST['razon'];
	
		
		
		include "../../conexion.php";

		
		
					$sql1=pg_query($conexion,"UPDATE facturacionhts.clientes
		   SET nit='$nit', razonsocial_cliente='$razon' WHERE id_cliente=$idcliente") ;

					echo ' <script language="javascript">alert("Datos actualizados con éxito.");</script> ';
					echo "<script>location.href='../cliente.php'</script>";
				
?>