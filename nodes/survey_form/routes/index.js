module.exports = function Route(app){
	app.get('/', function(req, res){
    	res.render('index', {title:'Survey Form'});
  	});
 //you will add more routes and logic here but this is how to write the default route for your project
 	app.get('/result', function (req, res) {
 		res.render('result', {title:'Survey Form'});
 	});

 	app.post('/process', function (req, res) {
 		name = req.body.name;
 		location = req.body.location;
 		language = req.body.language;
 		comment = req.body.comment;
		res.render('result', {
			title: 'Survey Result',
			'name': name
		});
 		
 	});
}