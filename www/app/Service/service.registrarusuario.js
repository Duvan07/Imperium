angular.module('imperium').service('registrarusuarioService', ['$http', function ($http) {
        this.registrarusu = function (data) {
            return $http.post('http://localhost/imperium/www/server.php/registrarUsuario', $.param(data));
        };
    }]);


