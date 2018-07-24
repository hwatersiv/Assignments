
//All 1 - 255

count = 0

while(count < 255){
	console.log(count);
	count++;
}


//odd 1 - 1000

for (var i = 0; i <= 1000; i++){
	if( i % 2 !== 0){
		console.log(i);
	}
}


//sum of all odds 1-5000

var holder = [];

var sum = 0;

for (var i = 0; i <= 5000; i++){
	if( i % 2 !== 0){
		holder.push(i);
	}
}

for (var i=0; i < holder.length; i++) {
	sum += holder[i];
}

alert(sum);

//Max number in an array

var maximum = [-3, 3, 5, 7]

var max = Math.max.apply (null, maximum)

console.log(max);


// average of an array
var my_arr = [1,3,5,7,20]

function Average(arr) {
	var sum = 0
	var arrlength = arr.length

	for (var i=0; i <= arrlength; i++) {
		sum += arr[i];
	}

	var avg = this.sum / this.arrlength

	return avg
};

Average(my_arr);