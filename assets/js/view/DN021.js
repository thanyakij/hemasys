app.controller('dn021', ['$scope', '$http', 'VariablesService', function($scope, $http, VariablesService) {
  
  var donor_id = '1004621184';
  $scope.donor_id = {};

  $http({
    method: 'GET',
    url: VariablesService.host + '/api/Donor/read/' + donor_id
  }).then(function(response) {
    $scope.donor = response.data;
    console.log($scope.donor);
  });

}]);