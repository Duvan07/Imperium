angular.module('imperium').config(['$routeProvider',
    function config($routeProvider) {
        $routeProvider.
                when('/', {
                    controller: 'menuprincipalController',
                    templateUrl: 'app/template/menuprincipal.html'
                }).
                when('/crearusuario', {
                    controller: 'crearusuarioController',
                    templateUrl: 'app/template/crearusuario.html'
                }).
                otherwise('/');
    }]);