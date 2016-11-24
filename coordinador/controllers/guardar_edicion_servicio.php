<?php
		
		$idservicio = $_GET['id'];
		
		$nombre = $_POST['nombre'];
		$descripcion = $_POST['descripcion'];
		
		
		include "../../conexion.php";

		
		
					$sql1=pg_query($conexion,"UPDATE facturacionhts.servicios
		   SET nombre='$nombre', descripcion='$descripcion' WHERE id_servicio=$idservicio ") ;

					echo ' <script language="javascript">alert("Datos actualizados con éxito.");</script> ';
					echo "<script>location.href='../servicio.php'</script>";
				
?>