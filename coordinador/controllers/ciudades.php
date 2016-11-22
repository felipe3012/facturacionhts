<?php 
include "../../conexion.php";
//Recibo id de regional
$id = $_GET['idciudad'];
//Consulto la tabla departamento por id de regional
$sqlciudad=pg_query($conexion, "SELECT id_municipio, nombre FROM facturacionhts.municipios where departamentos_id_departamento=$id");

//devuelvo el resultado
while($filacdad = pg_fetch_array($sqlciudad)){ ?>
			 <option value="<?php echo $filacdad['id_municipio']; ?>"> <?php echo $filacdad['nombre']; ?></option>
<?php } ?>
 