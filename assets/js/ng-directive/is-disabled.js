app.directive('isDisabled', function() {
  let default_value = undefined;

  function forceDisabled(elem, value, ctrl) {
    elem[0].disabled = true;
    ctrl.$setViewValue(value);
    ctrl.$render();
  }

  return {
    require: '?ngModel',
    link: function(scope, element, attrs, ctrl) {
      if(!ctrl) return;

      default_value = element.val();
      forceDisabled(element, default_value, ctrl);

      element.bind('focus', function(event) {
        forceDisabled(element, default_value, ctrl);
      });
      element.bind('blur', function(event) {
        forceDisabled(element, default_value, ctrl);
      });
    }
  };
});
