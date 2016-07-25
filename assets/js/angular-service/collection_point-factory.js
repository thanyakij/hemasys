app.factory('CollectionFactory', function() {
  var collectp_data = {};
  return {
    setCollectP: function(site) {
      collectp_data = site;
    },
    getCollectP: function() {
      return collectp_data;
    },
    clearCollectP: function() {
      collectp_data = null;
    }
  }
});
