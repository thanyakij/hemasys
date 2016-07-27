app.controller('searchMedicalConsultCtrl', ['$scope', '$http', '$interval', function($scope, $http, $interval) {
  function init() {
    $scope.type_selected = '';
    $scope.type_enabled = true;

    $scope.interval = $interval(function () {
      $scope.type_selected = $("#type").val();
      $scope.iden = $("#iden").val();
      autoDisabled();
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

  function autoDisabled() {
    $("#hematosno").prop('disabled', false);
    $("#nationalid").prop('disabled', false);
    $("#abmdrid").prop('disabled', false);
    $("#iden").prop('disabled', false);
    $("#type")[0].disabled = false;
    $("#firstname").prop('disabled', false);
    $("#surname").prop('disabled', false);
    $("#dob").prop('disabled', false);

    if ($scope.hematosno) {
      $("#nationalid").prop('disabled', true);
      $("#abmdrid").prop('disabled', true);
      $("#iden").prop('disabled', true);
      $("#type")[0].disabled = true;
      $("#firstname").prop('disabled', true);
      $("#surname").prop('disabled', true);
      $("#dob").prop('disabled', true);
    }

    if ($scope.nationalid || $scope.abmdrid || $scope.iden) {
      $("#hematosno").prop('disabled', true);
      $("#firstname").prop('disabled', true);
      $("#surname").prop('disabled', true);
      $("#dob").prop('disabled', true);
    }

    if ($scope.firstname || $scope.surname || $scope.dob) {
      $("#hematosno").prop('disabled', true);
      $("#nationalid").prop('disabled', true);
      $("#abmdrid").prop('disabled', true);
      $("#iden").prop('disabled', true);
      $("#type")[0].disabled = true;
    }

    if ($scope.type_enabled != $("#type")[0].disabled) {
      $("#type").material_select();
      $scope.type_enabled = $("#type")[0].disabled;
    }
  }

  $scope.doSearch = function() {
    console.log(
      $("#iden").val()
    );
  }

  $scope.$watch('type', function(newVal, oldVal) {
    if (!newVal) return;
    setSelectType();
  });

  init();
}]);
