app.controller('dn019', ['$scope', '$http', 'VariablesService', function($scope, $http, VariablesService) {

  $scope.donor = {};
  $scope.dob = '';
  let ageDifMs = '';
  let ageDate = '';

  $http({
    method: 'GET',
    url: VariablesService.host + '/api/Donor/read/0000010195'
  }).then(function(res) {
    //Intitial dob string format to date format
    $scope.dob = new Date(res.data.DATE_OF_BIRTH);
    $scope.donor = res.data;

    $scope.donor.CODE_OF_COUNTRY_OF_NATIONALITY = '1';
    $scope.donor.CODE_OF_COUNTRY_OF_RESIDENCE = '2';
    $scope.donor.LAST_AWARD = '2';
    $scope.donor.CODE_OF_REGION = '2';
    $scope.donor.TOWN = 'ตำบลเงาะแงะ';
    $scope.donor.SOCIO_PROFESSIONAL_CATEGORY = '2';
    $scope.donor.FAMILY_DOCTOR = '3';

    ageDifMs = Date.now() - $scope.dob.getTime();
    ageDate = new Date(ageDifMs);                       //miliseconds from epoch
    $scope.donor.AGE = Math.abs(ageDate.getUTCFullYear() - 1970);
    
    console.log($scope.donor);
    console.log($scope.donor.LAST_AWARD);
  })
}])