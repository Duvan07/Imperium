angular.module('imperium').service('editarpersonaService', ['$http', function ($http) {
        this.editarperso = function (data) {
            return $http.post('http://localhost/imperium/www/server.php/editarpersona', $.param(data));
        };
    }]);


