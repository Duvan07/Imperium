angular.module('imperium').controller('menuprincipalController', ['$scope', function ($scope) {
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
