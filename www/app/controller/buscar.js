angular.module('imperium').controller('buscarController', ['$scope', 'buscarpersonaService', 'eliminarService', '$sessionStorage', '$location', '$route', '$timeout', function ($scope, buscarpersona, eliminarservice, $sessionStorage, $location, $route, $timeout) {
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

		$scope.eliminar = function (dato) {
			$('#eliminarContacto').modal('toggle');
			$scope.nombre = dato.per_nombres;
			$scope.id = dato.per_id;
		};

		$scope.submitEliminarContacto = function () {
			eliminarservice.eliminarperso({id: $scope.id}).then(function successCallback(response) {
				$scope.usuarioEliminado = false;
				if (response.data.code == 500) {

				} else {
					$scope.usuarioEliminado = true;
					$timeout(function () {
						$('#eliminarContacto').modal('toggle');
					}, 700);
					$timeout(function () {
						window.location.reload();
					}, 1000);
				}
			}, function errorCallback(response) {
				console.error(response);
			});
		};
	}]);



