<?php 

	include "../../conexion.php";

	$id = $_GET['id'];


					$sql1=pg_query($conexion,"DELETE FROM facturacionhts.centro_costos
  		WHERE id_centrocosto=$id ") ;
 
 					echo ' <script language="javascript">alert("Datos eliminados con exito.");</script> ';
 					echo "<script>location.href='../centro_costos.php'</script>";


?>