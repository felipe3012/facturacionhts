<?php

session_start();

include "../../conexion.php";

$email=$_POST['email'];
$password=md5($_POST['password']);

	
$sql=pg_query($conexion, "SELECT * FROM facturacionhts.users WHERE email='$email'");
$f=pg_fetch_array($sql);

	if($email == $f['email']){

		if($password==$f['password']){

			if($f['rol'] == 2){
			$_SESSION['id']=$f['id'];
			$_SESSION['name']=$f['name'];
			echo '<script>alert("BIENVENIDO COORDINADOR")</script> ';
			echo "<script>location.href='../../coordinador/index.php'</script>";
			}elseif($f['rol'] == 1){
				
				$_SESSION['id']=$f['id'];
				$_SESSION['name']=$f['name'];
				echo '<script>alert("BIENVENIDO USUARIO")</script> ';
				echo "<script>location.href='../../user/index.php'</script>";
				
			}

		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='../../index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='../../index.php'</script>";
	}


?>

	