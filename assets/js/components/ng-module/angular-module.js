const app = angular.module('hemasys', ['datatables']);

app.run(function(DTDefaultOptions) {
  DTDefaultOptions.setDisplayLength(5);
});
