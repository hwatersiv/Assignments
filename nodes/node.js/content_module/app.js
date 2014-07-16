//http server
var http = require('http'),
    static_contents = require('./modules/static.js'),
//creating a server
server = http.createServer(function (request, response){
  
  static_contents(request, response);

});
server.listen(8000);
console.log("Running in localhost at port 8000");
console.log(static_contents.response.writeHead);