app.controller('searchMedicalConsultCtrl', ['$scope', '$http', '$interval', function($scope, $http, $interval) {
  function init() {
    $scope.type_selected = '';

    $scope.interval = $interval(function () {
      $scope.type_selected = $("#type").val();
    }, 10);

    getType();
  }

  function setSelectType() {
    for (var i=0; i<$scope.type.length; i++) {
      $("#type").append('<option value="'+ $scope.type[i].DCODE +'">'+ $scope.type[i].DNAME +'</option>');
    }
    $("#type").material_select();
  }

  function getType() {
    $http({
      method: 'GET',
      url: 'xxxxxxxxxxxxxxxxxxxxx'
    }).then(function(response) {
      // $scope.type = response.data;
    });

    $scope.type = [
      { DCODE: 'k01', DNAME: 'รหัสบัตรประชาชน' },
      { DCODE: 'k02', DNAME: 'อื่นๆ' }
    ];
  }

  $scope.doSearch = function() {

  }

  $scope.$watch('type', function(newVal, oldVal) {
    if (!newVal) return;
    setSelectType();
  });

  init();
}]);
