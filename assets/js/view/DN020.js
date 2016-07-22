app.controller('medicalFile', ['$scope', '$http', 'VariablesService', function($scope, $http, VariablesService) {
  
  var donor_id = '1004621184';
  $scope.donor = {};
  $scope.medical = [];

  $http({
    method: 'GET',
    url: VariablesService.host + '/api/Donor/read/' + donor_id
  }).then(function(response) {
    $scope.donor = response.data;

    $http({
      method: 'GET',
      url: VariablesService.host + '/api/Donor_medical/lists/' + $scope.donor.DONOR_ID
    }).then(function(response) {
      $scope.medical.push(response.data);
      // $scope.medical = response;
    })

  });

  $scope.clickRow = function(data) {
    console.log(data);
  }

}]);