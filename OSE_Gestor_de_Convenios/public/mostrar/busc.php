<!DOCTYPE html>
<php lang="es">
<head>
    <title>Administradores</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Shortcut Icon" type="image/x-icon" href="assets/icons/Icono_Tec.ico" />
    <script src="js/sweet-alert.min.js"></script>
    <link rel="stylesheet" href="css/sweet-alert.css">
    <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/barra.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery-1.11.2.min.js"><\/script>')</script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/main.js"></script>
</head>
<body>
 
        <div class="container">
            <div class="page-header">
              <h1 class="all-tittles">Administracion de Convenios <small>Convenios</small></h1>
            </div>
        </div>
        <div class="container-fluid">
            <ul class="nav nav-tabs nav-justified"  style="font-size: 17px;">
              <li role="presentation"  class="active"><a href="admin.php">Convenios</a></li>
            </ul>
        </div>
        <div class="container-fluid"  style="margin: 50px 0;">
            <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <img src="assets/img/user01.png" alt="user" class="img-responsive center-box" style="max-width: 110px;">
                </div>
                <div class="col-xs-12 col-sm-8 col-md-8 text-justify lead">
                    Bienvenido a la sección donde se encuentra el listado de los convenios disponibles con los que cuenta la escuela 
                </div>
            </div>
        </div>
          <!-- <h2 class="text-center all-tittles">Carrera (Maestria oDoctorado) a buscar</h2>-->

<div class="flexsearch">
        <div class="flexsearch--wrapper">
            <form class="flexsearch--form" action="busc.php" method="POST">
                <div class="flexsearch--input-wrapper">
                    <input class="flexsearch--input" type="search" placeholder="Buscar carrera">
                </div>
                <input class="flexsearch--submit" type="submit" value="&#10140;"/>
            </form>
        </div>
</div>
           <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 lead">
                    <ol class="breadcrumb">
                        <li><a href="consul.php">Inicio</a></li>
                    </ol>
                </div>
            </div>
        </div>
              <div class="container-fluid">
            <h2 class="text-center all-tittles">Lista de Convenios</h2>
            <div class="div-table">
                <div class="div-table-row div-table-head">
                   
                    <div class="div-table-cell">Empresa</div>
                    
                    <div class="div-table-cell">Convenio</div>
                    <div class="div-table-cell">Carrera</div>
                </div>
<?php 
	include 'conn.php';

	$buscar=$_POST['bus'];

	 $s="SELECT * FROM  registro WHERE carrera_carrera LIKE '$buscar' ";
                    $res=mysqli_query($conn,$s) or die ("error al consultar");
                     while(($r=mysqli_fetch_array($res, MYSQLI_ASSOC))){
                    $empre=$r['empresa_n_empresa'];
                    $cont=$r['contacto_n_cont'];
                    $conv=$r['convenio_tipo'];
                    $carr=$r['carrera_carrera'];

                    echo "<div class=div-table-cell>$empre</div>";
                  
                    echo "<div class=div-table-cell>$conv </div>";
                      echo "<div class=div-table-cell>$carr </div>";  
                    echo "<div class=div-table-cell>";
                   echo " </div>";
                  
                echo "</div>";
                
                    } 


 ?>
   </div>                  
        </div>