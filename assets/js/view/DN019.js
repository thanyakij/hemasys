app.controller('dn019', ['$scope', '$http', 'VariablesService', function($scope, $http, VariablesService) {
  
  var donor_id = $.urlParam("donorId");
  var chkUpdate = true;
  $scope.donor = {};
  $scope.dob = '';
  let ageDifMs = '';
  let ageDate = '';

  if(chkUpdate) {
    $http({
      method: 'GET',
      url: VariablesService.host + '/api/Donor/read/' + donor_id
    }).then(function(res) {
      //Intitial dob string format to date format

      $scope.dob = new Date(res.data.DATE_OF_BIRTH);
      $scope.donor = res.data;

      console.log(res.data);

      $scope.donor.DATE_OF_BIRTH = moment(res.data.DATE_OF_BIRTH, 'DD-MMM-YYYY').format('DD-MMM-YYYY');
      $scope.donor.DATE_OF_LAST_VISIT = moment(res.data.DATE_OF_LAST_VISIT, 'DD-MMM-YYYY').format('DD-MMM-YYYY');

      /*
      ageDifMs = Date.now() - $scope.dob.getTime();
      ageDate = new Date(ageDifMs);                       //miliseconds from epoch
      $scope.donor.AGE = Math.abs(ageDate.getUTCFullYear() - 1970);
      */

    });

    $http({
      method: 'GET',
      url: VariablesService.host + '/api/Donor/get_aborh/' + donor_id
    }).then(function(res) {
      $scope.donor.ABORH = res.data.ABORH;
      $scope.donor.SAMPLE_NUMBER = res.data.SAMPLE_NUMBER;
    });

  }

  $scope.checkEvent = function() {
    if(donor_id == null) {
      addDonorProfile();
    }else {
      updateDonorProfile();
    }
  }

  addDonorProfile = function() {

    //sample assign value
    $scope.donor.DONOR_ID = donor_id;
    $scope.donor.CODE_OF_COUNTRY_OF_NATIONALITY = '1';
    $scope.donor.CODE_OF_COUNTRY_OF_RESIDENCE = '2';
    $scope.donor.LAST_AWARD = '2';
    $scope.donor.CODE_OF_REGION = '2';
    $scope.donor.TOWN = 'ตำบลเงาะแงะ';
    $scope.donor.SOCIO_PROFESSIONAL_CATEGORY = '2';
    $scope.donor.FAMILY_DOCTOR = '3';

    $http({
      method: 'POST',
      url: VariablesService.host + '/api/Donor/create',
      data: $scope.donor
    }).then(function(res) {
      console.log(res);
      console.log("Create Success.");
    }, function(err) {
      console.log(err);
      console.log("Create Error.");
    });
  }

  updateDonorProfile = function() {
    console.log($scope.donor);
    $scope.donor.DONOR_ID = donor_id;
    $http({
      method: 'POST',
      url: VariablesService.host + '/api/Donor/update/' + donor_id,
      data: $scope.donor
    }).then(function(res) {
      console.log(res);
      console.log("Update Success.");
    }, function(err) {
      console.log(err);
      console.log("Update Error.");
    });
  }

}])