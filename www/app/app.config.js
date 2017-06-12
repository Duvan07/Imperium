angular.module('imperium').constant('Administrador', 1);
angular.module('imperium').constant('Invitado', 2);


/**
 * middleware que comprueba las session y los tipos de roles
 */
angular.module('imperium').config(['$middlewareProvider', function middlewareProviderConfig($middlewareProvider) {
        $middlewareProvider.map({
            'comprobarSession': ['$sessionStorage', function comprobarSession($sessionStorage) {
                    middlewareComprobarSession(this, $sessionStorage);
                }],
            'comprobarNoTenerSession': ['$sessionStorage', function comprobarNoTenerSession($sessionStorage) {
                    middlewareComprobarNoTenerSession(this, $sessionStorage);
                }],
            'usuario': ['$sessionStorage', 'Administrador', function usuario($sessionStorage, Administrador) {
                    middlewareusuario(this, $sessionStorage, Administrador);
                }]
        });
    }]);

angular.module('imperium').config(['$routeProvider', '$httpProvider', function config($routeProvider, $httpProvider) {
        $httpProvider.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded; charset=UTF-8';
        $routeProvider.
                when('/', {
                    controller: 'loginController',
                    templateUrl: 'app/template/login.html',
                    middleware: ['comprobarNoTenerSession']
                }).
                when('/menuprincipal', {
                    controller: 'menuprincipalController',
                    templateUrl: 'app/template/menuprincipal.html',
                    middleware: ['comprobarSession', 'usuario']
                }).
                when('/crearusuario', {
                    controller: 'crearusuarioController',
                    templateUrl: 'app/template/crearusuario.html',
                    middleware: ['comprobarSession', 'usuario']
                }).
                when('/acercade', {
                    controller: 'acercadeController',
                    templateUrl: 'app/template/acercade.html',
                    middleware: ['comprobarSession']
                }).
                when('/controlentradasalida', {
                    controller: 'controlentradasalidaController',
                    templateUrl: 'app/template/controlentradasalida.html',
                    middleware: ['comprobarSession']
                }).
                when('/reportes', {
                    controller: 'reportesController',
                    templateUrl: 'app/template/reportes.html',
                    middleware: ['comprobarSession', 'usuario']
                }).
                when('/logout', {
                    controller: 'logoutController',
                    template: '<p>Cerrando Sesión...</p>',
                    middleware: ['comprobarSession']
                }).
                when('/buscar', {
                    controller: 'buscarController',
                    templateUrl: 'app/template/buscarunapersona.html',
                    middleware: ['comprobarSession']
                }).
                otherwise('/');
    }]);

