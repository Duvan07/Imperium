angular.module('imperium').service('registrarpersonaService', ['$http', function ($http) {
        this.registrarperso = function (data) {
            return $http.post('http://localhost/imperium/www/server.php/registrarPersona', $.param(data));
        };
    }]);
