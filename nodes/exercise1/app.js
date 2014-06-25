var app = 5;
var mylib = require('./library/mylib')(app);

console.log('SUM', mylib.sum(3,5));
var p = new mylib.Person("Von");
console.log('P', p);
console.log('starting app.js');