module.exports = function Route(app){
	app.get('/', function(req, res){
    	res.render('index', {title:'Welcome Page'});
	});
//you will add more routes and logic here but this is how to write the default route for your project
 	
	app.io.route("emit_survey", function (req) {
		data = req.data
		req.io.emit("random_number", { lucky_number: Math.floor((Math.random() * 1000) + 1), return_data: data });

	});
}