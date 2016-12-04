<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>activate y embalate</title>
    <link rel="shortcut icon" href="../media/images/AE.png" type="image/png" />
    <link rel="stylesheet" href="css/styles.css" />
    <script type="text/javascript" src="../libs/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.min.css" />
    <script type="text/javascript" src="../libs/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../libs/angular/angular.min.js"></script>
    <script type="text/javascript" src="../libs/angular/angular-resource.js"></script>
    <!-- shim es necesario para soportar < IE9-->
    <script src="../libs/angular/ng-file-upload-shim.min.js"></script>
    <script src="../libs/angular/ng-file-upload.min.js"></script>
    <script type="text/javascript" src="js/vlntr.js"></script>
    <script type="text/javascript" src="js/volunteer.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</head>

<body ng-app="Embalate" class="fondo-azul">

<section ng-controller="projects" data-ng-init="setDefaultValues(); setDefaultViews(); temaRead()">
















<section id="mainMenu" style="display:none;">

    <div style="position:fixed; z-index:100; width:100%;">
        <div>
            <div class="row">
                <div class="col-xs-12" style="background-color:#4285F4; color:#F0F0F0; padding-top:2em; padding-right:2em; padding-bottom: 3em;">
                    <div class="col-xs-1" style="color:#fff;">
                        <div id="botonAtras" style="display:none;" ng-click="hs(divActive, 'proyectosRead'); hideSingle('botonAtras')">
                            <i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i>
                        </div>    
                    </div>
                    
                    <div class="col-xs-5" style="padding:0; font-size:22px;">
                        {{h1}}
                    </div>
                    <div ng-click="hs(divActive, 'proyectosRead'); setDivActive('proyectosRead')" class="col-xs-2" style="padding:0;  text-align:center; ">
                        <i onmouseover="this.style.color='#FFF'" onmouseout="this.style.color = '#EBEBEB'" class="fa fa-paperclip fa-2x" style="text-decoration:none; color:#EBEBEB;" aria-hidden="true"></i>
                    </div>
                    <div ng-click="myProfile( divActive,'volunteerVer' ); setDivActive('volunteerVer') " class="col-xs-2" style="padding:0;  text-align:center;">
                        <i onmouseover="this.style.color='#FFF'" onmouseout="this.style.color='#EBEBEB'" class="fa fa-user fa-2x" style="text-decoration:none; color:#EBEBEB;" aria-hidden="true"></i>
                    </div>
                    <div ng-click="showSingle('menuLayout10')" class="col-xs-2" style="padding:0;  text-align:center;">
                        <i onmouseover="this.style.color='#FFF'" onmouseout="this.style.color='#EBEBEB'" class="fa fa-ellipsis-v fa-2x" style="text-decoration:none; color:#EBEBEB;" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
        </div>
        <div style="clear:both; height:1em; position:fixed; z-index:50; width:100%; background-color:#E0EDFA;"></div> <!-- espacio -->
    </div>


    <div id="menuLayout10" class="container" style="display:none; position:fixed; z-index:200; width:100%;">
        <div class="row">
            <div class="col-xs-3 col-xs-offset-8" style="padding:1em; background-color:#fff; box-shadow: 0px 0px 40px #666666;">
                <div ng-click="hs(divActive, 'proyectosCreate'); hideSingle('menuLayout10'); setDivActive('proyectosCreate')" style="width:100%; padding:1em; cursor:pointer; ">Crear proyecto</div><br>
                <div ng-click="misProyectos(divActive,'misproyecRead'); hideSingle('menuLayout10')" style="width:100%; padding:1em; cursor:pointer; ">Mis proyectos</div><br>
                <div ng-click="destruirSesion(); hideSingle('menuLayout10')" style="width:100%; padding:1em; cursor:pointer; ">Cerrar sesi&oacute;n</div><br>
            </div>
        </div>
    </div>

</section>













<section id="volunteerCreate" style="display:none;">
    <div>
        <br>
        <div class="container">
            <div class="row">


                
                <div style="clear:both; height:3em;"></div> <!--espacio -->

                <div class="col-xs-6 col-sm-3  col-xs-offset-3 col-sm-offset-0 " style="padding:0;">
                    <div style="clear:both; height:4em;"></div> <!--espacio -->
                    <img width=100% src="../media/images/logoActivaByW.png">
                    <div style="clear:both; height:2em;"></div> <!--espacio -->
                </div>

                

                

                <div id="errrr" class="col-xs-12 col-sm-7 col-xs-offset-0 col-sm-offset-2 loginBox" style="border:solid 0px red; background-color:#fff;">

                    <div class="loginForm">
                        <div class="col-xs-12">
                        
                            <div class="col-xs-11">
                                <div class="col-xs-5">
                                    <label class="control-label" for="paisUsuario">Pa&iacute;s</label>
                                </div>
                                <div class="col-xs-5">
                                    <select style="background-color:#FFF;border:none;" type="text" ng-model="paisUsuario" id="paisUsuario" required>
                                        <option value="1" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Colombia &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
                                    </select>
                                </div>
                            </div>

                            <div style="clear:both; height:1em;"></div>
                            
                            <div class="col-xs-11">
                                <div class="col-xs-5">
                                    <label class="control-label" for="ciudadUsuario">Ciudad</label>
                                </div>
                                <div class="col-xs-5">
                                    <select style="background-color:#FFF;border:none;" type="text" ng-model="ciudadUsuario" id="ciudadUsuario" required>
                                        <option value="1" >Cartagena de Indias</option>
                                        <option value="2" >Maria la baja</option>
                                    </select>
                                </div>
                            </div>

                            <div style="clear:both; height:0.5em;"></div>                        

                            <div style="border-bottom: solid 1px #585858;">
                                <input style="border:none;width:100%;height:3em;" type="text" class="loginInput" ng-model="nombreUsuario" placeholder="Nombre">
                            </div>

                            <div style="border-bottom: solid 1px #585858;">
                                <input style="border:none;width:100%;height:3em;" type="text" class="loginInput" ng-model="identificacionUsuario" placeholder="Identificaci&oacute;n">
                            </div>

                            <div style="border-bottom: solid 1px #585858;">
                                <input style="border:none;width:100%;height:3em;" type="text" class="loginInput" ng-model="telefonoUsuario" placeholder="Tel&eacute;fono">
                            </div>

                            <div style="border-bottom: solid 1px #585858;">
                                <input style="border:none;width:100%;height:3em;" type="text" class="loginInput" ng-model="direccionUsuario" placeholder="Direcci&oacute;n">
                            </div>

                            <div style="border-bottom: solid 1px #585858;">
                                <input style="border:none;width:100%;height:3em;" type="text" class="loginInput" ng-model="emailUsuario" placeholder="Email">
                            </div>
                            <div style="border-bottom: solid 1px #585858;">
                                <input style="border:none;width:100%;height:3em;" type="password" type="text" ng-model="passwordUsuario" placeholder="Contrase&ntilde;a">
                            </div>
                            <div style="border-bottom: solid 1px #585858;">
                                <input style="border:none;width:100%;height:3em;" type="password" ng-model="passwordUsuario2" placeholder="Confirmar contrase&ntilde;a">
                            </div>
                            <input type="hidden" name="opcion" value="100">
                        </div>
                    </div>
                    <div style="clear:both; height:20px;"></div>
                    <div class="col-xs-1 col-xs-offset-10" style="padding:0;">
                        <button ng-click="crearUsuario('volunteerCreate','volunteerLogin')" class="btn btn-default" style="width:100%;""><i class="fa fa-check fa-1x" style="text-decoration:none; color:#585858;" aria-hidden="true"></i></button>
                    </div>

                    <div style="clear:both; height:2px;"></div> <!--espacio -->

                </div>


            </div> <!-- row -->
                





            <div id="errr" style="display:block; color:red;">
                <h6><i>{{erText}}</i></h6>
            </div>

            <div style="clear:both; height:20px;"></div>
            
        </div>
    </div>

</section>







<section id="volunteerLogin" style="display:block;">
    <div><br>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12" style="">
                    <div class="col-xs-4 col-sm-4 col-md-4  col-xs-offset-4 col-sm-offset-4 col-md-offset-4 " style="padding-left:2em; padding-right:2em;">
                        <img width=100% src="../media/images/logoActivate.png">
                    </div>
                </div>
            </div>

            <div style="clear:both;"></div> <!-- Espacio -->
    
            <div class="row loginBox">
                <div class="col-xs-6 col-xs-offset-3">

                    <div class="row">
                        <div class="col-xs-12 loginForm" id="bordeAviso" ng-keyup="bordeAvisoClear()">
                            <div class="col-xs-12" style="padding:0;">
                                <div style="border-bottom: solid 1px #585858;">
                                    <input style="border:none;width:100%;height:3em;" class="loginInput" type="email" ng-model="emailEstudiante" placeholder="Email" required>
                                </div>
                                <div style="border-bottom: solid 1px #585858;">
                                    <input style="border:none;width:100%;height:3em;" type="password" ng-model="passwordEstudiante" placeholder="Contrase&ntilde;a" required>
                                </div>
                            </div>
                        </div>
                       
                        <div style="clear:both; height:20px;"></div>
                        <div class="row" style="padding:0;">
                            <div class="col-xs-10 col-xs-offset-0" id="mensajeAviso">
                                <h6><i style="color:red;">{{errorLogin}}</i></h6>
                            </div>
                            <div class="col-xs-2 col-xs-offset-0">
                                <button role="button" style="width:100%;" ng-click="buttonPerfilRead()" class="btn btn-primary"><i class="fa fa-check fa-1x" style="text-decoration:none; color:#EBEBEB;" aria-hidden="true"></i></button>
                            </div>
                        </div>    
                    </div>

                    <div style="clear:both; height:2em;"></div>

                    <div class="row">
                        <div class="col-xs-12" style="padding:0;">
                            <a href="#" style="text-decoration:none; color:#515151;"><i>Olvid&eacute;  mi contrase&ntilde;a</i></a>
                        </div>
                    </div>

                    <div style="clear:both; height:1em;"></div>

                    <div class="row" style="text-align:right;">
                        <div class="col-xs-2 col-xs-offset-10" style="padding:0;">
                            <a style="width:100%;" ng-click="hsf('volunteerLogin','volunteerCreate')" role="button" class="btn btn-primary">Registrarse</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>










<section id="volunteerVer" style="display:none;">
    
    <div style="clear:both; height:9em;"></div> <!-- espacio -->


    <div style="clear:both; height:2em;"></div>
    <div class="container" ng-repeat="m in myprofi" style="background-color:#fafafa; padding:2em;">
        <div class="row">
            <div class="col-xs-12 col-sm-3" >


                <div id="imageEstudiante" style="display:block;">
                    <img ng-click="hs('imageEstudiante','imageUpdate')" style="width:100%;" src="../media/estudiantes/images/{{m.imagenEstudiante}}">                
                </div>
            

                <div style="clear:both; height:2em;"></div>

                <div id="imageUpdate" style="display:none;">
                    <div>
                    <!--
                    Upload on form submit or button click
                    <form name="form">
                        Single Image with validations
                        <div class="button" ngf-select ng-model="file" name="file" ngf-pattern="'image/*'"
                        ngf-accept="'image/*'" ngf-max-size="20MB" ngf-min-height="100" 
                        ngf-resize="{width: 100, height: 100}">Select</div>

                        Multiple files
                        <div class="button" ngf-select ng-model="files" ngf-multiple="true">Select</div>
                        Drop files: <div ngf-drop ng-model="files" class="drop-box">Drop</div>
                        <button type="submit" ng-click="submit()">submit</button>
                    </form>
                    -->

                    <!--
                    Upload right away after file selection:
                    -->

                    <div style="text-align:center; margin:0 auto;" class="btn btn-primary" ngf-select="upload($file)"><button><i class="fa fa-file-image-o fa-4x" aria-hidden="true"></i></button></div>
                    <h6><i>Seleccione una imagen de perfil</i></h6>

                    <!--                
                    <div class="button" ngf-select="uploadFiles($files)" multiple="multiple">Upload on file select</div>
                    -->

                    <!--
                    Drop File:
                    <div ngf-drop="uploadFiles($files)" class="drop-box"
                    ngf-drag-over-class="'dragover'" ngf-multiple="true" 
                    ngf-pattern="'image/*,application/pdf'">Drop Images or PDFs files here</div>
                    <div ngf-no-file-drop>File Drag/Drop is not supported for this browser</div>

                    Image thumbnail: <img ngf-thumbnail="file || '/thumb.jpg'">
                    Audio preview: <audio controls ngf-src="file"></audio>
                    Video preview: <video controls ngf-src="file"></video>
                    -->
                    </div>

                </div>




            </div>    
            


            <div class="col-xs-12 col-sm-8 col-sm-offset-1">

                <div class="row" style="background-color:#FFF;">
                    <div class="col-xs-6">
                        <h3>Nombre:</h3> 
                    </div>
                    <div class="col-xs-6">
                        <br>{{m.nombreEstudiante}}
                    </div> 
                </div>
                <div class="row" style="background-color:#FFF; margin-top:1em;">
                    <div class="col-xs-6">
                        <h3>Email:</h3> 
                    </div>
                    <div class="col-xs-6" >
                        <br>{{m.emailEstudiante}}
                    </div>    
                </div>
                <div class="row" style="background-color:#FFF; margin-top:1em;">
                    <div class="col-xs-6">
                        <h3>Instituci&oacute;n educativa:</h3>
                    </div>
                    <div class="col-xs-6">
                        <br>{{m.nombreInstitucion}}
                    </div>    
                </div>
                <div class="row" style="background-color:#FFF; margin-top:1em;">
                    <div class="col-xs-6">
                        <h3>Ubicacion:</h3>
                    </div>
                    <div class="col-xs-6">
                        <br>{{m.nombreCiudad}} - {{m.nombrePais}}
                    </div>    
                </div>             
            </div>
        </div>
    </div>
</section>
















        
 












<section id="volunteerDelete" style="display:none;">
    
</section>


















<section id="proyectosCreate" style="display:none;">



</section>


















<section id="proyectosRead" style="display:none;">
    
    <div id="proyectosConsultaHalf" style="display:block;clear:both;">
        
        <div style="clear:both; height:9em;"></div> <!-- espacio -->
        <div class="container">
            <div class="row" ng-repeat="l in listado">
                <div style="background-color:#FFF; padding:1em; border-bottom:solid 1px #d5d5d5;" 
                    ng-click="esteProyecto($index,l.codigoProyecto,l.duracionProyecto); hs(divActive,'proyectosDetalle'); setDivActive('proyectosDetalle') "> 
                    <div class="col-xs-2">
                        <img style="width:100%;" src="../media/proyectos/images/{{l.nombreImagen}}">
                    </div>
                    <div class="col-xs-8 col-xs-offset-1">
                        <div class="col-xs-12" style="color:#a8a8a8; text-align:center;"><h3><b>{{l.nombreProyecto}}</b></h3></div>
                        <div class="col-xs-12">{{l.problemaProyecto | cortarTexto:250}}</div>
                    </div>
                    <div style="clear:both; height:1px;"></div> <!-- espacio -->
                </div>
                <div style="clear:both; height:2em;"></div> <!-- espacio -->
            </div>
        </div>
        
    </div>

</section>




















<section id="proyectosDetalle" style="display:none;">


        <div style="clear:both; height:9em;"></div> <!-- espacio -->


        <div class="container" style="background-color:#FFF; padding-left:5em; padding-right:5em; padding-top:1em; padding-bottom:5em; margin-bottom:40px;">
            <div class="row">
                <div class="col-xs-3">
                    <img style="width:100%;" src="../media/proyectos/images/{{listado[indice].nombreImagen}}">
                </div>
                <div class="col-xs-8 above"><h3 style="text-align:center;">{{listado[indice].nombreProyecto}}</h3></div>
            </div>

            <div class="row" style="clear:both; height:2em;"><hr></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-3">
                    <h4>Pa&iacute;s beneficiario:</h4>
                </div>
                <div class="col-xs-9 above">
                    {{listado[indice].nombrePais}}
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-3">
                    <h4>Ciudad:</h4>
                </div>
                <div class="col-xs-9 above">
                    {{listado[indice].nombreCiudad}}
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-3">
                    <h4>Institucion educativa:</h4>
                </div>
                <div class="col-xs-9 above">
                    {{listado[indice].nombreInstitucion}}
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-3">
                    <h4>Estudiantes Responsables:</h4>
                </div>
                <div class="col-xs-9 above">
                    {{listado[indice].nombreEstudiante}}
                </div>
            </div>
            <!--
            <div class="row" style="clear:both; height:1em;"></div> 
            --> 
            <!-- espacio -->
            <!--
            <div class="row">
                <div class="col-xs-3">
                    <h4>Personas y entidades de apoyo:</h4>
                </div>
                <div class="col-xs-9">
                    
                </div>
            </div>
            -->
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-3">
                    <h4>Tema:</h4>
                </div>
                <div class="col-xs-9 above">
                    {{listado[indice].nombreTema}}
                </div>
            </div>
            
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-3">
                    <h4>Descripcion:</h4>
                </div>
                <div class="col-xs-9 above">
                    {{listado[indice].problemaProyecto}}
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-3">
                    <h4>Objetivo general:</h4>
                </div>
                <div class="col-xs-9 above">
                    {{listado[indice].objetivoProyecto}}
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-3">
                    <h4>Objetivos especificos:</h4>
                </div>
                <div class="col-xs-9 above">
                    {{listado[indice].especificoProyecto}}
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-3">
                    <h4>Resultados Esperados:</h4>
                </div>
                <div class="col-xs-9 above">
                    {{listado[indice].resultadoProyecto}}
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-3">
                    <h4>Actividades:</h4>
                </div>
                <div class="col-xs-9 above">
                    {{listado[indice].actividadProyecto}}
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-3">
                <h4>Poblaci&oacute;n beneficiaria:</h4>
                </div>
                <div class="col-xs-9 above">
                    {{listado[indice].beneficiarioProyecto}}
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-3">
                    <h4>Area geografica de intervenci&oacute;n:</h4>
                </div>
                <div class="col-xs-9 above">
                    {{listado[indice].areaProyecto}}
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-3">
                    <h4>Valor total del proyecto:</h4>
                </div>
                <div class="col-xs-9 above">
                    {{listado[indice].valorProyecto}}
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-3">
                    <h4>Tiempo de duraci&oacute;n:</h4>
                </div>
                <div class="col-xs-9 above">
                    {{months}} {{meses}}
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-12">
                    <img style="width:100%;" src="../media/proyectos/images/{{listado[indice].nombreImagen}}">
                </div>
            </div>

        </div>

</section>


























<section id="misproyecRead" style="display:none;">

    <div>
 
        <div style="clear:both; height:9em;"></div> <!-- espacio -->
        <div class="container">
            <div class="row" ng-repeat="mp in mispro">
                <div class="col-xs-12" style="background-color:#FFF; padding:1em; border-bottom:solid 1px #d5d5d5; cursor:pointer;">
                    <div ng-click="esteProyectoMisproyec($index,mp.codigoProyecto,mp.duracionProyecto); hs(divActive,'misproyecDetalle'); setDivActive('misproyecDetalle')">
                        <div class="col-xs-2">
                            <img style="width:100%;" src="../media/proyectos/images/{{mp.nombreImagen}}">
                        </div>
                        <div class="col-xs-6 col-xs-offset-1">
                            <div class="col-xs-12" style="color:#a8a8a8; text-align:center;"><h3><b> El indice es: {{miIndice}} {{mp.nombreProyecto}}</b></h3></div>
                            <div class="col-xs-12">{{mp.problemaProyecto | cortarTexto:250 }}</div>
                        </div>

                        <div class="col-xs-1 col-xs-offset-1" title="Edit project">
                            <div style="width:100%;">
                                <div style="clear:both; height:4em;"></div> <!-- espacio -->
                            </div>
                            <div class="btn btn-default" style="width:100%;">
                                <i style="margin:0 auto; color:#d5d5d5;" class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="col-xs-1"  title="Delete this project">
                            <div style="width:100%;">
                                <div style="clear:both; height:4em;"></div> <!-- espacio -->
                            </div>
                            <div id="elix" class="btn btn-default" style="width:100%; display: block;" ng-click="hs('elix','elix2')">
                                <i style="margin:0 auto; color:#d5d5d5;" class="fa fa-times fa-2x" aria-hidden="true"></i>
                            </div>
                            <div id="elix2" class="btn btn-danger" style="width:100%; display: none;" ng-click="mysproDelete(mp.codigoProyecto); hs('elix2','elix'); ">
                                <i style="margin:0 auto;" class="fa fa-times fa-2x" aria-hidden="true"></i>
                            </div> 
                        </div>

                    </div>                    
                </div>

                <div style="clear:both; height:2em;"></div> <!-- espacio -->
            </div>
        </div>
        
    </div>

</section>
































<section id="misproyecDetalle" style="display:none;">


        <div style="clear:both; height:9em;"></div> <!-- espacio -->


        <div class="container" style="background-color:#FFF; padding-left:5em; padding-right:5em; padding-top:1em; padding-bottom:5em; margin-bottom:40px;">
            <div class="row">
                <div class="col-xs-3">
                    <img style="width:100%;" src="../media/proyectos/images/{{mispro[miIndice].nombreImagen}}">
                </div>
                <div class="col-xs-8 above"><h3 style="text-align:center;">{{mispro[miIndice].nombreProyecto}}</h3></div>
            </div>

            <div class="row" style="clear:both; height:2em;"><hr></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-3">
                    <h4>Pa&iacute;s beneficiario:</h4>
                </div>
                <div class="col-xs-9 above">
                    {{mispro[miIndice].nombrePais}}
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-3">
                    <h4>Ciudad:</h4>
                </div>
                <div class="col-xs-9 above">
                    {{mispro[miIndice].nombreCiudad}}
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-3">
                    <h4>Institucion educativa:</h4>
                </div>
                <div class="col-xs-9 above">
                    {{mispro[miIndice].nombreInstitucion}}
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-3">
                    <h4>Estudiantes Responsables:</h4>
                </div>
                <div class="col-xs-9 above">
                    {{mispro[miIndice].nombreEstudiante}}
                </div>
            </div>
            <!--
            <div class="row" style="clear:both; height:1em;"></div> 
            --> 
            <!-- espacio -->
            <!--
            <div class="row">
                <div class="col-xs-3">
                    <h4>Personas y entidades de apoyo:</h4>
                </div>
                <div class="col-xs-9">
                    
                </div>
            </div>
            -->
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-3">
                    <h4>Tema:</h4>
                </div>
                <div class="col-xs-9 above">
                    {{mispro[miIndice].nombreTema}}
                </div>
            </div>
            
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-3">
                    <h4>Descripcion:</h4>
                </div>
                <div class="col-xs-9 above">
                    {{mispro[miIndice].problemaProyecto}}
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-3">
                    <h4>Objetivo general:</h4>
                </div>
                <div class="col-xs-9 above">
                    {{mispro[miIndice].objetivoProyecto}}
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-3">
                    <h4>Objetivos especificos:</h4>
                </div>
                <div class="col-xs-9 above">
                    {{mispro[miIndice].especificoProyecto}}
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-3">
                    <h4>Resultados Esperados:</h4>
                </div>
                <div class="col-xs-9 above">
                    {{mispro[miIndice].resultadoProyecto}}
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-3">
                    <h4>Actividades:</h4>
                </div>
                <div class="col-xs-9 above">
                    {{mispro[miIndice].actividadProyecto}}
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-3">
                <h4>Poblaci&oacute;n beneficiaria:</h4>
                </div>
                <div class="col-xs-9 above">
                    {{mispro[miIndice].beneficiarioProyecto}}
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-3">
                    <h4>Area geografica de intervenci&oacute;n:</h4>
                </div>
                <div class="col-xs-9 above">
                    {{mispro[miIndice].areaProyecto}}
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-3">
                    <h4>Valor total del proyecto:</h4>
                </div>
                <div class="col-xs-9 above">
                    {{mispro[miIndice].valorProyecto}}
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-3">
                    <h4>Tiempo de duraci&oacute;n:</h4>
                </div>
                <div class="col-xs-9 above">
                    {{months}} {{meses}}
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="col-xs-12">
                    <img style="width:100%;" src="../media/proyectos/images/{{mispro[miIndice].nombreImagen}}">
                </div>
            </div>

        </div>

</section>





















<section id="misproyecUpdate" style="display:none;">


</section>














<section id="misproyecDelete" style="display:none;">

    
</section>










</section>
    
</body>
</html>