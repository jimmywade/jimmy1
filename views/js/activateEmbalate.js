var app = angular.module('activateEmbalate',['ngFileUpload']);




app.controller('proyectos', ['$http', '$scope', 'Upload', function ($http, $scope, Upload){





    $scope.crearUsuario = function(hide,show) {
        var hide=hide;
        var show=show;
        if( $scope.contrasenaUsuario == $scope.contrasenaUsuario){

            if( 
                ($scope.ieUsuario!=undefined)&&($scope.ieUsuario!='')
                &&($scope.nombreUsuario!=undefined)&&($scope.nombreUsuario!='')
                &&($scope.emailUsuario!=undefined)&&($scope.emailUsuario!='')
                &&($scope.contrasenaUsuario!=undefined)&&($scope.contrasenaUsuario!='')
                ){

                $scope.estudianteRead = [];

                $http.post("../control/estudianteCreate.php", {'codigoInstitucion':$scope.ieUsuario,'nombreEstudiante':$scope.nombreUsuario,'emailEstudiante':$scope.emailUsuario,'passwordEstudiante':$scope.contrasenaUsuario})
                .success(function(data,status,headers,config){ 
                    console.log(data);
                    console.log(status);
                    console.log(headers);
                    console.log(config);
                    $scope.esteData = data;
                    off(hide);
                    on(show);
                })
                .error(function(err){

                });
            }else{
                var fa = document.getElementById("errr");
                fa.style.display = "block";
                var borde = document.getElementById("errrr");
                borde.style.border = "solid 2px red";
            }

        }else{

            var fa = document.getElementById("err");
            fa.style.display = "block";
            var borde = document.getElementById("errrr");
            borde.style.border = "solid 2px red";
        }
    }



    // upload later on form submit or something similar
    $scope.submit = function() {
      if ($scope.form.file.$valid && $scope.file) {
        $scope.upload($scope.file);
      }
    };



    // upload on file select or drop
    $scope.upload = function (file) {
        $scope.ztudent = localStorage.getItem('student');
        alert($scope.ztudent);

        Upload.upload({
            url: '../control/picanteUpdate.php',
            data: {file: file, 'username': $scope.username,'esteEstudiante':$scope.ztudent}
        }).then(function (resp) {
            console.log('Success ' + resp.config.data.file.name + 'uploaded. Response: ' + resp.data);
        }, function (resp) {
            console.log('Error status: ' + resp.status);
        }, function (evt) {
            var progressPercentage = parseInt(100.0 * evt.loaded / evt.total);
            console.log('progress: ' + progressPercentage + '% ' + evt.config.data.file.name);
            





        });


    

        timer = setTimeout(xxx, 2500);




    };


    /*

    // for multiple files:
    $scope.uploadFiles = function (files) {
      if (files && files.length) {
        for (var i = 0; i < files.length; i++) {
          Upload.upload({..., data: {file: files[i]}, ...})...;
        }
        // or send them all together for HTML5 browsers:
        Upload.upload({..., data: {file: files}, ...})...;
      }
    }     
    */










    // upload later on form submit or something similar
    $scope.submit2 = function() {
      if ($scope.form.file.$valid && $scope.file) {
        $scope.upload($scope.file);
      }
    };



    // upload on file select or drop
    $scope.upload2 = function (file) {
        
        
        Upload.upload({
            url: '../control/imageUpdate.php',
            data: {file: file, 'username': $scope.username,'codigoImagen':$scope.codigoImagen2}
        }).then(function (resp) {
            console.log('Success ' + resp.config.data.file.name + 'uploaded. Response: ' + resp.data);
            if(resp.data){
                timer3 = setTimeout($scope.proyectosLoad('misproyecUpdate','proyectosRead'), 3000);
            }
            
           
        }, function (resp) {
            console.log('Error status: ' + resp.status);
        }, function (evt) {
            var progressPercentage = parseInt(100.0 * evt.loaded / evt.total);
            console.log('progress: ' + progressPercentage + '% ' + evt.config.data.file.name);
            


        });

        

    };



    /*
    // for multiple files:
    $scope.uploadFiles = function (files) {
      if (files && files.length) {
        for (var i = 0; i < files.length; i++) {
          Upload.upload({..., data: {file: files[i]}, ...})...;
        }
        // or send them all together for HTML5 browsers:
        Upload.upload({..., data: {file: files}, ...})...;
      }
    }     
    */







 

    

    
    function xxx(){
        $scope.esteToken = localStorage.getItem('student');    
        $scope.myprofi = [];

        $http.post("../control/myprofiRead.php",{'esteToken':$scope.esteToken})
            .success(function(data,status,headers,config){
                console.log(data);
                $scope.myprofi = data;
                
                if(($scope.myprofi!=undefined)&&($scope.myprofi!='')&&($scope.myprofi!='[]')&&($scope.myprofi!='{}')){
                    off('imageUpdate');
                    on('imageEstudiante');
                }
            })
            .error(function(err){
                console.log('no fue posible consultar este perfil');
            });
    }
    



    //set values default
    $scope.setDefaultValues=function(){
        $scope.errorLogin = "";
        $scope.aviso3 ="";
        $scope.student="";
    }






    //default
    $scope.setDefaultViews=function(){
        if(!$scope.estudianteRead || !proyectosRead){
            off('estudianteCreate');
            on('estudianteRead');
            //off('estudianteUpdate');
            off('estudianteDelete');
            off('proyectosCreate');
            off('proyectosRead');
            off('proyectosDetalle');
        }
    }




    //setear el estudiante
    $scope.setEstudiante=function(student){
       var student = student;
       $scope.student = student;
       localStorage.setItem('student', student);
       valor = localStorage.getItem('student');
    }



    $scope.temaRead=function(){

        $scope.temas = [];
        $http.get("../control/temaRead.php")
            .success(function(data){
                console.log(data);
                $scope.temas = data;
            })
            .error(function(err){
                console.log('error al consultar los temas');
            }); 
    }




    //OJO siempre inicia sesion
    $scope.emailEstudiante = 'eudes@gmail.com';
    $scope.passwordEstudiante = '123';




    //perfilRead login
    $scope.buttonPerfilRead=function(){

        if(
            ($scope.emailEstudiante!=undefined)&&($scope.emailEstudiante!='')
            &&($scope.passwordEstudiante!=undefined)&&($scope.passwordEstudiante!='')
            ){
                $scope.estudianteRead = [];
                $http.post("../control/estudianteRead.php", {
                    'emailEstudiante':$scope.emailEstudiante,
                    'passwordEstudiante':$scope.passwordEstudiante
            })
            .success(function(datos,status,headers,config){ 
                console.log(datos);
                $scope.estudianteRead = datos;

                //setear el estudiante
                $scope.student = $scope.estudianteRead[0].codigoEstudiante;
                $scope.success = $scope.estudianteRead[0].success;
                console.log('-------------------------');
                console.log($scope.student);
                
                //validar si success es true
                if(($scope.student!=undefined)&&($scope.student!="")&&($scope.success==1)){
                    //load todos los proyectos
                    $scope.listado = [];
                    $http.get("../control/proyectoRead.php")
                        .success(function(data,status,headers,config){
                            console.log(data);
                            $scope.listado = data;
                            
                            if(($scope.listado!=undefined)&&($scope.listado!='')&&($scope.listado!='[]')&&($scope.listado!='{}')){
                                on_off('estudianteRead','proyectosRead');
                            }else{
                                $scope.loginFailed();
                            }
                        })
                        .error(function(err){
                            console.log('no se pudo consultar');
                        });
                }else{
                    $scope.loginFailed();
                }
                 

            }); 

        }else{
            $scope.loginFailed();
        }
        
    }





    $scope.loginFailed=function(){
        $scope.errorLogin = "Oops! ...parece que faltan datos importantes";
        var fa = document.getElementById("mensajeAviso");
        fa.style.display = "block";
        var borde = document.getElementById("bordeAviso");
        borde.style.border = "solid 2px red";
    }




    
    $scope.proyectosLoad=function(hhh,sss){

        $http.get("../control/proyectoRead.php")
                    .success(function(data,status,headers,config){
                        console.log(data);
                        $scope.listado = data;
                        
                        if(($scope.listado!=undefined)&&($scope.listado!='')&&($scope.listado!='[]')&&($scope.listado!='{}')){
                            off(hhh);
                            on(sss);

                        }else{
                            console.log('no projects to reach');
                        }
                        
                    })
                    .error(function(err){
                        console.log('cannot reach projects at db');
                    });
    }






    $scope.proyectoCreate=function(hid,sho){
        off(hid);
        on(sho);
        off('menuLayout');
        off('menuLayout2');
        off('menuLayout3');
        off('menuLayout4');
        off('menuLayout10');
    }

    

    //turn off current , turn on main
    $scope.show=function(este,main){
        var este= este;
        var main = main;
        off(este);
        on(main);
        off('menuLayout');
        off('menuLayout2');
        off('menuLayout3');
        off('menuLayout4');
        off('menuLayout10');
    }






    $scope.proyectoInsert=function(hx,sx){

        $scope.student = localStorage.getItem('student');

        /*
        console.log('estudiante: ' + $scope.student);
        console.log('elegido tema: ' + $scope.elegidoTema);
        console.log('nombre: ' + $scope.nombreProyecto);
        console.log('problema: ' + $scope.problemaProyecto);
        console.log('objetivo: ' + $scope.objetivoProyecto);
        console.log('especifico: ' + $scope.especificoProyecto);
        console.log('resultado: ' + $scope.resultadoProyecto);
        console.log('actividad: ' + $scope.actividadProyecto);
        console.log('beneficiario: ' + $scope.beneficiarioProyecto);
        console.log('area: ' + $scope.areaProyecto);
        console.log('valor: ' + $scope.valorProyecto);
        console.log('duracion: ' + $scope.duracionProyecto);
        */

        if(
              ($scope.student!=undefined&&$scope.student!='')
            &&($scope.elegidoTema!=undefined&&$scope.elegidoTema!='')
            &&($scope.nombreProyecto!=undefined&&$scope.nombreProyecto!='')

            &&($scope.problemaProyecto!=undefined&&$scope.problemaProyecto!='')
            &&($scope.objetivoProyecto!=undefined&&$scope.objetivoProyecto!='')
            &&($scope.especificoProyecto!=undefined&&$scope.especificoProyecto!='')

            &&($scope.resultadoProyecto!=undefined&&$scope.resultadoProyecto!='')
            &&($scope.actividadProyecto!=undefined&&$scope.actividadProyecto!='')
            &&($scope.beneficiarioProyecto!=undefined&&$scope.beneficiarioProyecto!='')

            &&($scope.areaProyecto!=undefined&&$scope.areaProyecto!='')
            &&($scope.valorProyecto!=undefined&&$scope.valorProyecto!='')
            &&($scope.duracionProyecto!=undefined&&$scope.duracionProyecto!='')
        ){
                
                $http.post("../control/proyectoCreate.php", {'codigoEstudiante':$scope.student,'elegidoTema':$scope.elegidoTema,'nombreProyecto':$scope.nombreProyecto,'problemaProyecto':$scope.problemaProyecto,'objetivoProyecto':$scope.objetivoProyecto,'especificoProyecto':$scope.especificoProyecto,'actividadProyecto':$scope.actividadProyecto,'resultadoProyecto':$scope.resultadoProyecto,'valorProyecto':$scope.valorProyecto,'beneficiarioProyecto':$scope.beneficiarioProyecto,'areaProyecto':$scope.areaProyecto,'duracionProyecto':$scope.duracionProyecto })
                    .success(function(data,status,headers,config){ 
                        console.log(data);
                        $scope.afterUpdate = data;
                        console.log(status);
                        console.log(headers);
                        console.log(config);
                        $scope.hx=hx;
                        $scope.sx=sx;
                        console.log('el div a esconder es ' + $scope.hx);
                        console.log('el div a mostrar es es ' + $scope.sx);
                        var foo = $scope.proyectosLoad($scope.hx,$scope.sx);
                        
                    })
                    .error(function(err){
                                console.log('error');
                                console.log(err);
                            });                   
                
        }else{
            //jQuery('#myModal').modal('show');
            $scope.aviso3 = 'Faltan datos importantes, Todos los campos son necesarios';
        }
        
    } 







    $scope.mysproUpdate=function(){

        $http.post("../control/misproUpdate.php", {
            
            'codigoProyecto':$scope.codigoProyecto2,
            'nombreProyecto':$scope.nombreProyecto2,
            'codigoTema':$scope.codigoTema2,
            'problemaProyecto':$scope.problemaProyecto2,
            'objetivoProyecto':$scope.objetivoProyecto2,
            'especificoProyecto':$scope.especificoProyecto2,
            'resultadoProyecto':$scope.resultadoProyecto2,
            'actividadProyecto':$scope.actividadProyecto2,
            'beneficiarioProyecto':$scope.beneficiarioProyecto2,
            'areaProyecto':$scope.areaProyecto2,
            'valorProyecto':$scope.valorProyecto2,
            'duracionProyecto':$scope.duracionProyecto2

                })
            .success(function(data,status,headers,config){ 
                console.log(data);
                $scope.afterUpdate = data;
                console.log('cambios realizados exitosamente en el proyecto ' + $scope.nombreProyecto2);
            })
            .error(function(err){
                        console.log('no se pudieron realizar los cambios');
                    });
    }



    $scope.mysproDelete=function(codeProyecto2){
        $scope.codeProyecto2 = codeProyecto2;
        $scope.studento = localStorage.getItem('student');
        $http.post("../control/misproDelete.php", {'codigoProyecto':$scope.codeProyecto2,'codigoEstudiante':$scope.studento})
            .success(function(data,status,headers,config){ 
                console.log(data);
                $scope.afterDelete = data;
            })
    }




    $scope.esteProyecto=function(
                                    codigoImagen,
                                    nombreImagen,
                                    codigoProyecto,
                                    nombreProyecto,
                                    problemaProyecto,
                                    estadoProyecto,
                                    objetivoProyecto,
                                    especificoProyecto,
                                    actividadProyecto,
                                    resultadoProyecto,
                                    valorProyecto,
                                    beneficiarioProyecto,
                                    areaProyecto,
                                    duracionProyecto,
                                    codigoCiudad,
                                    nombreCiudad,
                                    codigoPais,
                                    nombrePais,
                                    codigoTema,
                                    nombreTema,
                                    codigoInstitucion,
                                    nombreInstitucion,
                                    codigoEstudiante,
                                    nombreEstudiante
                                ){

                                    $scope.codigoImagen = codigoImagen;
                                    $scope.nombreImagen = nombreImagen;
                                    $scope.codigoProyecto = codigoProyecto;
                                    $scope.nombreProyecto = nombreProyecto;
                                    $scope.problemaProyecto = problemaProyecto;
                                    $scope.estadoProyecto = estadoProyecto;
                                    $scope.objetivoProyecto = objetivoProyecto;
                                    $scope.especificoProyecto = especificoProyecto;
                                    $scope.actividadProyecto = actividadProyecto;
                                    $scope.resultadoProyecto = resultadoProyecto;
                                    $scope.valorProyecto = valorProyecto;
                                    $scope.beneficiarioProyecto = beneficiarioProyecto;
                                    $scope.areaProyecto = areaProyecto;
                                    $scope.duracionProyecto = duracionProyecto/30;
                                    $scope.codigoPais = codigoPais;
                                    $scope.nombrePais = nombrePais;
                                    $scope.codigoCiudad = codigoCiudad;
                                    $scope.nombreCiudad = nombreCiudad;
                                    $scope.codigoTema = codigoTema;
                                    $scope.nombreTema = nombreTema;
                                    $scope.codigoInstitucion = codigoInstitucion;
                                    $scope.nombreInstitucion = nombreInstitucion;
                                    $scope.codigoEstudiante = codigoEstudiante;
                                    $scope.nombreEstudiante = nombreEstudiante;

                                    if($scope.duracionProyecto ==1){
                                        $scope.meses = 'mes';
                                    }else{
                                        $scope.meses = 'meses';
                                    }



                                    /*
                                    alert($scope.codigoImagen);
                                    alert($scope.nombreImagen);
                                    alert($scope.codigoProyecto);
                                    alert($scope.codigoTema);
                                    alert($scope.nombreProyecto);
                                    alert($scope.problemaProyecto);
                                    alert($scope.estadoProyecto);
                                    alert($scope.objetivoProyecto);
                                    alert($scope.especificoProyecto);
                                    alert($scope.actividadProyecto);
                                    alert($scope.resultadoProyecto);
                                    alert($scope.valorProyecto);
                                    alert($scope.beneficiarioProyecto);
                                    alert($scope.areaProyecto);
                                    alert($scope.codigoCiudad);
                                    alert($scope.nombreCiudad);
                                    alert($scope.codigoPais);
                                    alert($scope.nombrePais);  
                                    alert($scope.codigoTema);
                                    alert($scope.nombreTema);
                                    alert($scope.codigoInstitucion);
                                    alert($scope.nombreInstitucion);
                                    alert($scope.codigoEstudiante);
                                    alert($scope.nombreEstudiante);
                                    */
                                    

    }


    $scope.bordeAvisoClear=function(){
        var borde = document.getElementById("bordeAviso");
        borde.style.border = "0px";
        $scope.errorLogin = "";
    }



    //modify este proyecto
    

    $scope.miproyecModify=function(
                    codigoImagen2,
                    nombreImagen2,
                    codigoProyecto2,
                    nombreProyecto2,
                    problemaProyecto2,
                    estadoProyecto2,
                    objetivoProyecto2,
                    especificoProyecto2,
                    actividadProyecto2,
                    resultadoProyecto2,
                    valorProyecto2,
                    beneficiarioProyecto2,
                    areaProyecto2,
                    duracionProyecto2,
                    codigoCiudad2,
                    nombreCiudad2,
                    codigoPais2,
                    nombrePais2,
                    codigoTema2,
                    nombreTema2,
                    codigoInstitucion2,
                    nombreInstitucion2,
                    codigoEstudiante2,
                    nombreEstudiante2
                    ){


                                    $scope.codigoImagen2 = codigoImagen2;
                                    $scope.nombreImagen2 = nombreImagen2;
                                    $scope.codigoProyecto2 = codigoProyecto2;
                                    $scope.nombreProyecto2 = nombreProyecto2;
                                    $scope.problemaProyecto2 = problemaProyecto2;
                                    $scope.estadoProyecto2 = estadoProyecto2;
                                    $scope.objetivoProyecto2 = objetivoProyecto2;
                                    $scope.especificoProyecto2 = especificoProyecto2;
                                    $scope.actividadProyecto2 = actividadProyecto2;
                                    $scope.resultadoProyecto2 = resultadoProyecto2;
                                    $scope.valorProyecto2 = valorProyecto2;
                                    $scope.beneficiarioProyecto2 = beneficiarioProyecto2;
                                    $scope.areaProyecto2 = areaProyecto2;
                                    $scope.duracionProyecto2 = duracionProyecto2;
                                    $scope.codigoPais2 = codigoPais2;
                                    $scope.nombrePais2 = nombrePais2;
                                    $scope.codigoCiudad2 = codigoCiudad2;
                                    $scope.nombreCiudad2 = nombreCiudad2;
                                    $scope.codigoTema2 = codigoTema2;
                                    $scope.nombreTema2 = nombreTema2;
                                    $scope.codigoInstitucion2 = codigoInstitucion2;
                                    $scope.nombreInstitucion2 = nombreInstitucion2;
                                    $scope.codigoEstudiante2 = codigoEstudiante2;
                                    $scope.nombreEstudiante2 = nombreEstudiante2;
                                    

                                    /*
                                    //pendiente poner a funcionar editar duracion de proyecto
                                    if($scope.duracionProyecto < 2){
                                        $scope.meses2 = 'mes';
                                    }else{
                                        $scope.meses2 = 'meses';
                                    }

                                   

    /*        
        $scope.codigoProyecto2 = codigoProyecto;
        $scope.nombreProyecto2 = nombreProyecto;
        $scope.problemaProyecto2 = problemaProyecto;
        $scope.objetivoProyecto2 = objetivoProyecto;
        $scope.especificoProyecto2 = especificoProyecto;
        $scope.actividadProyecto2 = actividadProyecto;
        $scope.resultadoProyecto2 = resultadoProyecto;
        $scope.valorProyecto2 = valorProyecto;
        $scope.beneficiarioProyecto2 = beneficiarioProyecto;
        $scope.areaProyecto2 = areaProyecto;
        $scope.codigoTema2 = codigoTema;
    */

    /*
        $scope.codigoImagen2 = $scope.codigoImagen;
        $scope.nombreImagen2 = $scope.nombreImagen;
        $scope.codigoProyecto2 = $scope.codigoProyecto; 
        $scope.nombreProyecto2 = $scope.nombreProyecto;
        $scope.problemaProyecto2 = $scope.problemaProyecto;
        $scope.estadoProyecto2 = $scope.estadoProyecto;
        $scope.objetivoProyecto2 = $scope.objetivoProyecto;
        $scope.especificoProyecto2 = $scope.especificoProyecto;
        $scope.actividadProyecto2 = $scope.actividadProyecto;
        $scope.resultadoProyecto2 = $scope.resultadoProyecto;
        $scope.valorProyecto2 = $scope.valorProyecto;
        $scope.beneficiarioProyecto2 = $scope.beneficiarioProyecto;
        $scope.areaProyecto2 = $scope.areaProyecto;
        $scope.duracionProyecto2 = $scope.duracionProyecto;
        $scope.codigoPais2 = $scope.codigoPais;
        $scope.nombrePais2 = $scope.nombrePais;
        $scope.codigoCiudad2 = $scope.codigoCiudad;
        $scope.nombreCiudad2 = $scope.nombreCiudad;
        $scope.codigoTema2 = $scope.codigoTema;
        $scope.nombreTema2 = $scope.nombreTema;
        $scope.codigoInstitucion2 = $scope.codigoInstitucion;
        $scope.nombreInstitucion2 = $scope.nombreInstitucion;
        $scope.codigoEstudiante2 = $scope.codigoEstudiante;
        $scope.nombreEstudiante2 = $scope.nombreEstudiante;
    */

    }
    


    //Update este proyecto
    $scope.miproUpdate=function(aa,bb){
        var aa =aa;
        var bb =bb;
        $scope.nuevoProyecto = [];

        $scope.esteZtudiante = localStorage.getItem('student');

        $http.post("../control/misproUpdate.php", {
            'codigoEstudiante':$scope.esteZtudiante,
            'codigoProyecto':$scope.codigoProyecto2,
            'nombreProyecto':$scope.nombreProyecto2,
            'problemaProyecto':$scope.problemaProyecto2,
            'objetivoProyecto':$scope.objetivoProyecto2,
            'especificoProyecto':$scope.especificoProyecto2,
            'actividadProyecto':$scope.actividadProyecto2,
            'resultadoProyecto':$scope.resultadoProyecto2,
            'valorProyecto':$scope.valorProyecto2,
            'beneficiarioProyecto':$scope.beneficiarioProyecto2,
            'areaProyecto':$scope.areaProyecto2,
            'duracionProyecto':$scope.duracionProyecto2
            })
            .success(function(data,status,headers,config){
                console.log(data);
                $scope.nuevoProyecto = data;
                
                if(($scope.nuevoProyecto!=undefined)&&($scope.nuevoProyecto!='')&&($scope.nuevoProyecto!='[]')&&($scope.nuevoProyecto!='{}')){
                    off(aa);
                    on(bb);
                }
            })
            .error(function(err){
                console.log('no fue posible modificar este proyecto');
            });
    }





    //delete proyect
    $scope.misProyectos=function(a,b){
        //alert($scope.codigoTema);
        var a =a;         
        var b =b;         
        $scope.mispro = [];

        $scope.esteEstudiante = localStorage.getItem('student');

        $http.post("../control/misproRead.php", {'esteEstudiante':$scope.esteEstudiante})
            .success(function(data,status,headers,config){
                console.log(data);
                $scope.mispro = data;
                
                if(($scope.mispro!=undefined)&&($scope.mispro!='')&&($scope.mispro!='[]')&&($scope.mispro!='{}')){
                    off(a);
                    on(b);
                }
            })
            .error(function(err){
                console.log('no fue posible consultar mis proyectos');
            });
    }
    





    //reload 
    $scope.proyectosReload=function(){
        location.reload();
    }


    //reload 
    $scope.destruirSesion=function(){
        var student = null;
        $scope.student = student;
        localStorage.setItem('student', student);
        valor = localStorage.getItem('student');
        location.reload();
    }

    

    //hide and show 
    $scope.hs=function(h,s){
        var h = h;
        var s = s; 
        off(h);
        on(s);
    }



    //turn off current , turn on main
    $scope.showSingle=function(este){
        var este= este;
        on(este);
    }



    //consultar datos perfil este estudiante
    $scope.myProfile=function(whine,kotch){
        var whine = whine;         
        var kotch = kotch;
        $scope.esteToken = localStorage.getItem('student');    
        $scope.myprofi = [];


        $http.post("../control/myprofiRead.php",{'esteToken':$scope.esteToken})
            .success(function(data,status,headers,config){
                console.log(data);
                $scope.myprofi = data;
                
                if(($scope.myprofi!=undefined)&&($scope.myprofi!='')&&($scope.myprofi!='[]')&&($scope.myprofi!='{}')){
                    off(whine);
                    on(kotch);
                }
            })
            .error(function(err){
                console.log('no fue posible consultar este perfil');
            });
           
    }
    





}]);





app.filter('cortarTexto', function(){
  return function(input, limit){
    return (input.length > limit) ? input.substr(0, limit)+'...' : input;
  };
})


