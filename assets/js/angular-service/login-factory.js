app.factory('LoginFactory', function() {
  var login_data = {};
  return {
    setSession: function(data) {
      login_data = data;
    },
    getSession: function() {
      return login_data;
    },
    clearSession: function() {
      login_data = null;
    }
  }
});