app.controller('searchPlanCtrl', ['$scope', '$http', function($scope, $http) {
  function init() {
    $scope.collection_point_list = [
      { code: '0A0900', description: 'ศูนย์บริการโลหิตแห่งชาติ' },
      { code: '0A0901', description: 'เนื่องในโอกาสพิเศษต่างๆ' },
      { code: '0A0902', description: 'เจ้าหน้าที่ศูนย์บริการโลหิตฯ' },
      { code: '0A0903', description: 'COLLECTION POINT TEST' }
    ];
    $scope.collection_point_list2 = [
      { start_date: '0A0900', description: 'ศูนย์บริการโลหิตแห่งชาติ 2' },
      { start_date: '0A0901', description: 'เนื่องในโอกาสพิเศษต่างๆ 2' },
      { start_date: '0A0902', description: 'เจ้าหน้าที่ศูนย์บริการโลหิตฯ 2' },
      { start_date: '0A0903', description: 'COLLECTION POINT TEST 2' }
    ];
    $scope.choice_checked = 'site';
    $scope.choice_checked2 = 'site';
    $scope.list_selected = {};
    $scope.transaction_item = {};
    $scope.selectedItem = {};

    getCollectionPointList();

    $('.modal-trigger').leanModal();

    $(document).on("click", ".colitem", function(){
      $(".colitem").removeClass("yellow");
      $(this).toggleClass("yellow");
    });

    $(document).on("click", ".planitem", function(){
      $(".planitem").removeClass("yellow");
      $(this).toggleClass("yellow");
    });
  }

  function getCollectionPointList() {
    $http({
      method: 'GET',
      url: 'http://192.168.0.145/api/donor_biological/lists/0000010195' // จะต้องเปลี่ยน path
    }).then(function(response) {
      console.log('Init');
      // $scope.collection_point_list = response.data;
    });
  }

  $scope.search = function() {
    $http({
      method: 'GET', // อาจจะต้องใช้ POST
      url: 'http://192.168.0.145/api/donor_biological/lists/0000010195', // จะต้องเปลี่ยน path
      data: {

      }
    }).then(function(response) {
      console.log('Search');
      // $scope.collection_point_list2 = response.data;
    });
  }

  $scope.selectedRow = function(item) {
    $scope.transaction_item = item;
  }

  $scope.selectedRow2 = function(item) {
    $scope.selectedItem = item;
  }

  $scope.closeModal = function(condition) {
    if (condition) setSelected();
  }

  $scope.closeModal2 = function(condition) {
    if (condition) {
      console.log('Link to ...', $scope.selectedItem);
    }
  }

  $scope.showModal = function(id) {
    console.log(id);
    window.location.href = id;
  }

  function setSelected() {
    $scope.list_selected = $scope.transaction_item;
    $scope.code = $scope.transaction_item.code;
  }

  $scope.$watch('code', function(newVal, oldVal) {
    $scope.collection_point_list.forEach(item => {
      if (item.code == newVal) {
        $scope.selectedRow(item);
        setSelected()
      }
    });
  });

  init();
}]);
