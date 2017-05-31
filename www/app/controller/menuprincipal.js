angular.module('imperium').controller('menuprincipalController', ['$scope', 'registrarpersonaService', function ($scope, PersonaRegistrada) {

    $scope.RegistrarPersona = {
      //     RegistrarPersona = ''
      //Datos personales
      nombre: 'a',
      apellido: 'b',
      cedula: '',
      genero: '',
      fechanaci: '',
      edad: '12',
      lugarnaci: 'd',
      estadocivil: 'e',
      raza: 'f',
      estratosocial: '6',
      nacionalidad: 'h',
      escolaridad: 'i',
      profesion: 'j',
      //Informaciona basica
      antiguedad: '2',
      cargo: 'l',
      centrotrabajo: 'm',
      area: 'n',
      fechaingreso: '',
      turnotrabajo: 'ñ',
      salario: '12345',
      tipovinculacion: 'o',
      arl: '1',
      eps: 'q',
      afp: 'r',
      consentimiento: 's',
      // Informacion contacto
      lugarresidencia: 't',
      direccionresidencia: 'w',
      telefono: '3213213232',
      correo: 'v',
      // Informacion familiar
      numerohijos: '2',
      personasacargo : '2'
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

  }]);
