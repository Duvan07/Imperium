angular.module('imperium').controller('menuprincipalController', ['$scope', 'registrarpersonaService', '$sessionStorage', '$location', '$timeout', function ($scope, PersonaRegistrada, $sessionStorage, $location, $timeout) {

        $scope.RegistrarPersona = {};
        $scope.contactoagregado = false;
        $scope.Errorcontactoagregado = false;
	
        $scope.registarP = function () {
            $scope.RegistrarPersona.fechanaci = moment($scope.RegistrarPersona.fechanaci, "YYYY-MM-DD").format('YYYY-MM-DD');
            $scope.RegistrarPersona.fechaingreso = moment($scope.RegistrarPersona.fechaingreso, "YYYY-MM-DD").format('YYYY-MM-DD');
            PersonaRegistrada.registrarperso($scope.RegistrarPersona).then(function succesCallback(response) {

                $scope.contactoagregado = false;
                $scope.Errorcontactoagregado = false;
				
                if (response.data.code == 500) {
					$scope.Errorcontactoagregado = true;
					$scope.RegistrarPersona = {};
					$timeout(function (){
                        window.location.reload();
                        $location.path('/menuprincipal');
                    }, 1000);
                } else {
                    $scope.contactoagregado = true;
                    $scope.RegistrarPersona = {};
					$timeout(function (){
                        window.location.reload();
                        $location.path('/acercade');
                    }, 1000);
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
