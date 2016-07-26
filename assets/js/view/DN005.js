app.controller('siteSearch', ['$scope', '$http', 'VariablesService', 'CollectionFactory', function($scope, $http, VariablesService, CollectionFactory) {
  
  $scope.data_search = {};

  $scope.search = function() {
    console.log($scope.data_search);
  }
  // $http({
  //   method: 'POST',
  //   url: 
  // })

}]);