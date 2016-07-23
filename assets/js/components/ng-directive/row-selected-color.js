app.directive('rowSelectedColor', ['$timeout', function($timeout) {
  const CLASS_NAME = ' row-selected';
  const DEFAULT_COLOR = '#52adf1';

  function removeClass(event) {
    var parent = event.target.parentElement.parentElement.children;
    for (var i=0; i < parent.length; i++) {
      parent[i].className = parent[i].className.replace(CLASS_NAME, '');
    }
  }

  return {
    require: '?ngModel',
    link: function(scope, element, attrs, ctrl) {
      if (!ctrl) return;
      if (!attrs.rowSelectedColor) (attrs.rowSelectedColor = DEFAULT_COLOR);

      angular
        .element(document)
        .find('head')
        .prepend('<style type="text/css">.'+CLASS_NAME.trim()+' { background-color: '+attrs.rowSelectedColor+'; opacity: 0.7; }</style>');

      $timeout(function() {
        angular.element(element).on('click', function(event) {
          var parent = event.target.parentElement, tag_name = parent.children[0].tagName;
          if (tag_name != 'TH' && tag_name == 'TD') {
            removeClass(event);
            parent.className += CLASS_NAME;
          }
        });
      })
    }
  };
}]);
