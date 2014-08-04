var mongoose = require('mongoose'),
	Store = mongoose.model('Store');

module.exports = function Routes (app) {
	app.get("/", function (req, res) {
		Store.find(({}), function (err, customers) {
			res.render('index', { title: 'Store' }); 
		});
	});

	app.post("/add_customer", function (req, res) {
		console.log(req.body);
		var store = new Store(req.body);
		store.save(function (err, store) {
			console.log(res);
		}) 
	})
}