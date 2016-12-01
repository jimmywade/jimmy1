<?php

session_start();

$codigo = $_SESSION['codigo'];


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
    <script type="text/javascript" src="js/proyectosCrear.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
</head>
<body ng-app="proyectosCrear" class="fondo-azul">
<section ng-controller="crear">

    <div id="proyectosCrear">
        <div style="position:fixed; padding-left:0; z-index:100; width:100%;">
            <div class="container" id="menu" style="padding-left:0; z-index:100; width:100%;">
                <div class="row" style="padding-left:0;">
                    <div class="col-xs-12 col-xs-12 col-md-12" style="padding-left:0; padding-right:0;">
                        <div class="col-xs-2 col-xs-2 col-md-2">
                            <a href="proyectosConsultar.php?codigo=<?php echo $_GET['codigo'];?>&nombre=<?php echo $_GET['nombre'];?>&email=<?php echo $_GET['email'];?>" role="button"  class="btn btn-primary AAA"><i onmouseover="this.style.color='#FFF'" onmouseout="this.style.color='#EBEBEB'" class="fa fa-arrow-left fa-1x" style="text-decoration:none; color:#EBEBEB;" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-xs-4 col-xs-4 col-md-4">
                        </div>
                        <div class="col-xs-2 col-xs-2 col-md-2" style="padding:0;">
                            <button ng-click="proyectoNuevoReload()" class="btn btn-primary AAA"><i onmouseover="this.style.color='#FFF'" onmouseout="this.style.color='#EBEBEB'" class="fa fa-refresh fa-1x" style="text-decoration:none; color:#EBEBEB;" aria-hidden="true"></i></button>
                        </div>
                        <div class="col-xs-2 col-xs-2 col-md-2" style="padding:0;">
                             <a role="button" class="btn btn-primary AAA"><i onmouseover="this.style.color='#FFF'" onmouseout="this.style.color='#EBEBEB'" class="fa fa-user fa-1x" style="text-decoration:none; color:#EBEBEB;" aria-hidden="true"></i></a>
                        </div>
                        <div class="col-xs-2 col-xs-2 col-md-2" style="padding:0;">
                            <a role="button" class="btn btn-primary AAA"><i onmouseover="this.style.color='#FFF'" onmouseout="this.style.color='#EBEBEB'" class="fa fa-upload fa-1x" style="text-decoration:none; color:#EBEBEB;" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div style="clear:both; height:1em; position:fixed; z-index:50; width:100%; background-color:#E0EDFA;"></div> <!-- espacio -->
        </div>
        
        
        <div style="clear:both; height:3em;"></div> <!-- espacio -->
        
        <form action="../control/proyectoNuevo.php" method="GET" id="proyectosCrearForm">
            <div class="container">
                <div style="clear:both; height:1em;"></div> <!-- espacio -->
                <div class="row">
                    <div class="col-xs-12">          
                        <label for="proyectoDescripcion">Titulo del proyecto:</label><br>
                    </div>
                    <div class="col-xs-12">
                        <input style="width:100%;background-color:#E0EDFA;border-bottom: solid 2px #585858; border-top:none;border-left:none;border-right:none;" class="loginInput" type="text" name="nombreProyecto" id="nombreProyecto"><br>
                    </div>    
                </div>
                <div style="clear:both; height:2em;"></div> <!-- espacio -->
                <div class="row">
                    <div class="col-xs-12">          
                        <label for="proyectoDescripcion">Descripci&oacute;n del proyecto:</label><br>
                    </div>
                    <div class="col-xs-12">
                        <textarea style="width:100%;border:none;height:13em;" class="proyectosCrearInput" type="text" name="descripcionProyecto" id="descripcionProyecto" maxlength="1020" required></textarea><br>
                    </div>    
                </div>



                <div style="clear:both; height:2em;"></div> <!-- espacio -->

                <div class="form-group" style="padding:0; background-color:#FFF;">
                    <div class="col-xs-6">
                        <label class="control-label col-xs-12" for="duracionProyecto">Duraci&oacute;n del proyecto</label>    
                    </div>
                    <div class="col-xs-6">
                        <div style="clear:both; height:1em;"></div> <!-- espacio -->
                        <select style=" background-color:#FFF;border:none;" type="text" name="duracionProyecto" id="duracionProyecto" required>
                            <option value="30" >1 mes</option>
                            <option value="60" >2 meses</option>
                            <option value="90" >3 meses</option>
                            <option value="182" >6 meses</option>
                            <option value="365" >1 a&ntilde;o</option>
                        </select>
                    </div>
                    <div style="clear:both; height:1em;"></div> <!-- espacio -->
                </div>


                <div style="clear:both; height:2em;"></div> <!-- espacio -->

                <div class="form-group" style="padding:0; background-color:#FFF;">
                    <div class="col-xs-6">
                        <label class="control-label col-xs-12" for="periodicidadProyecto">Periodicidad de los encuentros</label>
                    </div>
                    <div class="col-xs-6">
                        <div style="clear:both; height:1em;"></div> <!-- espacio -->
                        <select style="background-color:#FFF;border:none;" type="text" name="periodicidadProyecto" id="periodicidadProyecto" required>
                            <option value="Diariamente" >Todos los dias</option>
                            <option value="Semanalmente" >Semanalmente</option>
                            <option value="Quincenalmente" >Quincenalmente</option>
                            <option value="Mensualmente" >Mensualmente</option>
                        </select>
                    </div>
                    <div style="clear:both; height:1em;"></div> <!-- espacio -->
                </div>


                <div style="clear:both; height:2em;"></div> <!-- espacio -->

                <div class="form-group" style="padding:0; background-color:#FFF;">
                    <div class="col-xs-6">
                        <label class="control-label col-xs-12" for="diaProyecto">D&iacute;a de los encuentros</label>
                    </div>
                    <div class="col-xs-6">
                        <div style="clear:both; height:1em;"></div> <!-- espacio -->
                        <select style="background-color:#FFF;border:none;" type="text" name="diaProyecto" id="diaProyecto" required>
                            <option value="Lunes" >Lunes</option>
                            <option value="Martes" >Martes</option>
                            <option value="Miercoles" >Miercoles</option>
                            <option value="Jueves" >Jueves</option>
                            <option value="Viernes" >Viernes</option>
                            <option value="Sabado" >Sabado</option>
                            <option value="Domingo" >Domingo</option>
                        </select>
                    </div>
                    <div style="clear:both; height:1em;"></div> <!-- espacio -->
                </div>


                <div style="clear:both; height:2em;"></div> <!-- espacio -->

                <div class="form-group" style="padding:0;">
                    <div class="col-xs-12" style="background-color:#FFF;">
                        <div class="col-xs-12">
                            <label class="control-label" for="hora">Hora de los encuentros</label>
                            <div style="clear:both; height:1em;"></div> <!-- espacio -->
                        </div>
                        <div class="col-xs-12">
                            <div class="col-xs-6">
                                <label class="control-label" for="horainiProyecto">Inicial</label>
                            </div>
                            <div class="col-xs-6">
                                <select style="background-color:#FFF;border:none;" type="text" name="horainiProyecto" id="horainiProyecto" required>
                                    <option value="06:00 am" >6:00 am</option>
                                    <option value="07:00 am" >7:00 am</option>
                                    <option value="08:00 am" >8:00 am</option>
                                    <option value="09:00 am" >9:00 am</option>
                                    <option value="10:00 am" >10:00 am</option>
                                    <option value="11:00 am" >11:00 am</option>
                                    <option value="12:00 pm" >12:00 pm</option>
                                    <option value="01:00 pm" >1:00 pm</option>
                                    <option value="02:00 pm" >2:00 pm</option>
                                    <option value="03:00 pm" >3:00 pm</option>
                                    <option value="04:00 pm" >4:00 pm</option>
                                    <option value="05:00 pm" >5:00 pm</option>
                                    <option value="06:00 pm" >6:00 pm</option>
                                    <option value="07:00 pm" >7:00 pm</option>
                                    <option value="08:00 pm" >8:00 pm</option>
                                </select>
                            </div>
                        </div>

                        <div style="clear:both; height:1em;"></div> <!-- espacio -->
                        
                        <div class="col-xs-12">
                            <div class="col-xs-6">
                                <label class="control-label" for="horafinProyecto">Final</label>
                            </div>
                            <div class="col-xs-6">
                                <select style="background-color:#FFF;border:none;" type="number" name="horafinProyecto" id="horafinProyecto" required>
                                    <option value="07:00 am" >7:00 am</option>
                                    <option value="08:00 am" >8:00 am</option>
                                    <option value="09:00 am" >9:00 am</option>
                                    <option value="10:00 am" >10:00 am</option>
                                    <option value="11:00 am" >11:00 am</option>
                                    <option value="12:00 pm" >12:00 pm</option>
                                    <option value="01:00 pm" >1:00 pm</option>
                                    <option value="02:00 pm" >2:00 pm</option>
                                    <option value="03:00 pm" >3:00 pm</option>
                                    <option value="04:00 pm" >4:00 pm</option>
                                    <option value="05:00 pm" >5:00 pm</option>
                                    <option value="06:00 pm" >6:00 pm</option>
                                    <option value="07:00 pm" >7:00 pm</option>
                                    <option value="08:00 pm" >8:00 pm</option>
                                    <option value="09:00 pm" >9:00 pm</option>
                                    <option value="10:00 pm" >10:00 pm</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div style="clear:both; height:1em;"></div> <!-- espacio -->
                </div>

                <input type="hidden" name="usuario" value="<?php echo $codigo; ?>">


                

                <div id="oops" style="display:none;" ><p style="color:red;"><i>Oops! ...parece que falta informaci&oacute;n importante</i></p></div>
                <div style="clear:both; height:20px;"></div>


                <div class="col-xs-1 col-xs-offset-10">
                    <input  role="button" type="submit" value="enviar" class="btn btn-primary">
                </div>


                <!--
                <div class="col-xs-1 col-xs-offset-10">
                    <input role="button" type="submit" value="enviar" class="btn btn-primary"><i class="fa fa-check fa-1x" style="text-decoration:none; color:#EBEBEB;" aria-hidden="true"></i></input>
                </div>
                -->


            </div>
        </form>
        
        <br><br>
    </div>

</section>
</body>
</html>