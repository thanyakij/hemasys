app.directive('dateInput', function() {
  // const months = ["มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน", "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม", "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม"];
  // const monthsShort = ["ม.ค.", "ก.พ.", "มี.ค.", "เม.ย.", "พ.ค.", "มิ.ย.", "ก.ค.", "ส.ค.", "ก.ย.", "ต.ค.", "พ.ศ.", "ธ.ค."];
  const monthsShort = ["JAN", "FEB", "MAR", "APR", "MAY", "JUN", "JUL", "AUG", "SEP", "OCT", "NOV", "DEC"];

  moment.updateLocale('en', {
    monthsShort: monthsShort
  });

  let today = moment(new Date());
  let currentYear = parseInt(today.format('YYYY')) + 543;

  return {
    require: '?ngModel',
    link: function(scope, element, attrs, ctrl) {
      var val = '';
      if (element.val()) val = element.val();
      if (attrs.ngValue) val = attrs.ngValue;
      
      val = moment(val, 'DD-MMM-YYYY');
      if (val.format('DD-MMM-YYYY') != 'Invalid date') {
        val = val.format('DD-MMM-') + (parseInt(val.format('YYYY')) + 543);
        ctrl.$setViewValue(val);
        ctrl.$render();
      }

      element.bind('blur', function() {
        var val = element.val();
        if (!val.match('-')) {
          val = val + '-' + today.format('MM') + '-' + currentYear;
        } else {
          var temp = val.split('-');
          if (temp.length == 3) {
            val = temp[0] + '-' + temp[1] + '-' + temp[2];
          } else {
            val = 'Invalid date';
          }
        }

        var clean = moment(val, 'DD-MM-YYYY').format('DD-MMM-YYYY')
        if (clean === 'Invalid date') {
          clean = today.format('DD-MMM-') + currentYear;
        }

        ctrl.$setViewValue(clean);
        ctrl.$render();
      });

      element.bind('focus', function() {
        var val = element.val();
        if (!val) {
          val = today.format('DD-MMM-') + currentYear;
        }

        var temp = val.split('-');
        var month = monthsShort.indexOf(temp[1]) + 1;
        temp = temp[0] + '-' + month + '-' + temp[2];

        ctrl.$setViewValue(temp);
        ctrl.$render();
        this.select();
      });
    }
  };
});
