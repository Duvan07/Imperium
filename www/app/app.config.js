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
                when('/acercade', {
                    controller: 'acercadeController',
                    templateUrl: 'app/template/acercade.html'
                }). 
                         when('/controlentradasalida', {
                    controller: 'controlentradasalidaController',
                    templateUrl: 'app/template/controlentradasalida.html'
                }). 
                         when('/reportes', {
                    controller: 'reportesController',
                    templateUrl: 'app/template/reportes.html'
                }). 
                otherwise('/');
    }]);