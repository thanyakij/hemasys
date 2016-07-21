app.directive('stringAndNumber', function() {
  return {
    require: '?ngModel',
    link: function(scope, element, attrs, ctrl) {
      if(!ctrl) {
        return;
      }
      ctrl.$parsers.push(function(val) {
        if(angular.isUndefined(val)) {
          var val = '';
        }
        var clean = val.replace(/[^(A-Z|a-z|0-9)]+/g, '');
        if(val !== clean) {
          ctrl.$setViewValue(clean);
          ctrl.$render();
        }
        return clean;
      });
      element.bind('keypress', function(event) {
        if(event.keyCode === 32) {
          event.preventDefault();
        }
      });
    }
  };
});
