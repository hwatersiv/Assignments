var fs = require('fs'),
	path = require('path');
module.exports = function (request, response) {
	console.log("Request", request.url);

	if (request === "/"){
		request.url = "views/index.html";
	};

	switch (path.dirname(request.url)) {
		case "css":
			response.writeHead(200, {"Content-type": 'text/css'});
			fs.readFile("css/" + path.basename(request.url), function (errors, contents) {
				if (errors)
				{
					response.end('File not found!!!');
				}
				else
				{
					response.write(contents);
					response.end();
				}
			});
			break;
		case "images":
			response.writeHead(200, {"Content-type": 'text/html'});
			fs.readFile("images/" + path.basename(request.url), function (errors, contents) {
				if (errors)
				{
					response.end('File not found!!!');
				}
				else
				{
					response.write(contents);
					response.end();
				}
			});
			break;
		default:
			response.writeHead(200, {"Content-type": 'text/html'});
			fs.readFile("views/" + path.basename(request.url), function (errors, contents) {
				if (errors)
				{
					response.end('File not found!!!');
				}
				else
				{
					response.write(contents);
					response.end();
				}
			})
	}
};