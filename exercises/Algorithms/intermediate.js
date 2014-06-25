//I. Swap
var x = [2, 3, 5, 7, 6];

var temp = x[0];

x[0] = x[x.length - 1];
x[x.length - 1] = temp;


console.log(x);

//II. Reverse
var x = [1, 3, 5, 7, 2];

var tempA = 0;
var tempB = 0;

for (var i = 0; i < (x.length - 1) / 2; i+=1) {
  tempA = x[(x.length - 1) - i];
  tempB = x[i];
  x[(x.length - 1) - i] = tempB;
  x[i] = tempA;
}

console.log(x);

//III. Insert X in Y
var arr = [1, 3, 5, 7];

var x = 10;
var y = 2;
var temp = 0;

for (var i = arr.length - 1 ; i >= y ; i--) {
  temp = arr[i];
  arr[i + 1] = temp;
  if (i == y) {
    arr[i] = x;
  }
}

console.log(arr)

//IV. Remove Last Value

var x = [1,3,5,7]

x.pop();
x.pop();

console.log(x)

//V. Remove Negatives
var arr = [-1, -3, 3, -5, 2]

