angular.module('imperium').controller('controlentradasalidaController', ['$scope', '$sessionStorage', 'Administrador', '$location', function ($scope, $sessionStorage, rolAdmin, $location) {
        $scope.rol = $sessionStorage.usuario.rol_id;
        $scope.Administrador = rolAdmin;
        
        $scope.buscar = function () {
            $sessionStorage.textoBuscar = $scope.bus;
            console.log($scope.bus);
            $location.path("/buscar");

            location.reload(true);
        }
    }]);

