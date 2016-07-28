app.controller('collectionPointCtrl', ['$scope', '$rootScope', '$http', 'VariablesService', '$location', 'CollectionFactory', function($scope, $rootScope, $http, VariablesService, $location, CollectionFactory) {

  $scope.cpCode = '';              //for sample DN003
  $scope.cpDesc = '';              //for get page DN003 [search]

  var cpCode = $.urlParam("cpCode");             //for get page DN003 [search]
  $scope.cp = {};             //save data of collection point.
  $scope.data = {};           //save other data.

  console.log('DN003 ' + $scope.cpCode);

  //if event for search.
  if(cpCode !== null) {
    getCollectionPoint();
  }

  $scope.checkEvent = function() {
    if(cpCode !== null) {
      updateCollectionPoint();
    }else {
      addCollectionPoint();
    }
  }

  $scope.searchCollectionPoint = function() {
    if($scope.cpCode !== '') {
      cpCode = $scope.cpCode;
      getCollectionPoint();
    }
  }

  addCollectionPoint = function(){
    $http({
      method: 'POST',
      url: VariablesService.host + '/api/Collection_point/create',
      data: $scope.cp
    }).then(function(res) {
      console.log("Create success.");
    }, function(err) {
      console.log(err);
      console.log("Create fail.");
      //window.location.assign('DN003.php');
    });
  }

  updateCollectionPoint = function() {
    $http({
      method: 'POST',
      url: VariablesService.host + '/api/Collection_point/update/' + cpCode,
      data: $scope.cp
    }).then(function(res) {
      console.log("Update success.");
    },function(err) {
      console.log(err);
      console.log("Update fail");
    });
  }

  getCollectionPoint = function() {
    $http({
      method: 'GET',
      url: VariablesService.host + '/api/Collection_point/read/' + cpCode
    }).then(function(res) {
      if(!Object.keys(res.data).length == 0) {
        $scope.cp = res.data;
        alert("พบข้อมูลที่คุณต้องการ");
        //window.location.assign('DN004-UI.php')
      }else {
        alert("ไม่พบข้อมูลที่คุณต้องการ");
        return;
      }
    }, function(err) {
      console.log("Error search collection point.");
      return;
    });
  }


}])