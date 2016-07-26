app.controller('collectionPointCtrl', ['$scope', '$http', 'VariablesService', function($scope, $http, VariablesService) {

  var collectionPointID = '00000S';
  $scope.cp = {};

  $http({
    method: 'GET',
    url: VariablesService.host + '/api/Collection_point/read/' + collectionPointID
  }).then(function(res) {
    console.log(res.data);
    $scope.cp = res.data;
    $scope.cp.COLLECTION_TYPE_CODE = '2';
    $scope.cp.CATEGORY_CODE = '3';
    $scope.cp.COLLECTION_MODE = '1';
    $scope.cp.COMMUNITY_TEL = '0837627839';
    $scope.cp.COMMUNITY_SITE_TEL = '028765462';
  })

}])