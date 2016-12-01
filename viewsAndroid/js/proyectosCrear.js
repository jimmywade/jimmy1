var app = angular.module('proyectosCrear',[]);


app.controller('crear', ['$http', '$scope', function ($http, $scope){

    $scope.proyectoNuevo=function(usuario){
        $scope.usuario = usuario;

        /*
            alert($scope.nombreProyecto);
            alert($scope.descripcionProyecto);
            alert($scope.duracionProyecto);
            alert($scope.periodicidadProyecto);
            alert($scope.diaProyecto);
            alert($scope.horainiProyecto);
            alert($scope.horainiProyecto);
        */

        if( 
            ($scope.usuario!=undefined)&&($scope.usuario!='')
            &&($scope.nombreProyecto!=undefined)&&($scope.nombreProyecto!='')
            &&($scope.descripcionProyecto!=undefined)&&($scope.descripcionProyecto!='')
            &&($scope.duracionProyecto!=undefined)&&($scope.duracionProyecto!='')
            &&($scope.periodicidadProyecto!=undefined)&&($scope.periodicidadProyecto!='')
            &&($scope.diaProyecto!=undefined)&&($scope.diaProyecto!='')
            &&($scope.horainiProyecto!=undefined)&&($scope.horainiProyecto!='')
            &&($scope.horafinProyecto!=undefined)&&($scope.horafinProyecto!='')
            ){
                $scope.crearItems = [];
                $http.post("../control/proyectoNuevo.php", {
                    'usuario':$scope.usuario,
                    'nombreProyecto':$scope.nombreProyecto,
                    'descripcionProyecto':$scope.descripcionProyecto,
                    'duracionProyecto':$scope.duracionProyecto,
                    'periodicidadProyecto':$scope.periodicidadProyecto,
                    'diaProyecto':$scope.diaProyecto,
                    'horainiProyecto':$scope.horainiProyecto,
                    'horafinProyecto':$scope.horafinProyecto
            })
                .success(function(data,status,headers,config){ 
                    console.log("datos insertados correctamente");     
                    console.log(data);
                    $scope.respuesta = data;
                    alert('Proyecto creado exitosamente!');
                    irA("proyectosConsultar.php");
                }); 
        }else{
            single('oops');
        }
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
