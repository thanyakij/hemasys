app.directive('isDisabled', ['$interval', function($interval) {
  var default_value = undefined;

  function init(scope, element, attrs, ctrl) {
    var val = '';
    var attrs_ng_model = attrs.ngModel.split('.'), temp = scope;
    for (var i=0; i<attrs_ng_model.length; i++) {
      temp = temp[attrs_ng_model[i]];
    }
    if (temp) val = temp;

    var attrs_ng_value = attrs.ngValue.split('.'), temp = scope;
    for (var i=0; i<attrs_ng_value.length; i++) {
      temp = temp[attrs_ng_value[i]];
    }
    if (temp) val = temp;

    if (element.val()) val = element.val();
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
