angular.module('imperium').controller('buscarController', ['$scope', 'buscarpersonaService', '$sessionStorage', '$location', '$route', '$timeout', function ($scope, buscarpersona, $sessionStorage, $location, $route, $timeout) {
        $scope.mod = {};
        $scope.cargarDatos = {};
        $scope.bus = {};
        $scope.buscando = $sessionStorage.textoBuscar.texto;
        $scope.bus.texto = $sessionStorage.textoBuscar.texto;

        buscarpersona.buscarper($scope.bus).then(function successCallback(respuesta) {
            console.log(respuesta);
            $scope.cargarDatos = respuesta.data.data;
            $scope.bus.texto = "";

        }, function errorCallback(respuesta) {

        });

        $scope.buscar = function () {
            $sessionStorage.textoBuscar = $scope.bus;
            console.log($scope.bus);
            $location.path("/buscar");

            location.reload(true);
        }
        
        $scope.editardatospersona = function (nuevapersona) {
            $sessionStorage.datospersona = nuevapersona;
            $location.path('/editar');
        }
    }]);



