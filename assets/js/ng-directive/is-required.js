app.directive('isRequired', function() {
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
        if (!val) {
          try {
            this.focus();
          } catch (err) {

          }
        }
      });
      element.bind('blur', function() {
        if (!element.val()) {
          this.focus();
        }
      });
      element.bind('keypress', function(event) {
        if(event.keyCode === 32) {
          event.preventDefault();
        }
      });
    }
  };
});
