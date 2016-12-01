var app = angular.module('proyectosConsultar',[]);


app.controller('proyectos', ['$http', '$scope', function ($http, $scope){

    $scope.listado = [];
    $http.get("../control/control_proyecto.php?opcion=6")
    //$http.get("http://starapps.org/prueba/GetData.php")
        .success(function(data){
            console.log(data);
            $scope.listado = data;
        })
        .error(function(err){

        });


        

 

/*

    $scope.crearItem=function(){
        //OJO valores parciales
        $scope.sucursal=1;
        $scope.color=1;
        $scope.imagen = 1;
        $scope.fecha2 = 0;
        $scope.video = 1;
        if(
            ($scope.descripcion!=undefined)&&($scope.descripcion!='')
            &&($scope.marca!=undefined)&&($scope.marca!='')
            &&($scope.sucursal!=undefined)&&($scope.sucursal!='')
            &&($scope.size!=undefined)&&($scope.size!='')
            &&($scope.precio!=undefined)&&($scope.precio!='')
            &&($scope.imagen!=undefined)&&($scope.imagen!='')
            &&($scope.seccion!=undefined)&&($scope.seccion!='')
            ){
                $scope.crearItems = [];
                $http.post("../control/crearItems.php", {'accion':6,'sucursal':$scope.sucursal,'marca':$scope.marca,'size':$scope.size,'precio':$scope.precio,'color':$scope.color,'imagen':$scope.imagen,'video':$scope.video,'seccion':$scope.seccion,'descripcion':$scope.descripcion,'fecha2':$scope.fecha2}) 
                .success(function(data,status,headers,config){ 
                    console.log("datos insertados correctamente"); 
                    alert('Item creado exitosamente');
                    resetForm("form-crear");       
                    console.log(data);
                    $scope.crearItems = data;
                }); 
        }else{
            var fa = document.getElementById("aviso");
            fa.style.display = "block";
            var borde = document.getElementById("div-crear");
            borde.style.border = "solid 2px red";
        }
    }    
*/   



 $scope.proyectoConsultarFull=function(codigo,nombre,descripcion,imagen,video){
    $scope.esteCodigo = codigo;
    $scope.esteNombre = nombre;
    $scope.estaDescripcion = descripcion;
    $scope.estaImagen = imagen;
    
    alert($scope.esteCodigo);
    alert($scope.esteNombre);
    alert($scope.estaDescripcion);
    alert($scope.estaImagen);
    alert($scope.esteVideo);
    
    
 }



 $scope.proyectoNuevoReload=function(){
    location.reload();
 }




}]);



app.filter('cortarTexto', function(){
  return function(input, limit){
    return (input.length > limit) ? input.substr(0, limit)+'...' : input;
  };
})
