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

    <title>Home</title>

    <!--FAVICON-->

    <!--bootstrap-->
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <!--font-awesome-->
    <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css">
    <!--hoja estilos principal
    <link rel="stylesheet" href="../assets/css/main.css" />-->
    <!--hoja estilos principal-->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">

</head>

<style type="text/css">
    body{
        font-family: 'Roboto Condensed', sans-serif;
        font-size: 20px;
        background:rgba(237,235,235,0.5);
    }

    a{
        text-align: center;
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
                    <a class="navbar-brand" href="home.php">
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
<br><br>
        <div class="container">
            <div class="row">
            <div class="col-md-3 col-md-offset-0">
            </div>
                <div class="col-md-6 col-md-offset-0">
                    <div class="panel panel-warning">
                        <div class="panel-heading"><h2 style="text-align: center;">Menú Principal</h2></div>

                        <div class="panel-body">
                        <div class="col-md-12">
                            <div class="list-group col-md-12">
                              <a class="list-group-item" href="proveedor.php">Prooveedores</a>
                              <a class="list-group-item" href="centro_costos.php">Centro de Costos</a>
                              <a class="list-group-item" href="#">Facturas</a>
                              <a class="list-group-item" href="cliente.php">Clientes</a>
                              <a class="list-group-item" href="servicio.php">Servicios</a>
                              <a class="list-group-item" href="#">Contactos</a>
                            </div>
                        </div>    
                        </div>
                        <div id="footer" class="panel-footer" style="color: black;">
                        Copyright <i class="fa fa-copyright" aria-hidden="true"></i> solucioneshts.com All Rights Reserved 2016
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-0">
                </div>
            </div>
        </div>

    </div>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


</body>
</html>
