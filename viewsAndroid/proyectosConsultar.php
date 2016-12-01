







<?php

session_start();
$codigo = $_SESSION['codigo'] = $_GET['codigo'];
//$nombre = $_SESSION['nombre'] = $_GET['nombre'];
//$email= $_SESSION['email'] = $_GET['email'];
setcookie("usuario", $_GET['codigo'], time() + 999999999);
if(empty($_COOKIE["usuario"]) || $_COOKIE["usuario"]==null || $_COOKIE["usuario"] ==''){
    header('Location: androidLogin.php');
    exit();
}

//echo $_SESSION['codigo'] ;


?>













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
    <script type="text/javascript" src="js/proyectosConsultar.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
</head>
<body class="fondo-azul">
<section>

    <div id="proyectosConsultaHalf" style="display:block;clear:both;">

        <div style="position:fixed; z-index:100; width:100%;">
            <div class="container" id="menu">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12" style="padding-right:0;">
                        <div class="col-xs-6 col-sm-6 col-md-6">
                        </div>
                        <div class="col-xs-2 col-sm-2 col-md-2" style="padding:0;">
                            <button ng-click="proyectosReload()" class="btn btn-primary AAA"><i onmouseover="this.style.color='#FFF'" onmouseout="this.style.color = '#EBEBEB'" class="fa fa-refresh fa-1x" style="text-decoration:none; color:#EBEBEB;" aria-hidden="true"></i></button>
                        </div>
                        <div class="col-xs-2 col-sm-2 col-md-2" style="padding:0;">
                             <a role="button" class="btn btn-primary AAA"><i onmouseover="this.style.color='#FFF'" onmouseout="this.style.color='#EBEBEB'" class="fa fa-user fa-1x" style="text-decoration:none; color:#EBEBEB;" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-xs-2 col-sm-2 col-md-2" style="padding:0;">
                            <a href="proyectosCrear.php?codigo=<?php echo $_GET['codigo'];?>&nombre=<?php echo $_GET['nombre'];?>&email=<?php echo $_GET['email'];?>" role="button" class="btn btn-primary AAA"><i onmouseover="this.style.color='#FFF'" onmouseout="this.style.color='#EBEBEB'" class="fa fa-plus fa-1x" style="text-decoration:none; color:#EBEBEB;" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div style="clear:both; height:1em; position:fixed; z-index:50; width:100%; background-color:#E0EDFA;"></div> <!-- espacio -->
        </div>
        
        <div style="clear:both; height:1em;"></div> <!-- espacio -->
        
        

                    <?php
                        require_once '../model/model_proyectos.php';
                        $model_proyectos = new model_proyectos;
                        $response_proyecto = $model_proyectos->listarProyectos4Angular();

                        if (mysqli_num_rows($response_proyecto) > 0) {
                            
                            while ($row = mysqli_fetch_array($response_proyecto)){

                                $codigoProyecto = $row["codigoProyectos"];
                                $nombreProyecto = utf8_encode($row["nombreProyectos"]);
                                $descripcionProyecto = utf8_encode($row["descripcionProyectos"]);
                                $imagenProyecto = $row["imagenProyectos"];

                                echo '
                                
                                    <div style="margin:2px;">
                                        <a href="proyectosVer.php?codigo='.$codigo.'&codigoProyecto='.$codigoProyecto.'&nombreProyecto='.$nombreProyecto.'&imagenProyecto='.$imagenProyecto.'&descripcionProyecto='.$descripcionProyecto.'" style="text-decoration:none;color:#515151;">
                                            <table width=100%>
                                                <tr style="background-color:#FFF; padding:1em; margin:1em;">
                                                    <td width=25% style="padding:2px;>
                                                        <div style="padding-right:0;  height: 9em;">
                                                            <img width=100% style="" src="../utilities/images/proyectos/'.$imagenProyecto.'">
                                                        </div>
                                                    </td>   
                                                    <td width=75%>
                                                        <div class="descripcion">
                                                            <p class="titulo"><b>'.$nombreProyecto.'</b></p>
                                                            <p>'.substr($descripcionProyecto,0,200).'...</p>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </a>
                                        <div style="clear:both; height:3em;"></div>  
                                    </div>
                                
                                ';

                                
                            }
                            

                            echo '<div style="clear:both; height:1em;"></div>';

                            //echo json_encode($json);
                            
                        } else {

                            $json["Proyectos"] = array();
                            //echo json_encode($json);
                        }
                    

                    
                          
                          

                    ?>


        <br><br>
    </div>


</section>
</body>
</html>





