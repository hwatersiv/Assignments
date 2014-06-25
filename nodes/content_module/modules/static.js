module.exports.response = function () {
	if (response.writeHead(200, {'Content-type': 'text/html'})) {
		console.log('Request', request.url);

	};
	else if (response.writeHead(200, {'Content-type': 'text/plain'})) {
		console.log('Request', request.url);
		
	};
};