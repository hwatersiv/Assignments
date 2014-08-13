var mongoose = require('mongoose');
	
module.exports = function Routes (app){

	app.get("/", function (req, res) {
		res.render('index');
	});
}