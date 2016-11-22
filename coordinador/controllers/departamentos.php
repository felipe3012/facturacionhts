<?php 
include "../../conexion.php";
//Recibo id de regional
$id = $_GET['idregional'];
//Consulto la tabla departamento por id de regional
$sqldepto=pg_query($conexion, "SELECT id_departamento, nombre FROM facturacionhts.departamentos where id_zona=$id");

//devuelvo el resultado
while($filadpto = pg_fetch_array($sqldepto)){ ?>
			 <option value="<?php echo $filadpto['id_departamento']; ?>"> <?php echo $filadpto['nombre']; ?></option>
<?php } ?>
 