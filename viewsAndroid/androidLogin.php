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
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                    <div class="col-xs-4 col-sm-4 col-md-4 col-xs-offset-4 " style="padding:0;">
                        <img width=100% src="../utilities/client/images/logoActivate.png">
                    </div>
                </div>
            </div>


            <div style="clear:both; height:10px;"></div>
            
            <div class="row loginBox" >
                <form action="../control/control_usuario.php" method="GET">
                    <div class="col-xs-12 loginForm">
                        <div class="col-xs-12" style="padding:0;">
                            <div style="border-bottom: solid 1px #585858;">
                                <input style="border:none;width:100%;height:3em;" class="loginInput" type="email" name="email_usuario" placeholder="Email">
                            </div>
                            <div style="border-bottom: solid 1px #585858;">
                                <input style="border:none;width:100%;height:3em;" type="password" name="password_usuario" placeholder="Contrase&ntilde;a">
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



            <div style="clear:both; height:10px;"></div>


            <?php echo '<i style="color:red; margin-left:1em;">'.$_GET['error'].'</i>';?>


            <div class="row" >
                <div class="col-xs-12 col-xs-offset-0" style="padding:2em;">
                    <a href="#" style="text-decoration:none; color:#515151;"><i>Olvid&eacute;  mi contrase&ntilde;a</i></a>
                </div>
            </div>


            <div style="clear:both; height:2px;"></div>
            <div class="row" >
                <div class="col-xs-1 col-xs-offset-0" style="padding:2em;">
                    <a href="androidRegistrarse.php" role="button" class="btn btn-primary"> Registrarse</a>
                </div>
            </div>
            
            
        </div>
    </div>


</body>
</html>