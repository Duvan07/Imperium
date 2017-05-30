angular.module('imperium').controller('crearusuarioController', ['$scope', 'registrarusuarioService', '$sessionStorage', '$location', '$route', function ($scope, registarUsuario, $sessionStorage, $location, $route) {

        $scope.dataRegistrarUsuario = {
            cedula: '',
            nombres: '',
            apellidos: '',
            telefono: '',
            alias: '',
            contrasena: '',
            correo: '',
            rol: ''
        };

        $scope.usuarioRegistrado = false;
//        $scope.usuarios = [];

        $scope.registarU = function () {
            registarUsuario.registrarusu($scope.dataRegistrarUsuario).then(function succesCallback(response) {

                $scope.usuarioRegistrado = false;
                $scope.dataRegistrarUsuario = {};
                if (response.data.code == 500) {


                } else {
                    $scope.usuarioRegistrado = true;
                    $scope.dataRegistrarUsuario = '';

                }
            }, function errorCallback(response) {
                console.error(response);
            });

        };
    }]);
