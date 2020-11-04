 
 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel ="shortcut icon" href="mostrar\assets\img/Icono_Tec.png">
    
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
 <div class="container-fluid">
            <h2 class="text-center all-tittles">Lista de administradores</h2>
            <div class="div-table">
                <div class="div-table-row div-table-head">
                   
                    <div class="div-table-cell">Empresa</div>
                    <div class="div-table-cell">Contacto</div>
                    <div class="div-table-cell">Convenio</div>
                    <div class="div-table-cell">Carrera</div>
                </div> 
                <?php
                    include 'conn.php';
                     $s="SELECT * FROM  registro";
                    $res=mysqli_query($conn,$s) or die ("error al consultar");
                     while(($r=mysqli_fetch_array($res, MYSQLI_ASSOC))){
                    $empre=$r['empresa_n_empresa'];
                    $cont=$r['contacto_n_nom'];
                    $conv=$r['convenio_tipo'];
                    $carr=$r['carrera_carrera'];

                    echo "<div class=div-table-cell>$empre</div>";
                   echo " <div class=div-table-cell> $cont</div>";
                    echo "<div class=div-table-cell>$conv </div>";
                      echo "<div class=div-table-cell>$carr </div>";  
                    echo "<div class=div-table-cell>";
                   echo " </div>";
                  
                echo "</div>";
                
                    } 
                ?> 

            </div>                  
        </div>
 </body>
 </html>