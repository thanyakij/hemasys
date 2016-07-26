app.directive('isDisabled', ['$interval', function($interval) {
  var default_value = undefined;

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

  function forceDisabled(elem, value, ctrl) {
    elem[0].disabled = true;
    render(ctrl, value);
  }

  return {
    require: '?ngModel',
    link: function(scope, element, attrs, ctrl) {
      if(!ctrl) return;
      init(scope, element, attrs, ctrl);
      if(angular.isUndefined(default_value)) default_value = element.val();

      $interval(function() {
        if (default_value != element.val()) render(ctrl, default_value);
        if (!element[0].disabled) forceDisabled(element, default_value, ctrl);
      });
    }
  };
}]);
