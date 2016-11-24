<?php 

	include "../../conexion.php";

	$id = $_GET['id'];


					$sql1=pg_query($conexion,"DELETE FROM facturacionhts.clientes
  		WHERE id_cliente=$id ") ;
 
 					echo ' <script language="javascript">alert("Datos eliminados con exito.");</script> ';
 					echo "<script>location.href='../cliente.php'</script>";


?>