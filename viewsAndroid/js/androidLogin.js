var app = angular.module('androidlogin',[]);


app.controller('proyectos', ['$http', '$scope', function ($http, $scope){

    $scope.listado = [];
    $http.get("../control/control_proyecto.php?opcion=6")
        .success(function(data){
            console.log(data);
            $scope.listado = data;
        })
        .error(function(err){

        });



}]);



app.filter('cortarTexto', function(){
  return function(input, limit){
    return (input.length > limit) ? input.substr(0, limit)+'...' : input;
  };
})
