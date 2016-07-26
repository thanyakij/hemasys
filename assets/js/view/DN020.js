app.controller('medicalFile', ['$scope', '$http', 'VariablesService', function($scope, $http, VariablesService) {
  
  var donor_id = '1004621184';
  $scope.donor = {};
  $scope.medical = {};
  $scope.selectedMedical = {};
  $scope.selectedMedical2 = {};
  $scope.checkAuthen = true;

  $http({
    method: 'GET',
    url: VariablesService.host + '/api/Donor/read/' + donor_id
  }).then(function(response) {
    $scope.donor = response.data;

    $http({
      method: 'GET',
      url: VariablesService.host + '/api/Donor_medical/lists/' + $scope.donor.DONOR_ID
    }).then(function(response) {
      $scope.medical = response.data;
      // $scope.medical = response;
    })

  });

  $scope.clickRow = function(data) {
    var v_date = moment(data.DATE_OF_INTERVIEW, 'DD-MMM-YYYY').format('YYYY-MM-DD');
    var v_donor_id = data.DONOR_ID.trim();
    $http({
      method: 'GET',
      url: VariablesService.host + '/api/Donor_medical/data/' + v_donor_id + '/' + v_date
    }).then(function(response) {
      angular.extend($scope.selectedMedical, response.data);
      $scope.selectedMedical.allPresser = $scope.selectedMedical.SYSTOLIC_PRESSURE + ' / ' + $scope.selectedMedical.DIASTOLIC_PRESSURE;
    })

    $http({
      method: 'GET',
      url: VariablesService.host + '/api/Complementary_to_medical/data/' + v_donor_id + '/' + v_date
    }).then(function(response) {
      angular.extend($scope.selectedMedical, response.data);
    })
  }

  $scope.authenChecker = function() {
    $scope.checkAuthen = false;
  }

  $scope.saveData = function(){
    $http({
      method: 'POST',
      url: VariablesService.host + '/api/Donor_medical/create',
      data: $scope.selectedMedical
    }).then(function(response) {
      console.log(response);
    })
    console.log("SAVE ONE : ", $scope.selectedMedical);
    // console.log("SAVE TWO : ", $scope.selectedMedical2);
  }

}]);