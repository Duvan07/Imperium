angular.module('imperium').service('buscarpersonaService', ['$http', function ($http) {
        
        this.buscarper = function (data) {
            return $http.post('http://localhost/imperium/www/server.php/buscarpersona', $.param(data));
        };
    }]);


