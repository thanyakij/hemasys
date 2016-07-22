app.directive('displayRows', function() {
  var block_width = '100%';

  function addStylesheet() {
    angular
      .element(document)
      .find('head')
      .prepend('<style type="text/css">tr:after { content: \'\'; display: block; visibility: hidden; clear: both; }</style>');
  }

  function setStylesheet(elem, height) {
    elem.style.height = height+"px";
    elem.style.overflow = "auto";
  }

  function setWidthOfBlock(elem, width) {
    elem.style.width = width;
    elem.style.float = 'left';
  }

  function setDisplay(elems) {
    for (var i=0; i<elems.length; i++) {
      var elem = elems[i];
      elem.style.display = "block";
      if (elem.tagName == "TH" || elem.tagName == "TD") setWidthOfBlock(elem, block_width);
    }
  }

  return {
    require: '?ngModel',
    link: function(scope, element, attrs, ctrl) {
      if (!ctrl) return;
      var number = attrs.displayRows, trs = element.find('tr'), limit_height = 0, temp = 0, elements = [];
      block_width = (100 / element.find('th').length) + '%';
      if (!number) (number = 10);
      number = parseInt(number);

      for (var i=0; i < number; i++) {
        try {
          if (trs[i].children[0].tagName == 'TD') {
            temp = trs[i].offsetHeight;
          } else {
            number++;
          }
        } catch (err) {}

        limit_height += temp;
      }

      addStylesheet();
      setDisplay(element.find('th'));
      setDisplay(element.find('tbody'));
      setDisplay(element.find('thead'));
      setDisplay(element.find('tr'));
      setDisplay(element.find('td'));

      var children = element[0].children;
      for (var i=0; i < children.length; i++) {
        if (children[i].tagName == 'TBODY') setStylesheet(children[i], limit_height);
      }
    }
  };
});
