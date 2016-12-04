<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="expires" content="0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>activate y embalate</title>
    <link rel="shortcut icon" href="../media/images/logo10.png" type="image/png" />
    <link rel="stylesheet" href="css/styles.css" />
    <script type="text/javascript" src="../libs/jquery/jquery.min.js"></script>
    <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.min.css" />
    <script type="text/javascript" src="../libs/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../libs/angular/angular.min.js"></script>
    <script type="text/javascript" src="../libs/angular/angular-resource.js"></script>
    <!-- shim es necesario para soportar < IE9-->
    <script src="../libs/angular/ng-file-upload-shim.min.js"></script>
    <script src="../libs/angular/ng-file-upload.min.js"></script>
    <script type="text/javascript" src="js/c.js"></script>
    <script type="text/javascript" src="js/activateEmbalate.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

</head>

<body ng-app="activateEmbalate" class="fondo-azul">

<section ng-controller="proyectos" data-ng-init="setDefaultValues(); setDefaultViews(); temaRead()">














<section id="setEstudiante" style="display:none;">
    <div ng-repeat="estudiante in estudianteRead" style="width:100%; padding:1em; cursor:pointer; ">
         <div data-ng-init="setEstudiante(estudiante.codigoEstudiante)"></div>
    </div><br>
</section>

















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
                    <div ng-click="myProfile( divActive,'estudianteVer' ); setDivActive('estudianteVer') " class="col-xs-2" style="padding:0;  text-align:center;">
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













<section id="estudianteCreate" style="display:none;">
    <div>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12" style="padding:0;">
                    <div class="col-xs-3 col-xs-offset-4 " style="padding:0;">
                        <img width=100% src="../media/images/logoActivaByW.png">
                    </div>
                </div>
            </div>

            <div style="clear:both; height:1px;"></div>
            
            <div id="errrr" class="row loginBox" style="border:solid 0px red;">
                <div class="col-xs-10 col-xs-offset-1 loginForm">
                    <div class="col-xs-12" style="padding:0;">

                        <div class="col-xs-11">
                            <div class="col-xs-5">
                                <label class="control-label" for="entidad_usuario">Instituci&oacute;n educativa</label>
                            </div>
                            <div class="col-xs-5">
                                <select style="background-color:#FFF;border:none;" type="text" ng-model="ieUsuario" id="ieUsuario" required>
                                    <option value="1" >I.E Madre Laura</option>
                                    <option value="2" >I.E Bayunca</option>
                                    <option value="3" >I.E Ciudad de Tunja</option>
                                    <option value="4" >I.E Nstra. Sra. del Carmen</option>
                                    <option value="5" >I.E Flamenco</option>
                                </select>
                            </div>
                        </div>

                        <div style="border-bottom: solid 1px #585858;">
                            <input style="border:none;width:100%;height:3em;" type="text" class="loginInput" ng-model="nombreUsuario" placeholder="Nombre">
                        </div>

                        <div style="border-bottom: solid 1px #585858;">
                            <input style="border:none;width:100%;height:3em;" type="text" class="loginInput" ng-model="emailUsuario" placeholder="Email">
                        </div>
                        <div style="border-bottom: solid 1px #585858;">
                            <input style="border:none;width:100%;height:3em;" type="password" type="text" ng-model="contrasenaUsuario" placeholder="Contrase&ntilde;a">
                        </div>
                        <div style="border-bottom: solid 1px #585858;">
                            <input style="border:none;width:100%;height:3em;" type="password" ng-model="contrasenaUsuario2" placeholder="Confirmar contrase&ntilde;a">
                        </div>
                        <input type="hidden" name="opcion" value="100">
                    </div>
                </div>
                <div style="clear:both; height:20px;"></div>
                <div class="col-xs-1 col-xs-offset-10" style="padding:0;">
                    <button ng-click="crearUsuario('estudianteCreate','estudianteRead')" class="btn btn-default" style="width:100%;""><i class="fa fa-check fa-1x" style="text-decoration:none; color:#585858;" aria-hidden="true"></i></button>
                </div>
            </div>

            <div id="err" style="display:none;">
                <h6><i>Las contrase&ntilde;as no coinciden</i></h6>
            </div>

            <div id="errr" style="display:none;">
                <h6><i>Faltan datos importantes por favor intente nuevamente</i></h6>
            </div>

            <div style="clear:both; height:20px;"></div>
            
        </div>
    </div>

</section>







<section id="estudianteRead" style="display:block;">
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
                            <a style="width:100%;" ng-click="hs('estudianteRead','estudianteCreate')" role="button" class="btn btn-primary">Registrarse</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>










<section id="estudianteVer" style="display:none;">
    
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
















        
 












<section id="estudianteDelete" style="display:none;">
    
</section>


















<section id="proyectosCreate" style="display:none;">


        

        <div style="clear:both; height:9em;"></div> <!-- espacio -->

        <div class="container">
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-xs-4" for="nombreProyecto">Nombre del proyecto:</label>
                    <div class="col-xs-8">
                        <input type="text" class="form-control" ng-model="nombreProyecto" id="nombreProyecto" required>
                    </div>
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-xs-4" for="codigoTema">Tema del proyecto:</label>
                    <div class="col-xs-8">
                        <select class="selectpicker form-control" ng-model="elegidoTema" >
                            <option ng-repeat="tema in temas" value="{{tema.codigoTema}}">{{tema.nombreTema}}</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-xs-4" for="problemaProyecto">Identificacion del problema o necesidad:</label>
                    <div class="col-xs-8">
                        <textarea type="text" class="form-control" ng-model="problemaProyecto" rows="5" id="problemaProyecto" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-xs-4" for="objetivoProyecto">Objetivo general:</label>
                    <div class="col-xs-8">
                        <textarea type="text" class="form-control" ng-model="objetivoProyecto" rows="5" id="objetivoProyecto" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-xs-4" for="especificoProyecto">Objetivos especificos:</label>
                    <div class="col-xs-8">
                        <textarea type="text" class="form-control" ng-model="especificoProyecto" rows="5" id="especificoProyecto" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-xs-4" for="resultadoProyecto">Resultados esperados:</label>
                    <div class="col-xs-8">
                        <textarea type="text" class="form-control" ng-model="resultadoProyecto" rows="5" id="resultadoProyecto" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-xs-4" for="actividadProyecto">Actividades:</label>
                    <div class="col-xs-8">
                        <textarea type="text" class="form-control" ng-model="actividadProyecto" rows="5" id="actividadProyecto" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-xs-4" for="beneficiarioProyecto">Beneficiarios:</label>
                    <div class="col-xs-8">
                        <textarea type="text" class="form-control" ng-model="beneficiarioProyecto" rows="5" id="beneficiarioProyecto" placeholder="Describir brevemente la poblacion que se beneficiara del proyecto" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-xs-4" for="areaProyecto">Area :</label>
                    <div class="col-xs-8">
                        <textarea type="text" class="form-control" ng-model="areaProyecto" rows="5" id="areaProyecto" placeholder="Describir brevemente la poblacion que se beneficiara del proyecto" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-xs-4" for="valorProyecto">Valor total del proyecto:</label>
                    <div class="col-xs-8">
                        <textarea type="text" class="form-control" ng-model="valorProyecto" rows="5" id="valorProyecto" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row" style="clear:both; height:1em;"></div> <!-- espacio -->
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-xs-4" for="nombreProyecto">Tiempo de duracion del proyecto:</label>
                    <div class="col-xs-8">
                        <select class="selectpicker form-control" ng-model="duracionProyecto">
                            <option value="7">una semana</option>
                            <option value="30">un mes</option>
                            <option value="60">dos meses</option>
                            <option value="90">tres meses</option>
                            <option value="180">seis meses</option>
                            <option value="365">un a&ntilde;o</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row" style="clear:both; height:2em;"></div> <!-- espacio -->
            <div class="row">
                <div class="form-group">

                
                    <div class="col-xs-12 col-sm-10">
                        <h3><i>{{aviso3}}</i></h3>
                    </div>

                    <div class="col-xs-12 col-sm-2">
                        <button ng-click=" proyectoInsert(divActive,'proyectosRead') " style="width:100%;" class="btn btn-primary"><i class="fa fa-check fa-1x" style="text-decoration:none; color:#EBEBEB;" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
            <div class="row" style="clear:both; height:5em;"></div> <!-- espacio -->

        </div>






        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <p>Oops... parece que faltan algunos datos importantes en el proyecto</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>

            </div>
        </div>


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
        
        <div style="clear:both; height:9em;"></div> <!-- espacio -->

        <div class="container" style="background-color:#FFF; padding-left:5em; padding-right:5em; padding-top:1em; padding-bottom:5em;">
            <div class="row">
                <div class="col-xs-3">
                    <img style="width:100%;" src="../media/proyectos/images/{{nombreImagen2}}">
                </div>
                <div class="col-xs-3 col-xs-offset-3">
                    
                    
                    <div style="padding-top:2em;">
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

                        <div class="button" ngf-select="upload2($file)"><button><i class="fa fa-file-image-o fa-4x" aria-hidden="true"></i></button></div>
                        <h6><i>cambiar esta imagen</i></h6>

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

            </div>
            <div class="row" style="clear:both; height:3em;"><hr></div> <!-- espacio -->   
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-xs-4" for="nombreProyecto2">Nombre proyecto:</label>
                    <div class="col-xs-8">
                        <textarea type="text" class="form-control" ng-model="nombreProyecto2" rows="5" id="nombreProyecto2" required></textarea>
                    </div>
                </div>
            </div>
            <!-- PENDIENTE POR PONER A FUNCIONAR EL TEMA (listando todos los temas JSON que ya estan en el controller)
            <div class="row" style="clear:both; height:3em;"><hr></div>
            -->
            <!-- espacio -->
            <!--
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-xs-4" for="nombrePais2">Pa&iacute;s beneficiario:</label>
                    <div class="col-xs-8">
                        <textarea type="text" class="form-control" ng-model="nombrePais2" rows="5" id="nombrePais2" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row" style="clear:both; height:3em;"><hr></div>
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-xs-4" for="nombreCiudad2">Ciudad:</label>
                    <div class="col-xs-8">
                        <textarea type="text" class="form-control" ng-model="nombreCiudad2" rows="5" id="nombreCiudad2" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row" style="clear:both; height:3em;"><hr></div>
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-xs-4" for="nombreInstitucion2">Institucion educativa:</label>
                    <div class="col-xs-8">
                        <textarea type="text" class="form-control" ng-model="nombreInstitucion2" rows="5" id="nombreInstitucion2" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row" style="clear:both; height:3em;"><hr></div>
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-xs-4" for="nombreEstudiante2">Estudiantes Responsables:</label>
                    <div class="col-xs-8">
                        <textarea type="text" class="form-control" ng-model="nombreEstudiante2" rows="5" id="nombreEstudiante2" required></textarea>
                    </div>
                </div>
            </div>
            -->
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
            <!--
            <div class="row" style="clear:both; height:3em;"><hr></div>
            
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-xs-4" for="nombreTema2">Tema:</label>
                    <div class="col-xs-8">
                        <textarea type="text" class="form-control" ng-model="nombreTema2" rows="5" id="nombreTema2" required></textarea>
                    </div>
                </div>
            </div>
            -->
            <div class="row" style="clear:both; height:3em;"><hr></div> <!-- espacio -->
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-xs-4" for="problemaProyecto2">Descripci&oacute;n:</label>
                    <div class="col-xs-8">
                        <textarea type="text" class="form-control" ng-model="problemaProyecto2" rows="5" id="problemaProyecto2" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row" style="clear:both; height:3em;"><hr></div> <!-- espacio -->
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-xs-4" for="objetivoProyecto2">Objetivo general:</label>
                    <div class="col-xs-8">
                        <textarea type="text" class="form-control" ng-model="objetivoProyecto2" rows="5" id="objetivoProyecto2" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row" style="clear:both; height:3em;"><hr></div> <!-- espacio -->
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-xs-4" for="especificoProyecto2">Objetivos especificos:</label>
                    <div class="col-xs-8">
                        <textarea type="text" class="form-control" ng-model="especificoProyecto2" rows="5" id="especificoProyecto2" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row" style="clear:both; height:3em;"><hr></div> <!-- espacio -->
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-xs-4" for="resultadoProyecto2">Resultados Esperados:</label>
                    <div class="col-xs-8">
                        <textarea type="text" class="form-control" ng-model="resultadoProyecto2" rows="5" id="resultadoProyecto2" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row" style="clear:both; height:3em;"><hr></div> <!-- espacio -->
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-xs-4" for="actividadProyecto2">Actividades:</label>
                    <div class="col-xs-8">
                        <textarea type="text" class="form-control" ng-model="actividadProyecto2" rows="5" id="actividadProyecto2" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row" style="clear:both; height:3em;"><hr></div> <!-- espacio -->
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-xs-4" for="areaProyecto2">Area geografica de intervenci&oacute;n:</label>
                    <div class="col-xs-8">
                        <textarea type="text" class="form-control" ng-model="areaProyecto2" rows="5" id="areaProyecto2" required></textarea>
                    </div>
                </div>
            </div>
            <div class="row" style="clear:both; height:3em;"><hr></div> <!-- espacio -->
            
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-xs-4" for="valorProyecto2">Valor total del proyecto:</label>
                    <div class="col-xs-8">
                        <textarea type="text" class="form-control" ng-model="valorProyecto2" rows="5" id="valorProyecto2" required></textarea>
                    </div>
                </div>
            </div>

            <!--
            PENDIENTE PONER A FUNCIONAR EDITAR DURACION DE PROYECTO!
            <div class="row" style="clear:both; height:3em;"><hr></div>
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-xs-4" for="duracionProyecto2">Tiempo de duracion del proyecto:</label>
                    <div class="col-xs-8">
                        <select class="selectpicker form-control" ng-model="duracionProyecto2">
                            <option value="7">una semana</option>
                            <option value="30">un mes</option>
                            <option value="60">dos meses</option>
                            <option value="90">tres meses</option>
                            <option value="180">seis meses</option>
                            <option value="365">un a&ntilde;o</option>
                        </select>
                    </div>
                </div>
            </div>
            -->

            <div class="row" style="clear:both; height:3em;"><hr></div> <!-- espacio -->
            
            <div class="row">
                <div class="form-group">
                    <div class="col-xs- col-xs-offset-10">
                        <button ng-click="mysproUpdate()" class="btn btn-primary" style="width:100%;"><i class="fa fa-check fa-1x" style="text-decoration:none; color:#EBEBEB;" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
            

        </div>


</section>














<section id="misproyecDelete" style="display:none;">

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                esta seguro que desea eliminar el proyecto xxxxxxxxxxxx?
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6 col-sm-5 col-md-4">
                <button class="btn btn-danger"><i class="fa arrow-left fa-1x" style="text-decoration:none; color:#EBEBEB;" aria-hidden="true"></i></button>                
            </div>
            <div>
                <button class="btn btn-danger"><i class="fa fa-check fa-1x" style="text-decoration:none; color:#EBEBEB;" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
    
</section>










</section>
    
</body>
</html>