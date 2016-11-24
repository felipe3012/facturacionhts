<?php 

	include "../../conexion.php";

	$id = $_GET['id'];


					$sql1=pg_query($conexion,"DELETE FROM facturacionhts.servicios
  		WHERE id_servicio=$id ") ;
 
 					echo '<script language="javascript">alert("Datos eliminados con exito.");</script> ';
 					echo "<script>location.href='../servicio.php'</script>";


?>