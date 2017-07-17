angular.module('imperium').controller('editarController', ['$scope', 'editarpersonaService', '$sessionStorage', '$location', '$timeout', function ($scope, editarservice, $sessionStorage, $location, $timeout) {
		
        $scope.editarpersona = {};
		
        $scope.editarpersona.id = $sessionStorage.datospersona.per_id;
        $scope.editarpersona.cedula = Number($sessionStorage.datospersona.per_cedula);
        $scope.editarpersona.nombres = $sessionStorage.datospersona.per_nombres;
        $scope.editarpersona.apellidos = $sessionStorage.datospersona.per_apellidos;
        $scope.editarpersona.genero = $sessionStorage.datospersona.per_genero;
        $scope.editarpersona.fechanacimiento = $sessionStorage.datospersona.per_fenacimiento;
        $scope.editarpersona.edad = Number ($sessionStorage.datospersona.per_edad);
        $scope.editarpersona.lugarnacimiento = $sessionStorage.datospersona.per_lugarnacimiento;
        $scope.editarpersona.nacionalidad = $sessionStorage.datospersona.per_nacionalidad;
        $scope.editarpersona.lugarresidencia = $sessionStorage.datospersona.per_lugarresidencia;
        $scope.editarpersona.direccionresidencia = $sessionStorage.datospersona.per_direccionresidencia;
        $scope.editarpersona.notelefono = Number ($sessionStorage.datospersona.per_notelefono);
        $scope.editarpersona.correo = $sessionStorage.datospersona.per_correo;
        $scope.editarpersona.fecingresoempresa = $sessionStorage.datospersona.per_fecingresoempresa;
        $scope.editarpersona.antiguedad = Number ($sessionStorage.datospersona.per_antiguedad);
        $scope.editarpersona.cargo = $sessionStorage.datospersona.per_cargo;
        $scope.editarpersona.centrotrabajo = $sessionStorage.datospersona.per_centrotrabajo;
        $scope.editarpersona.area = $sessionStorage.datospersona.per_area;
        $scope.editarpersona.turno = $sessionStorage.datospersona.per_turno;
        $scope.editarpersona.salario = Number ($sessionStorage.datospersona.per_salario);
        $scope.editarpersona.tipovinculacion = $sessionStorage.datospersona.per_tipovinculacion;
        $scope.editarpersona.arl = Number ($sessionStorage.datospersona.per_arl);
        $scope.editarpersona.eps = $sessionStorage.datospersona.per_eps;
        $scope.editarpersona.afp = $sessionStorage.datospersona.per_afp;
        $scope.editarpersona.escolaridad = $sessionStorage.datospersona.per_escolaridad;
        $scope.editarpersona.profesion = $sessionStorage.datospersona.per_profesion;
        $scope.editarpersona.edtadocivil = $sessionStorage.datospersona.per_estadocivi;
        $scope.editarpersona.raza = $sessionStorage.datospersona.per_raza;
        $scope.editarpersona.nohijos = Number ($sessionStorage.datospersona.per_nohijos);
        $scope.editarpersona.personascargo = Number ($sessionStorage.datospersona.per_otrasperacargo);
        $scope.editarpersona.estratosocial = $sessionStorage.datospersona.per_estratosocial;
        $scope.editarpersona.consentimiento = $sessionStorage.datospersona.per_conseninformado;

        $scope.contactoEditado = false;
		$scope.errorcontactoEditado = false;

        $scope.editarP = function () {
//            console.log($scope.editarpersona.fecingresoempresa);
			// Invalid date
			$scope.editarpersona.fechanacimiento = (typeof $scope.editarpersona.fechanacimiento === "undefined") ? $sessionStorage.datospersona.per_fenacimiento : moment($scope.editarpersona.fechanacimiento, "YYYY-MM-DD").format('YYYY-MM-DD');
			$scope.editarpersona.fecingresoempresa = (typeof $scope.editarpersona.fecingresoempresa === "undefined") ? $sessionStorage.datospersona.per_fecingresoempresa : moment($scope.editarpersona.fecingresoempresa, "YYYY-MM-DD").format('YYYY-MM-DD');
//			$scope.editarpersona.fecingresoempresa = ($scope.editarpersona.fecingresoempresa === null) ? $sessionStorage.datospersona.per_fecingresoempresa : moment($scope.editarpersona.fecingresoempresa, "YYYY-MM-DD").format('YYYY-MM-DD');
//            $scope.editarpersona.fecingresoempresa = moment($scope.editarpersona.fecingresoempresa, "YYYY-MM-DD").format('YYYY-MM-DD');
			
//			console.log($scope.editarpersona);
			
            editarservice.editarperso($scope.editarpersona).then(function succesCallback(response) {
                $scope.contactoEditado = false;
				$scope.errorcontactoEditado = false;
                $scope.editarpersona = {};	
                if (response.data.code == 500) {
					$scope.errorcontactoEditado = true;
                } else {
                    $scope.contactoEditado = true;
                    $scope.editarpersona = '';
                    $timeout(function (){
                        window.location.reload();
                        $location.path('/acercade');
                    }, 1000);
                }
            }, function errorCallback(response) {
                console.error(response);
            });
        }



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



