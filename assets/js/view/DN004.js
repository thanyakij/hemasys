app.controller('collectionPointCtrl', ['$scope', '$rootScope', '$http', 'VariablesService', '$location', 'CollectionFactory', function($scope, $rootScope, $http, VariablesService, $location, CollectionFactory) {

  $scope.cpCode;              //for get page DN003 [search]
  $scope.cpDesc;              //for get page DN003 [search]
  $scope.cp = {};             //save data of collection point.
  $scope.data = {};           //save other data.

  //$scope.data.event = 'search';

  //if event for search.
  $scope.searchCollectionPoint = function() {
    $http({
      method: 'GET',
      url: VariablesService.host + '/api/Collection_point/read/' + $scope.cpCode
    }).then(function(res) {
      if(!Object.keys(res.data).length == 0) {
        $scope.cp = res.data;
        $scope.cp.COLLECTION_TYPE_CODE = '2';
        $scope.cp.CATEGORY_CODE = '3';
        $scope.cp.COLLECTION_MODE = '1';
        $scope.cp.COMMUNITY_TEL = '0837627839';
        $scope.cp.COMMUNITY_SITE_TEL = '028765462';

        //window.location.assign('DN004-UI.php')
      }else {
        alert("No Data.");
        return;
      }
    }, function(err) {
      console.log("Error search collection point.");
      return;
    });
    
  }

  $scope.addCollectionPoint = function(){
    $http({
      method: 'POST',
      url: VariablesService.host + '/api/Collection_point/create',
      data: $scope.cp
    }).then(function(res) {
      return;
    }, function(err) {
      //window.location.assign('DN003.php');
    });
  }


}])