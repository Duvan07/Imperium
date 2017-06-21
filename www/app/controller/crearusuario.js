angular.module('imperium').controller('crearusuarioController', ['$scope', 'registrarusuarioService', '$sessionStorage', '$location', '$route', '$timeout', function ($scope, registarUsuario, $sessionStorage, $location, $route, $timeout) {

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
		$scope.tipo = 'password';
		$scope.usuarioRegistrado = false;
//        $scope.usuarios = [];

		$scope.registarU = function () {
			registarUsuario.registrarusu($scope.dataRegistrarUsuario).then(function succesCallback(response) {

				$scope.usuarioRegistrado = false;
				$scope.dataRegistrarUsuario = {};
				if (response.data.code == 500) {


				} else {
					$scope.usuarioRegistrado = true;
					$scope.dataRegistrarUsuario = {};
					$timeout(function () {
						window.location.reload();
						$location.path('/acercade');
					}, 1000);
				}
			}, function errorCallback(response) {
				console.log(response);
			});

		};

		$scope.buscar = function () {
			$sessionStorage.textoBuscar = $scope.bus;
			console.log($scope.bus);
			$location.path("/buscar");

			location.reload(true);
		}
	}]);
