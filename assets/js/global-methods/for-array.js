Array.prototype.trim = function() {
  var temp = [];
  this.forEach(elem => {
    temp.push((''+elem).trim());
  });
  return temp;
};

Array.prototype.odd = function() {
  var temp = [];
  for (var i = 0; i < this.length; i++) {
    if (i%2 == 0) continue;
    temp.push(this[i]);
  };
  return temp;
};

Array.prototype.even = function() {
  var temp = [];
  for (var i = 0; i < this.length; i++) {
    if (i%2 == 0) temp.push(this[i]);
  };
  return temp;
};

Array.prototype.unique = function() {
  var temp = {};
  this.forEach(elem => {
    temp[elem] = 0;
  });
  return Object.keys(temp);
};

Array.prototype.uppercase = function() {
  var temp = [];
  this.forEach(elem => {
    temp.push((''+elem).toUpperCase());
  });
  return temp;
};

Array.prototype.lowercase = function() {
  var temp = [];
  this.forEach(elem => {
    temp.push((''+elem).toLowerCase());
  });
  return temp;
};
