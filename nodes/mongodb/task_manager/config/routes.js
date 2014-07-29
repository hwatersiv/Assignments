var mongoose = require('mongoose'),
	Task =  mongoose.model('Task')
module.exports = function Routes(app){
	app.get('/', function (req, res) {
		Task.find(({}), function (err, task){	
			res.render('index', { title: 'Task Manager', tasks: task});
		}); 
	}); 

	app.post('/tasks', function (req, res) {
		var a = new Task(req.body);

		a.save(function (err, a) {
			res.redirect("/");
		})
	})
	app.post('/tasks/:id', function (req, res) {
		console.log("you made it", req.params.id);
		Task.remove({ _id: req.params.id }).exec();
		res.redirect("/");
			
	});
};