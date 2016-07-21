app.controller('DN023Ctrl', ['$scope', '$http', 'VariablesService', function($scope, $http, variables) {
  function init() {
    getDonorBiological();
    getDonor();
    getPexamen();
    getPresultat();
    getPparecr();
    getPtitre();
  }

  function getDonorBiological() {
    $scope.donor_biological = {};
    $http({
      method: 'GET',
      url: variables.host + '/api/Donor_biological/read/' + $scope.donor_id
    }).then(function(response) {
      $scope.donor_biological = response.data;
    });
  }

  function getDonor() {
    $scope.donor = {};
    $http({
      method: 'GET',
      url: variables.host + '/api/donor/read/' + $scope.donor_id
    }).then(function(response) {
      $scope.donor = response.data;
    });
  }

  function getPexamen() {
    $scope.pexamen = {};
    $http({
      method: 'GET',
      url: variables.host + '/api/Pexamen/read/' + $scope.donor_id
    }).then(function(response) {
      $scope.pexamen = response.data;
    });
  }

  function getPresultat() {
    $scope.presultat = {};
    $http({
      method: 'GET',
      url: variables.host + '/api/Presultat/read/STM5100845/xx'
    }).then(function(response) {
      $scope.presultat = response.data;
    });
  }

  function getPparecr() {
    $scope.pparecr = {};
    $http({
      method: 'GET',
      url: variables.host + '/api/Pparecr/read/STM5100845/xx/xx'
    }).then(function(response) {
      $scope.pparecr = response.data;
    });
  }

  function getPtitre() {
    $scope.ptitre = {};
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
