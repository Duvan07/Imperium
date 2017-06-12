angular.module('imperium').controller('menuprincipalController', ['$scope', 'registrarpersonaService', '$sessionStorage', '$location', function ($scope, PersonaRegistrada, $sessionStorage, $location) {

        $scope.RegistrarPersona = {
        };
        $scope.PersonaRegistrada = false;

        $scope.registarP = function () {
            $scope.RegistrarPersona.fechanaci = moment($scope.RegistrarPersona.fechanaci, "YYYY-MM-DD").format('YYYY-MM-DD');
            $scope.RegistrarPersona.fechaingreso = moment($scope.RegistrarPersona.fechaingreso, "YYYY-MM-DD").format('YYYY-MM-DD');
            PersonaRegistrada.registrarperso($scope.RegistrarPersona).then(function succesCallback(response) {

                $scope.PersonaRegistrada = false;
                $scope.RegistrarPersona = {};
                if (response.data.code == 500) {


                } else {
                    $scope.PersonaRegistrada = true;
                    $scope.RegistrarPersona = {};

                }
            }, function errorCallback(response) {
                console.error(response);
            });

        };

//Validaciones
        $scope.tabs = [
            {tab: 'active', show: true},
            {tab: '', show: false},
            {tab: '', show: false},
            {tab: '', show: false}
        ];

        $scope.activeTab1 = function () {
            $scope.tabs = [];
            $scope.tabs[0] = {tab: 'active', show: true};
        };

        $scope.activeTab2 = function () {
            $scope.tabs = [];
            $scope.tabs[1] = {tab: 'active', show: true};
        };

        $scope.activeTab3 = function () {
            $scope.tabs = [];
            $scope.tabs[2] = {tab: 'active', show: true};
        };

        $scope.activeTab4 = function () {
            $scope.tabs = [];
            $scope.tabs[3] = {tab: 'active', show: true};
        };
        
        $scope.buscar = function () {
            $sessionStorage.textoBuscar = $scope.bus;
            console.log($scope.bus);
            $location.path("/buscar");

            location.reload(true);
        }

    }]);
