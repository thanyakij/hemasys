app.directive('timeInput', function() {
  var key = 0;

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

  function generateTime(element) {
    var val = element.val().split(":");
    if (val[0] == '') val[0] = '0';
    if (val[1] == '') val[1] = '0';
    if (val[2] == '') val[2] = '0';

    switch (val.length) {
      case 1:
        var h = parseInt(val[0]);
        val = '';
        if ((h >= 0) && (h <= 24)) {
          h = (h < 10) ? '0'+h : h
          val = h+":00:00";
        }
        break;
      case 2:
        var h = parseInt(val[0]), m = parseInt(val[1]);
        val = '';
        if ((h >= 0) && (h <= 24)) {
          h = (h < 10) ? '0'+h : h
          if ((m >= 0) && (m <= 59)) {
            m = (m < 10) ? '0'+m : m
            val = h+':'+m+':00'
          }
        }
        break;
      case 3:
        var h = parseInt(val[0]), m = parseInt(val[1]), s = parseInt(val[2]);
        val = '';
        if ((h >= 0) && (h <= 24)) {
          h = (h < 10) ? '0'+h : h
          if ((m >= 0) && (m <= 59)) {
            m = (m < 10) ? '0'+m : m
            if ((s >= 0) && (s <= 59)) {
              s = (s < 10) ? '0'+s : s
              val = h+':'+m+':'+s
            }
          }
        }
        break;
      default:
        val = '';
        break;
    }

    return val;
  }

  function autoMerge(clean) {
    if (clean.length >= 3) {
      if ((clean[2] != ':') && (clean[2] != undefined)) {
        clean = clean.replace(/[^0-9]+/g, '');
      }

      if (clean.length >= 6) {
        if ((clean[5] != ':') && (clean[5] != undefined)) {
          clean = clean.replace(/[^0-9]+/g, '');
        }
      }
    } else {
      clean = clean.replace(/[^0-9]+/g, '');
    }

    clean = clean.replace(/^\:/, '');
    clean = clean.replace(/\:\:/g, ':');
    return clean;
  }

  function autoInsertSemicolon(clean) {
    if (clean.length == 2 || clean.length == 5) clean += ':';
    return clean;
  }

  function autoRemoveSemicolon(clean) {
    if (clean.length == 2 || clean.length == 5) clean = clean.slice(0, -1);
    return clean;
  }

  return {
    require: '?ngModel',
    link: function(scope, element, attrs, ctrl) {
      if(!ctrl) return;
      init(scope, element, attrs, ctrl);

      ctrl.$parsers.push(function(val) {
        if(angular.isUndefined(val)) val = '';
        var clean = val.substring(0, 8);
        clean = clean.replace(/[^0-9\:]+/g, '');
        clean = autoMerge(clean);

        if (clean.length > key) clean = autoInsertSemicolon(clean);
        if (clean.length < key) clean = autoRemoveSemicolon(clean);
        key = clean.length

        if(val !== clean) render(ctrl, clean);
        return clean;
      });

      element.bind('keypress', function(event) {
        if (event.keyCode === 32) event.preventDefault();
      });

      element.bind('blur', function() {
        render(ctrl, generateTime(element));
      });

      element.bind('focus', function() {
        this.select();
      });
    }
  };
});
