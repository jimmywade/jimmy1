<?php
if(isset($_POST['token'])){
    $token = $_POST['token'];
}else{
    header('Location: http://starapps.org/release/cocabonga/APP/login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta name=”robots” content=”nofollow” />
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title> cocabonga </title>
    <link rel="shortcut icon" href="../img/logo10.png" type="image/png" />
    <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <script type="text/javascript" src="../libs/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="../libs/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../libs/angular/angular.min.js"></script>
    <script type="text/javascript" src="../libs/angular/angular-resource.js"></script>
    <script type="text/javascript" src="../control/c.js"></script>    
    <script type="text/javascript" src="../control/crearItem.js"></script>


</head>
<body ng-app="cocabongaCrearItems" class="fondo-azul">

<!-- ...........................................................................................................  -->

<div class="container">
    <div class="row">
        <br>
        <?php include_once ('Vistas.php'); $menuNuevo = new Vistas(); echo $menuNuevo -> menu($token); ?>
    </div>
    <div class="row" data-ng-controller="crearItem">
        <div id="div-crear" class="col-xs-12 col-sm-6 col-md-4  col-sm-offset-3 col-md-offset-4" style="border:solid 2px #E0EDFA;">
            <h2 style="text-align:center;">Crear un item</h2>
            <br>
            <div id="aviso" class="aviso">
                <h5><b>&nbsp;Parece que faltan datos importantes</b></h5>
            </div>
            <br>
            <form id="form-crear" class="form-horizontal">

                <div class="form-group">
                    <label class="control-label col-sm-4" for="descripcion">Nombre *</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" ng-model="descripcion" id="descripcion" placeholder="Describir producto aqui..." maxlength="254" rows="6" required></textarea>
                    </div>
                </div>
                <br>
                <h5 style="text-align:center;"><b>Informacion adicional requerida:</b></h5><br>
                <div class="form-group">
                    <label class="control-label col-sm-4" for="marca">Marca *</label>
                    <div class="col-sm-8">
                        <select multiple class="form-control" type="number" ng-model="marca" id="marca" style="height:120px;" required>
                            <option ng-repeat="marca in marcas" value="{{marca.idMarca}}" >{{marca.nombreMarca}}</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                <label class="control-label col-sm-4" for="precio">Precio *</label>
                    <div class="col-sm-8">
                        <select multiple class="form-control" type="number" ng-model="precio" id="precio" style="height:120px;" required>
                            <option ng-repeat="precio in precios" value="{{precio.idPrecio}}" >{{precio.valorPrecio}}</option>
                        </select>
                    </div>
                </div>
                <hr>                
                <div class="form-group">
                    <label class="control-label col-sm-4" for="size">Talla o medida *</label>
                    <div class="col-sm-8">
                        <select multiple class="form-control" type="number" ng-model="size" id="size" style="height:100px;" required>
                            <option ng-repeat="size in sizes" value="{{size.idSize}}" >{{size.valorSize}} {{size.nombreUnidad}}</option>
                        </select>
                    </div>
                </div>
                <hr>

                <div class="form-group">
                    <label class="control-label col-sm-4" for="seccion">Seccion *</label>
                    <div class="col-sm-8">
                        <select multiple class="form-control" type="number" ng-model="seccion" id="seccion" style="height:120px;" required>
                            <option ng-repeat="seccion in secciones" value="{{seccion.idSeccion}}" >{{seccion.nombreSeccion}}</option>
                        </select>
                    </div>
                </div>

                <div class="form-group"> 
                    <div class="col-sm-offset-6 col-md-offset-7 col-sm-6 col-md-5">
                        <br>
                        <button ng-click="crearItem()" class="btn btn-success">Crear item</button>
                    </div>
                </div>
            </form>
        </div>    
    </div>
</div>

<!-- ...........................................................................................................  -->



</body>
</html>