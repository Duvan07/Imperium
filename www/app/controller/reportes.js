angular.module('imperium').controller('reportesController', ['$scope', '$sessionStorage', '$location', function ($scope, $sessionStorage, $location) {

    $scope.tabs = [
      {tab: 'active', show: true},
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
    
    $scope.buscar = function () {
            $sessionStorage.textoBuscar = $scope.bus;
            console.log($scope.bus);
            $location.path("/buscar");

            location.reload(true);
        }

  }]);