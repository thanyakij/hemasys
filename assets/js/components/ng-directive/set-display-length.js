app.directive('setDisplayLength', ['DTDefaultOptions', function(DTDefaultOptions) {
  return {
    link: function(scope, element, attrs) {
      if (parseInt(attrs.setDisplayLength) > 0) DTDefaultOptions.setDisplayLength(attrs.setDisplayLength);
    }
  };
}]);
