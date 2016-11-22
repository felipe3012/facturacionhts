<?php 
session_start();

$usuario = $_SESSION['name'];


include "../conexion.php";

require_once("../session.php");

	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Proveedores</title>

    <!--FAVICON-->

    <!--bootstrap-->
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <!--font-awesome-->
       <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
    <!--hoja estilos principal-->

    <!--hoja estilos principal-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

    <!--jquery-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="../assets/js/jquery-3.1.1.min.js"></script>

    <!--bootstrap js-->
    <script src="../bootstrap/js/bootstrap.min.js"></script>


</head>

<style type="text/css">
    body{
        font-family: 'Roboto Condensed', sans-serif;
        font-size: 20px;
        background:rgba(237,235,235,0.5);
    }

</style>

<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="index.php">
                        Facturación HTS
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                    <li><a href="index.php" role="button" aria-expanded="false"><i class="fa fa-home" aria-hidden="true"></i> Inicio</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <?php echo $usuario; ?> <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="../logout.php" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container">
            <div class="row">
                <div class="col-md-12 col-md-offset-0">
                    <div class="panel panel-default">
                        <div class="panel-heading"><h2 style="text-align:center;">Proveedores</h2></div>
                        <div class="panel-body">
                        <?php $sql=("SELECT p.id_proveedor, p.nit, p.razonsocial_proveedor, e.descripcion_estado
  FROM facturacionhts.proveedor p 
  LEFT JOIN facturacionhts.estado_proveedor e ON e.id_estadoproveedor = p.id_estadoproveedor order by p.id_proveedor
");
						$query=pg_query($conexion, $sql);
						?>
                        <table class="table table-hover" data-toggle="table" data-url="https://api.github.com/users/wenzhixin/repos" data-query-params="queryParams" data-pagination="true" data-search="true" data-height="300">
						    <thead>
						      <tr>
						        <th>ID</th>
						        <th>NIT</th>
						        <th>RAZÓN SOCIAL</th>
						        <th>ESTADO</th>
						        <th>EDITAR</th>
                                <th>ELIMINAR</th>
						      </tr>
						    </thead>
						    <tbody>
						<?php 
						while($arreglo=pg_fetch_array($query)){
						?>  
						      <tr>
						        <td><?php  echo $arreglo[0]; ?></td>
						        <td><?php  echo $arreglo[1]; ?></td>
						        <td><?php  echo $arreglo[2]; ?></td>
						        <td><?php  echo $arreglo[3]; ?></td>
						        <?php echo "<td><a href='editar_proveedor.php?id=$arreglo[0]'><i class='fa fa-pencil' aria-hidden='true'></i></a></td>"; ?>
                                <td><a href="javascript:;" onclick="aviso('controllers/delete_proveedor.php?id=<?php echo $arreglo[0];?>'); return false;"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
						      </tr>
						<?php 
						}
						?>      
						    </tbody>
						  </table>
						  <a href="nuevo_proveedor.php" class="btn btn-primary" role="button">Agregar un nuevo Proveedor</a>
                        </div>
                        <div id="footer" class="panel-footer">
                        Copyright <i class="fa fa-copyright" aria-hidden="true"></i> solucioneshts.com All Rights Reserved 2016
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>

    <script type="text/javascript">
    	function queryParams() {
		    return {
		        type: 'owner',
		        sort: 'updated',
		        direction: 'desc',
		        per_page: 100,
		        page: 1
		    };
		}	
    </script>

    <script language="JavaScript">
    function aviso(url){
    if (!confirm("ALERTA!! va a proceder a eliminar este registro, si desea eliminarlo de click en ACEPTAR\n de lo contrario de click en CANCELAR.")) {
    return false;
    }
    else {
    document.location = url;
    return true;
    }
    }
    </script>

</body>
</html>
