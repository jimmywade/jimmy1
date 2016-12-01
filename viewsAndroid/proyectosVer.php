


<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title> ACD </title>
    <link rel="shortcut icon" href="../utilities/client/images/logo10.jpg" type="image/png" />
    <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <script type="text/javascript" src="../libs/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="../libs/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../libs/angular/angular.min.js"></script>
    <script type="text/javascript" src="../libs/angular/angular-resource.js"></script>
    <script type="text/javascript" src="js/c.js"></script>
     <!--
    <script type="text/javascript" src="js/proyectosConsultar.js"></script>
    -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
    
</head>
<body class="fondo-azul">
<section>
    <div id="proyectosConsultaFull">
        <div style="position:fixed; z-index:100; width:100%;">
            <div class="container" id="menu">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12" style="padding-right:0;">
                        <div class="col-xs-2 col-sm-2 col-md-2" style="padding-right:0;">
                            <a href="proyectosConsultar.php?codigo=<?php echo $_GET['codigo'];?>" role="button" class="btn btn-primary AAA"><i onmouseover="this.style.color='#FFF'" onmouseout="this.style.color='#EBEBEB'" class="fa fa-arrow-left fa-1x" style="text-decoration:none; color:#EBEBEB;" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4">
                        </div>
                        <div class="col-xs-2 col-sm-2 col-md-2" style="padding:0;">
                            <a href="proyectosVer.php?codigo=<?php echo $_GET['codigo'];?>&codigoProyecto=<?php echo $_GET['codigoProyecto'];?>&nombreProyecto=<?php echo $_GET['nombreProyecto'];?>&imagenProyecto=<?php echo $_GET['imagenProyecto'];?>&descripcionProyecto=<?php echo $_GET['descripcionProyecto'];?>" role="button" class="btn btn-primary AAA"><i onmouseover="this.style.color='#FFF'" onmouseout="this.style.color = '#EBEBEB'" class="fa fa-refresh fa-1x" style="text-decoration:none; color:#EBEBEB;" aria-hidden="true"></i></a>
                        </div>

                        <div class="col-xs-2 col-sm-2 col-md-2" style="padding:0;">
                            <a href="proyectosCrear.php?codigo=<?php echo $_GET['codigo'];?>" role="button" class="btn btn-primary AAA"><i onmouseover="this.style.color='#FFF'" onmouseout="this.style.color='#EBEBEB'" class="fa fa-plus fa-1x" style="text-decoration:none; color:#EBEBEB;" aria-hidden="true"></i></a>
                        </div>

                        <div class="col-xs-2 col-sm-2 col-md-2" style="padding:0;">
                             <a href="androidLogout.php" role="button" class="btn btn-primary AAA"><i onmouseover="this.style.color='#FFF'" onmouseout="this.style.color='#EBEBEB'" class="fa fa-sign-out fa-1x" style="text-decoration:none; color:#EBEBEB;" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div style="clear:both; height:1em; position:fixed; z-index:50; width:100%; background-color:#E0EDFA;"></div> <!-- espacio -->
        </div>
        
        <div style="clear:both; height:3em;"></div> <!-- espacio -->
        

        <div class="container">
            <div class="row">
                <div class="col-xs-12" style="padding-right:0;">
                      <h3><b><?php echo $_GET['nombreProyecto'];?></b></h3>
                      <br>
                </div>
                <div class="col-xs-12" style="padding-right:0;">
                      <img width=98% style="" src="../utilities/images/proyectos/<?php echo $_GET['imagenProyecto'];?>">
                </div>
                <div class="col-xs-12" style="padding-right:0;">
                    <br>
                    <p><b>DESCRIPCION DEL PROYECTO:</b> <?php echo $_GET['descripcionProyecto'];?></p>
                    <br>
                </div>
                <div class="col-xs-12" style="padding-right:0;">
                    <video width=98% src="../utilities/videos/proyectos/video_general.mp4" controls>
                    </video>
                </div>
            </div>
        </div>


        <br><br>
    </div>
</section>
</body>
</html>