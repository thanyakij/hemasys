app.controller('deferralReasonCtrl', ['$scope', '$http', 'VariablesService', function($scope, $http, variables) {
  function init() {
    $scope.donor_id = '0000010195';
    $scope.donor = {};

    $(document).on("click", ".deferitem", function(){
      $(".deferitem").removeClass("yellow lighten-1");
      $(this).addClass("yellow");
    });

    $http({
      method: 'GET',
      url: variables.host + '/api/donor/read/' + $scope.donor_id
    }).then(function(response) {
      $scope.donor = response.data;
    });
  }


  init();
}]);
