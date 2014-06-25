var http = require('http');
var mysql = require('mysql');
var attempt = 0;

server = http.createServer(function (request, response){
	response.writeHead(200, {'Content-type': 'text/html'});
	attempt = attempt + 1;
	response.end('Attempt #' + attempt);
});
server.listen(6789);
console.log('Server starting port 6789');


//create database connection
var db = mysql.createConnection({
  user: 'root',
  password: 'waters3668',
  database: 'contact_box_development',
  port: '8889'
});
//
get_contacts = function (errors, results, fields) {
  results.forEach(function (result) {
    console.log(result.firstname + ' ' + result.lastname + ' ' + result.email);
  });
}
db.query('SELECT * FROM contacts', get_contacts);