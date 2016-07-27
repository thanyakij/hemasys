app.controller('medicalWaitingList', ['$scope', '$http', 'VariablesService', function($scope, $http, VariablesService) {
  
  $scope.site_code = '0A0000';
  var today = moment(new Date()).format('YYYY-MM-DD');
  $scope.t_today = '2015-01-07';
  $scope.waitingLists = {};
  $http({
    method: 'GET',
    url: VariablesService.host + '/api/Donor_medical/medical_waiting_lists/'+ $scope.site_code + '/' + $scope.t_today
  }).then(function(response) {
    $scope.waitingLists = response.data;
    console.log($scope.waitingLists);
  })

}]);