angular.module('imperium').controller('controlentradasalidaController', ['$scope', '$sessionStorage', 'Administrador', function ($scope, $sessionStorage, rolAdmin) {
        $scope.rol = $sessionStorage.usuario.rol_id;
        $scope.Administrador = rolAdmin;
    }]);

