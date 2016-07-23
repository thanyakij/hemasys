(function() {
  var scripts = document.getElementsByTagName("script"),
      current_path = scripts[scripts.length-1].src.replace('scripts.js', ''),
      files = [
        'global-methods/for-array.js',
        'global-methods/for-string.js',
        'ng-module/angular.min.js',
        'ng-module/jquery.min.js',
        'ng-module/moment.min.js',
        'ng-module/angular-module.js',
        'ng-directive/number-only.js',
        'ng-directive/uppercase.js',
        'ng-directive/lowercase.js',
        'ng-directive/string-only.js',
        'ng-directive/string-and-number.js',
        'ng-directive/max-length.js',
        'ng-directive/date-input.js',
        'ng-directive/is-required.js',
        'ng-directive/is-disabled.js',
        'ng-directive/valid-email.js',
        'ng-directive/row-selected-color.js',
        'ng-directive/display-rows.js',
        'ng-directive/no-space.js'
      ];

  files.forEach(file => { document.write(`<script src="` + current_path + file +`"></script>`); });
})();
