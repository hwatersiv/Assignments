module.exports = function Route(app){
	app.get('/', function(req, res){
    	res.render('index', {title:'Group Chat'});
  	});

	var user_log = [];

//Listening
 	app.io.route('got_a_new_user', function (req) {
 		var user = {};
 		user.name = req.data.name;
 		user.id = req.sessionID;
 		user_log.push(user);
 		//Emitting
 		req.io.broadcast('new_user', user);
 		req.io.emit('existing_users', {log: user_log})
 		req.io.emit('myself', user);
 	})

 	app.io.route('updated_text', function (req) {
 		console.log(req);
 		var data = {};
 		data.message = req.data;
 		data.id = req.sessionID;
 		//Emitting
 		console.log(data);
 		app.io.broadcast('text_update', data);
 	})

}