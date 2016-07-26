app.directive('dateInput', function() {
  // const months = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];
  // const monthsShort = ["ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ศ.", "ธ.ค."];
  const monthsShort = ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"];

  moment.updateLocale('en', {
    monthsShort: monthsShort
  });

  var today = moment(new Date());
  var currentYear = parseInt(today.format('YYYY')) + 543;

  function init(scope, element, attrs, ctrl) {
    var val = '';
    if (scope[attrs.ngModel]) val = scope[attrs.ngModel];
    if (element.val()) val = element.val();
    if (attrs.ngValue) val = attrs.ngValue;
    val = convertYear(val);
    render(ctrl, val)
  }

  function render(ctrl, value) {
    ctrl.$setViewValue(value);
    ctrl.$render();
  }

  function monthNumber(value) {
    var number = monthsShort.indexOf(value) + 1;
    if (number < 10) (number = '0' + number);
    return number;
  }

  function monthLabel(number) {
    if (monthNumber(number) == '00') {
      return monthsShort[parseInt(number) - 1];
    }
    return number;
  }

  function now() {
    return today.format('DD-MMM-') + currentYear;
  }

  function replaceLabel(value, a, b) {
    if (b == '00') return '';
    var value = value.split('-');
    var day_length = value[0].length;
    var year_length = value[2].length;

    if (day_length < 2) {
      for (var i=day_length; i < 2; i++) (value[0] = '0' + value[0]);
    }
    if (year_length < 4) {
      for (var i=year_length; i < 4; i++) (value[2] = '0' + value[2]);
    }

    return value.join('-').replace('-'+a+'-', '-'+b+'-');
  }

  function invalid(value) {
    var format = (value.split('-').length != 3)
    var parser = (moment(value, 'DD-MMM-YYYY').format('DD-MMM-YYYY') == 'Invalid date');
    return (format || parser);
  }

  function setDay(value) {
    if (value.length > 0 && value.length < 3) {
      try {
        value = parseInt(value) + today.format('-MMM-') + currentYear;
      } catch (err) {
        value = now();
      }
    }

    return value
  }

  function convertYear(value) {
    var value = value.split('-');
    if (isNaN(parseInt(value[2]))) {
      return value.join('-');
    }
    value[2] = parseInt(value[2]) + 543;
    return value.join('-');
  }

  return {
    require: '?ngModel',
    link: function(scope, element, attrs, ctrl) {
      if(!ctrl) return;
      init(scope, element, attrs, ctrl);

      ctrl.$parsers.push(function(val) {
        if(angular.isUndefined(val)) val = '';
        var clean = val.substring(0, 11);
        clean = clean.replace(/\-\-/g, '-');
        clean = clean.replace(/^\-/, '');
        clean = clean.replace(/[^0-9A-Z\-]+/g, '');

        if(val !== clean) render(ctrl, clean);
        return clean;
      });

      element.bind('keypress', function(event) {
        if (event.keyCode === 32) event.preventDefault();
      });

      element.bind('blur', function() {
        var val = element.val();
        val = setDay(val);

        if (val.length == 0) {
          val = (attrs.dateInput != 'true') ? '' : now();
          if (val == '') {
            render(ctrl, val);
            return;
          }
        }

        if (invalid(val)) val = now();
        var month = val.split('-')[1];
        var label = monthLabel(month);

        if(angular.isUndefined(label)) {
          render(ctrl, now());
        } else {
          render(ctrl, replaceLabel(val, month, label));
        }
      });

      element.bind('focus', function() {
        var val = element.val();
        if (val.length == 0) {
          val = (attrs.dateInput != 'true') ? '' : now();
        }
        var month = val.split('-')[1];
        render(ctrl, replaceLabel(val, month, monthNumber(month)));
        this.select();
      });
    }
  };
});
