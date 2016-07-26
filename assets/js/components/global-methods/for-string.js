String.prototype.odd = function() {
  var temp = [];
  for (var i = 0; i < this.length; i++) {
    if (i%2 == 0) continue;
    temp.push(this[i]);
  };
  return temp.join('');
};

String.prototype.even = function() {
  var temp = [];
  for (var i = 0; i < this.length; i++) {
    if (i%2 == 0) temp.push(this[i]);
  };
  return temp.join('');
};

String.prototype.unique = function() {
  var temp = {};
  this.split('').forEach(elem => {
    temp[elem] = 0;
  });
  return Object.keys(temp).join('');
};

String.prototype.first = function() {
  return this[0];
};

String.prototype.last = function() {
  return this[this.length-1];
};

String.prototype.blank = function() {
  return this.replace(/\s+/g, '').length == 0 ? true : false;
};
