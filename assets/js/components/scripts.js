(function() {
  var scripts = document.getElementsByTagName("script"),
      current_path = scripts[scripts.length-1].src.replace('components/scripts.js', ''),
      files = [
        'components/global-methods/for-array.js',
        'components/global-methods/for-string.js',
        'components/ng-module/angular.min.js',
        'components/ng-module/jquery.min.js',
        'components/ng-module/moment.min.js',
        'components/ng-module/angular-module.js',
        'components/ng-directive/number-only.js',
        'components/ng-directive/uppercase.js',
        'components/ng-directive/lowercase.js',
        'components/ng-directive/string-only.js',
        'components/ng-directive/string-and-number.js',
        'components/ng-directive/max-length.js',
        'components/ng-directive/date-input.js',
        'components/ng-directive/is-required.js',
        'components/ng-directive/is-disabled.js',
        'components/ng-directive/valid-email.js',
        'components/ng-directive/row-selected-color.js',
        'components/ng-directive/display-rows.js',
        'components/ng-directive/no-space.js',
        'components/ng-directive/focus.js',
        'angular-service/variables-service.js',
        'angular-service/collection_point-factory.js'
      ];

  files.forEach(file => { document.write(`<script src="` + current_path + file +`"></script>`); });
})();
