app.directive('focus', function() {
  return {
    link: function(scope, element, attrs) {
      if (document.activeElement.tagName == 'BODY') element[0].focus();
    }
  };
});
