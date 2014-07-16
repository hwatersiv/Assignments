module.exports = function Route(app){
	app.get('/', function(req, res){
    	res.render('index', {title:'Group Chat'});
  	});

  	var users = {};
//Listening

 	app.io.route('got_a_new_user', function (req) {

 		users[req.sessionID] = {name : req.data.name}
 		var id = req.session.sessionID;
 		console.log(users);
 		//Emitting
 		app.io.broadcast('new_user', {
 			user: users.name, 
 			id:req.sessionID
 		});
 	})

 	app.io.route('updated_text', function (req) {
 		//console.log(req);
 		var message = req.data;
 		//Emitting
 		//console.log(message);
 		req.io.broadcast('text_update', message);
 	})

 	// app.post('/process', function (req, res) {
 	// 	name = req.body.name;
 	// 	location = req.body.location;
 	// 	language = req.body.language;
 	// 	comment = req.body.comment;
		// res.render('result', {

		// });
 		
 	// });
}