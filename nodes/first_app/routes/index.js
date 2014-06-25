module.exports = function Route(app){
	app.get('/', function(req, res){
    	res.render('index', {title:'Welcome Page'});
  	});
 //you will add more routes and logic here but this is how to write the default route for your project
 	app.get('/dojo', function (req, res) {
 		res.render('dojo', {title:'Dojo Page', data: 'HI'})
 	});

 	app.post('/process', function (req, res) {
 		console.log("\n\n\nPOST DATA\n\n", req.body);

 		req.session.name = req.body.my_name;
 		req.session.email = req.body.email;
 		req.session.sessionID = req.sessionID;

 		//console.log('logging the session data', req.session);
 		req.session.save(function() {
 			res.redirect('/');

 		});
 	});
}
