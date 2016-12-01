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
    <script type="text/javascript" src="js/androidLogin.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />
</head>
<body ng-app="androidLogin" class="fondo-azul">

    <div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                    <div class="col-xs-7 col-xs-offset-2 " style="padding:0;">
                        <img width=100% src="../utilities/client/images/logoActivaByW.png">
                    </div>
                </div>
            </div>


            <div style="clear:both; height:20px;"></div>
            
            <div class="row loginBox" >
                <form action="../control/usuarioCrear.php" method="GET">
                    <div class="col-xs-12 loginForm">
                        <div class="col-xs-12" style="padding:0;">



                            <div class="col-xs-11" style="">
                                <div class="col-xs-5">
                                    <label class="control-label" for="entidad_usuario">Instituci&oacute;n educativa</label>
                                </div>
                                <div class="col-xs-5">
                                    <select style="background-color:#FFF;border:none;" type="text" name="entidad_usuario" id="entidad_usuario" required>
                                        <option value="entidad-84675" >I.E Madre Laura</option>
                                        <option value="entidad-84763" >I.E Bayunca</option>
                                        <option value="entidad-84738" >I.E Ciudad de Tunja</option>
                                        <option value="entidad-98734" >I.E Nstra. Sra. del Carmen</option>
                                        <option value="entidad-34562" >I.E Flamenco</option>
                                        <option value="entidad-37654" >I.E Colegio COMFENALCO</option>
                                        <option value="entidad-46732" >Otra...</option>
                                    </select>
                                </div>
                            </div>

                            <div style="border-bottom: solid 1px #585858;">
                                <input style="border:none;width:100%;height:3em;" class="loginInput" type="text" name="nombre_usuario" placeholder="Nombre">
                            </div>

                            <div style="border-bottom: solid 1px #585858;">
                                <input style="border:none;width:100%;height:3em;" class="loginInput" type="email" name="email_usuario" placeholder="Email">
                            </div>
                            <div style="border-bottom: solid 1px #585858;">
                                <input style="border:none;width:100%;height:3em;" type="password" name="password_usuario" placeholder="Contrase&ntilde;a">
                            </div>
                            <div style="border-bottom: solid 1px #585858;">
                                <input style="border:none;width:100%;height:3em;" type="password" name="UNNAMED_OJO" placeholder="Confirmar contrase&ntilde;a">
                            </div>
                            <input type="hidden" name="opcion" value="100">
                        </div>
                    </div>
                    <div style="clear:both; height:20px;"></div>
                    <div class="col-xs-1 col-xs-offset-10">
                        <button role="button" type="submit" class="btn btn-primary"><i class="fa fa-check fa-1x" style="text-decoration:none; color:#EBEBEB;" aria-hidden="true"></i></button>
                    </div>
                </form>
            </div>



            <div style="clear:both; height:20px;"></div>
            
        </div>
    </div>


</body>
</html>