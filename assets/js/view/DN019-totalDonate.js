app.controller('totalDonateCtrl', ['$scope', '$http', function($scope, $http) {
  function init() {
    $scope.selected = {};
    $scope.total_donation = [];
    getTotalDonation();
  }

  function removeClassForRowSelected() {
    for (var i=0; i < $('tr').length; i++) {
      $('tr')[i].className = $('tr')[i].className.replace(' row-selected', '');
    }
  }

  function getTotalDonation() {
    $http({
      method: 'GET',
      url: 'xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx'
    }).then(function(response) {
      // $scope.total_donation = response.data
    });
    $scope.total_donation = [
      { DNUMBEROFEXTERNALDONATIONS: 'User1', DCATEGORY: 'A1', DTOTALNUMBEROFDONATIONS: 'B1' },
      { DNUMBEROFEXTERNALDONATIONS: 'User2', DCATEGORY: 'A2', DTOTALNUMBEROFDONATIONS: 'B2' },
      { DNUMBEROFEXTERNALDONATIONS: 'User3', DCATEGORY: 'A3', DTOTALNUMBEROFDONATIONS: 'B3' },
      { DNUMBEROFEXTERNALDONATIONS: 'User4', DCATEGORY: 'A4', DTOTALNUMBEROFDONATIONS: 'B4' },
      { DNUMBEROFEXTERNALDONATIONS: 'User5', DCATEGORY: 'A5', DTOTALNUMBEROFDONATIONS: 'B5' },
      { DNUMBEROFEXTERNALDONATIONS: 'User6', DCATEGORY: 'A6', DTOTALNUMBEROFDONATIONS: 'B6' },
      { DNUMBEROFEXTERNALDONATIONS: 'User7', DCATEGORY: 'A7', DTOTALNUMBEROFDONATIONS: 'B7' },
      { DNUMBEROFEXTERNALDONATIONS: 'User8', DCATEGORY: 'A8', DTOTALNUMBEROFDONATIONS: 'B8' }
    ]
  }

  $scope.selectedRow = function(item) {
    $scope.selected = item;
  }

  $scope.addTotalDonation = function() {
    if (!$scope.number && !$scope.category && !$scope.total) return;

    $scope.total_donation.push({
      DNUMBEROFEXTERNALDONATIONS: $scope.number,
      DCATEGORY: $scope.category,
      DTOTALNUMBEROFDONATIONS: $scope.total
    });

    $scope.number = '';
    $scope.category = '';
    $scope.total = '';
  }

  $scope.removeTotalDonation = function() {
    var index = $scope.total_donation.indexOf($scope.selected);
    if (index == -1) return;

    $scope.total_donation.splice(index, 1);
    removeClassForRowSelected();
  }

  $scope.doSave = function() {
    console.log('doSave');
  }

  $scope.doOk = function() {
    console.log('doOk');
  }

  $scope.doAbort = function() {
    console.log('doAbort');
  }

  init();
}]);
