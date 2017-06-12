angular.module('imperium').controller('acercadeController', ['$scope', '$sessionStorage', '$location', function ($scope, $sessionStorage, $location) {
        
        $scope.buscar = function () {
            $sessionStorage.textoBuscar = $scope.bus;
            console.log($scope.bus);
            $location.path("/buscar");

            location.reload(true);
        }
    }]);
