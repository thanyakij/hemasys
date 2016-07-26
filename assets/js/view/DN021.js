app.controller('dn021', ['$scope', '$http', 'VariablesService', function($scope, $http, VariablesService) {
  
  var donor_id = '1005613568';
  $scope.donor = {};
  $scope.lists = {};
  $scope.selectedRow = {};

  $http({
    method: 'GET',
    url: VariablesService.host + '/api/Donor/read/' + donor_id
  }).then(function(response) {
    $scope.donor = response.data;

    $http({
      method: 'GET',
      url: VariablesService.host + '/api/History_status/lists/' + donor_id
    }).then(function(response) {
      $scope.lists = response.data;
    })

  });

  $scope.clickRow = function(data) {
    var donor_id_row = data.DONOR_ID.trim();
    var exam_code = data.EXAMINATION_CODE.trim();
    $http({
      method: 'GET',
      url: VariablesService.host + '/api/History_status/read/' + donor_id_row + '/' + data.INCREMENT_POUR_PK + '/' + exam_code
    }).then(function(response) {
      console.log(response.data);
      $scope.selectedRow = response.data;
    })
  }

}]);