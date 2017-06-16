angular.module('imperium').service('eliminarService', ['$http', function ($http) {
		this.eliminarperso = function (data) {
			return $http.post('http://localhost/imperium/www/server.php/eliminarPersona', $.param(data));
		};
	}]);


