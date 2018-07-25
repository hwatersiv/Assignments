var express = require('express.io'),
	http = require('http'),
	path = require('path'),
	app = express();

// all environments

app.set('port', process.env.PORT || 8000); //sets the port for the server
app.set('views', path.join(__dirname, 'server/views')); //sets where the server looks for the view file
app.set('view engine', 'ejs');
app.use(express.favicon());
app.use(express.logger('dev'));
app.use(express.json());
app.use(express.urlencoded());
app.use(express.methodOverride());
app.use(app.router);
app.use(express.static(path.join(__dirname, 'public')));

//development only

if ('devlopment' == app.get('env')) {
	app.use(express.errorHandler());
}
var mongoose = require('./config/mongoose');
var routes = require('./config/routes')(app);
http.createServer(app).listen(app.get('port'), function () {
	console.log('Express server listening on port' + app.get('port'));
});