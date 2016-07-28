app.directive('numberOnly', ['$interval', function($interval) {
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

  return {
    require: '?ngModel',
    link: function(scope, element, attrs, ctrl) {
      if (!ctrl) return;
      init(scope, element, attrs, ctrl);

      $interval(function() {
        var val = element.val();
        if (angular.isUndefined(val)) val = '';
        var clean = val.replace(/[^0-9]+/g, '');
        if (val !== clean) render(ctrl, clean);
      });

      ctrl.$parsers.push(function(val) {
        if (angular.isUndefined(val)) val = '';
        var clean = val.replace(/[^0-9]+/g, '');
        if (val !== clean) render(ctrl, clean);
        return clean;
      });
    }
  };
}]);
