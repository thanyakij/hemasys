app.directive('validEmail', ['$interval', function($interval) {
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

  function validate(value) {
    var patt = new RegExp(/^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+)*\.(aero|arpa|biz|com|coop|edu|gov|info|int|mil|museum|name|net|org|pro|travel|mobi|[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i);
    return !patt.test(value)
  }

  return {
    require: '?ngModel',
    link: function(scope, element, attrs, ctrl) {
      if(!ctrl) return;
      init(scope, element, attrs, ctrl);

      $interval(function() {
        var val = element.val();
        if (val.length == 0) return;
        if (validate(val)) this.focus();
      });

      element.bind('keydown', function(event) {
        if(event.keyCode === 9) {
          var val = element.val();
          if (val.length == 0) return;
          if (validate(val)) event.preventDefault();
        }
      });

      element.bind('blur', function() {
        var val = element.val();
        if (val.length == 0) return;
        if (validate(val)) this.focus();
      });
    }
  };
}]);
