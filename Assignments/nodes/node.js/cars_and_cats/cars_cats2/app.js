var http = require('http');
var fs = require('fs');
//creating a server
server = http.createServer(function (request, response) {
	response.writeHead(200, {'Content-type': 'text/html' });
	console.log('Request', request.url);
	if(request.url === "/"){
		console.log("You are here");
		fs.readFile("views/cars.html", 'utf8', function (errors, contents) {
			response.write(contents);
			response.end();
		});
	}
	else if(request.url === "/cats"){
		fs.readFile("views/cats.html", 'utf8', function (errors, contents) {
			response.write(contents);
			response.end();
		});
	}
	else if(request.url === "/cars/new"){
		fs.readFile("views/new.html", 'utf8', function (errors, contents) {
			response.write(contents);
			response.end();
		})
	}
	else if(request.url === "/images/car.jpg"){
		fs.readFile("./images/car.jpg", function (errors, contents) {
			response.write(contents);
			response.end();
		})
	}
	else if(request.url === "/images/car2.jpg"){
		fs.readFile("images/car2.jpg", function (errors, contents) {
			response.write(contents);
			response.end();
		})
	}
	else if(request.url === "/images/car3.jpg"){
		fs.readFile("images/car3.jpg", function (errors, contents) {
			response.write(contents);
			response.end();
		})
	}
	else if(request.url === "/images/cat.jpg"){
		fs.readFile("images/cat.jpg", function (errors, contents) {
			response.write(contents);
			response.end();
		})
	}
	else if(request.url === "/images/cat2.jpg"){
		fs.readFile("images/cat2.jpg", function (errors, contents) {
			response.write(contents);
			response.end();
		})
	}
	else if(request.url === "/images/cat3.jpg"){
		fs.readFile("images/cat3.jpg", function (errors, contents) {
			response.write(contents);
			response.end();
		})
	}
	else {
    response.end('File not found!!!');
  }
});
server.listen(7077);
console.log("server is running on port 7077");