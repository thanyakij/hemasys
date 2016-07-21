app.controller('DN023Ctrl', ['$scope', '$http', 'VariablesService', function($scope, $http, variables) {
  function init() {
    $scope.donor_biological = {};
    $scope.donneur = {};
    $scope.pexamen = {};
    $scope.presultat = {};
    $scope.pparecr = {};
    $scope.ptitre = {};

    $http({
      method: 'GET',
      url: variables.host + '/api/Donor_biological/read/' + $scope.donor_id
    }).then(function(response) {
      $scope.donor_biological = response.data;
    });

    $http({
      method: 'GET',
      url: variables.host + '/api/donor/read/' + $scope.donor_id
    }).then(function(response) {
      $scope.donneur = response.data;
    });

    $http({
      method: 'GET',
      url: variables.host + '/api/Pexamen/read/' + $scope.donor_id
    }).then(function(response) {
      $scope.pexamen = response.data;
    });

    $http({
      method: 'GET',
      url: variables.host + '/api/Presultat/read/STM5100845/xx'
    }).then(function(response) {
      $scope.presultat = response.data;
    });

    $http({
      method: 'GET',
      url: variables.host + '/api/Pparecr/read/STM5100845/xx/xx'
    }).then(function(response) {
      $scope.pparecr = response.data;
    });

    $http({
      method: 'GET',
      url: variables.host + '/api/Ptitre/read/' + $scope.donor_id
    }).then(function(response) {
      $scope.ptitre = response.data;
    });
  }

  $scope.$watch('donor_id', function() {
    init();
  });
}]);
