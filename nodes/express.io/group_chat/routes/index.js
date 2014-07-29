module.exports = function Route(app){
	
	var chat_log = []; // This holds the chat log from previous typed messages

	app.get('/', function(req, res){
    	res.render('index', {title:'Welcome Page'});
	});

	app.io.route('login', function (req) {
		req.session.name = req.data.name;
		req.session.sessionID = req.sessionID;
		req.session.log = chat_log;
		req.session.save(function () {
			req.io.emit("logged_in", req.session);
		})
	});

	app.io.route('sending_message', function (req) {
		req.data.name = req.session.name;
		console.log(req.data);
		chat_log.push(req.data);
		console.log(chat_log);
		app.io.broadcast("response_message", req.data);
	});
}