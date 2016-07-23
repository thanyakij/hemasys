app.directive('isRequired', function() {
  function init(scope, element, attrs, ctrl) {
    var val = '';
    if (scope[attrs.ngModel]) val = scope[attrs.ngModel];
    if (element.val()) val = element.val();
    if (attrs.ngValue) val = attrs.ngValue;
    render(ctrl, val)
  }

  function render(ctrl, value) {
    ctrl.$setViewValue(value);
    ctrl.$render();
  }

  return {
    require: '?ngModel',
    link: function(scope, element, attrs, ctrl) {
      if(!ctrl) return;
      init(scope, element, attrs, ctrl);

      ctrl.$parsers.push(function(val) {
        if(angular.isUndefined(val)) val = '';
        if (!val) {
          try {
            this.focus();
          } catch (err) {}
        }
      });

      element.bind('blur', function() {
        if (!element.val()) this.focus();
      });

      element.bind('keydown', function(event) {
        if(event.keyCode === 9 && element.val().length == 0) event.preventDefault();
      });
    }
  };
});
