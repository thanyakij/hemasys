app.controller('donationRequestCtrl', ['$scope', '$http', 'VariablesService', function($scope, $http, VariablesService) {

  var donorId = $.urlParam("donorId");
  var dateOfInterview = $.urlParam("dateOfInterview");
  $scope.donMed = {};
  $scope.donor = {};

  $scope.event = function(evt) {
    
  }

  getDonorMedical = function() {
    $http({
      'method': 'GET',
      'url': VariablesService.host + '/api/Donor_medical/read/' + donorId + '/' + dateOfInterview
    }).then(function(res) {
      $scope.donMed = res.data;
      console.log($scope.donMed);
      $scope.donMed.DATE_OF_INTERVIEW = moment(res.data.DATE_OF_INTERVIEW, 'DD-MMM-YYYY').format('YYYY-MM-DD');
      getDonor();
      console.log("Get data success.");
    }, function(err) {
      console.log(err);
      console.log('Error get donor medical.');
    })
  }

  getDonor = function() {
    $http({
      'method': 'GET',
      'url': VariablesService.host + '/api/Donor/read/' + donorId
    }).then(function(res) {
      $scope.donor = res.data;
      $scope.donor.DATE_OF_BIRTH = moment(res.data.DATE_OF_BIRTH, 'DD-MMM-YYYY').format('YYYY-MM-DD');
      $scope.donor.FULL_NAME = $scope.donor.FIRST_NAME + '  ' + $scope.donor.SURNAME;


      console.log("Get data success.");
    }, function(err) {
      console.log(err);
      console.log('Error get data donor.');
    });
  }

  getDonorMedical();

}]);