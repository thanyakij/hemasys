app.controller('DN023Ctrl', ['$scope', '$http', 'VariablesService', function($scope, $http, variables) {
  $scope.donor = {};
  $http({
    method: 'GET',
    url: variables.host + '/api/Donor_biological/read/STM5100845'
  }).then(function(response) {
    $scope.donor = response.data;
  });
}]);
