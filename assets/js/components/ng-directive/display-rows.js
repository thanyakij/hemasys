app.directive('displayRows', ['DTDefaultOptions', function(DTDefaultOptions) {
  return {
    link: function(scope, element, attrs) {
      if (parseInt(attrs.displayRows) > 0) DTDefaultOptions.setDisplayLength(attrs.displayRows);
    }
  };
}]);
