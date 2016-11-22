<?php
		
		$idproveedor = $_GET['id'];
		
		$nit = $_POST['nit'];
		$razon = $_POST['razon'];
		$estado = $_POST['estado'];
		
		
		include "../../conexion.php";

		
		
					$sql1=pg_query($conexion,"UPDATE facturacionhts.proveedor
		   SET nit='$nit', razonsocial_proveedor='$razon', id_estadoproveedor=$estado
		  WHERE id_proveedor=$idproveedor ") ;

					echo ' <script language="javascript">alert("Datos actualizados con éxito.");</script> ';
					echo "<script>location.href='../proveedor.php'</script>";
				
?>