const app = angular.module('hemasys', ['datatables', 'datatables.bootstrap']);

/** DATA TABLE OPTIONS **/
/*
  DTOptionsBuilder
    .newOptions()
    .withOption('serverSide', true)
    .withOption('hasBootstrap', true)
    .withOption('processing', true)
    .withDisplayLength(10)
    .withPaginationType('full_numbers')
    .withOption('order', [[ 0, 'desc' ]])
    .withOption('stateSave', true)
    .withOption('searchDelay', 350)
    .withOption('width', '100%')
    .withDataProp('data');
*/

app.run(['$rootScope', 'DTDefaultOptions', 'DTOptionsBuilder', function($rootScope, DTDefaultOptions, DTOptionsBuilder) {
  DTDefaultOptions.setDisplayLength(5).setDOM('ftipr');

  $rootScope.bootstrap = DTOptionsBuilder
    .newOptions()
    .withBootstrap()
    // .setDOM('ftipr')
    .withOption('hasBootstrap', true)
    .withOption('processing', true)
    .withOption('width', '100%')
    .withDisplayLength(5);
}]);
