angular.module('imperium').config(['$routeProvider', '$httpProvider', function config($routeProvider, $httpProvider) {
        $httpProvider.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded; charset=UTF-8';
        $routeProvider.
                when('/', {
                    controller: 'loginController',
                    templateUrl: 'app/template/login.html'
                }).
                when('/menuprincipal', {
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
