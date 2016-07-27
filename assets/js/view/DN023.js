app.controller('DN023Ctrl', ['$scope', '$http', 'VariablesService', function($scope, $http, variables) {
  function init() {
    $scope.donor = {};
    $scope.first_list = [];
    $scope.second_list = [];

    $http({
      method: 'GET',
      url: variables.host + '/api/donor/read/' + $scope.donor_id
    }).then(function(response) {
      $scope.donor = response.data;
    });

    $http({
      method: 'GET',
      url: variables.host + '/api/donor_biological/lists/' + $scope.donor_id
    }).then(function(response) {
      for (var i=0; i<response.data.length; i++) {
        if (i%2 == 0) {
          $scope.first_list.push(response.data[i]);
        } else {
          $scope.second_list.push(response.data[i]);
        }
      }
    });
  }

  $scope.$watch('donor_id', function() {
    init();
  });
}]);
