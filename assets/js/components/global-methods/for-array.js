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

Array.prototype.first = function() {
  return this[0];
};

Array.prototype.last = function() {
  return this[this.length-1];
};

Array.prototype.max = function() {
  return Math.max.apply(this, this);
};

Array.prototype.min = function() {
  return Math.min.apply(this, this);
};

Array.prototype.sum = function() {
  return this.reduce(function(p,c) { return p+c }, 0);
};

Array.prototype.avg = function() {
  return this.reduce(function(p,c,i,a) { return p+(c/a.length) }, 0);
};

Array.prototype.include = function(value) {
  return this.indexOf(value) == -1 ? false : true;
};

Array.prototype.blank = function() {
  var temp = [];
  this.forEach(elem => {
    if (typeof(elem) === 'string') (elem = elem.replace(/\s+/g, ''));
    if (elem != '' && elem != null && elem != undefined) temp.push(elem);
  });
  return temp.length == 0 ? true : false;
};
