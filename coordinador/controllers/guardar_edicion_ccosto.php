<?php
		
		$idccosto = $_GET['id'];
		
		$nombre = $_POST['nombre'];
		$direccion = $_POST['direccion'];
		$ciudad = $_POST['ciudad'];
		
		
		include "../../conexion.php";

		
		
					$sql1=pg_query($conexion,"UPDATE facturacionhts.centro_costos
   SET nombre='$nombre', direccion='$direccion', municipios_id_municipio=$ciudad
 WHERE id_centrocosto=$idccosto ") ;

					echo ' <script language="javascript">alert("Datos actualizados con éxito.");</script> ';
					echo "<script>location.href='../centro_costos.php'</script>";
				
?>