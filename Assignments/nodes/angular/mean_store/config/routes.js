var mongoose = require('mongoose'),
	Store = mongoose.model('Store'),
	Product = mongoose.model('Product'),
	Order = mongoose.model('Order');

module.exports = function Routes (app) {
	
	// Customer controller calls to server
		// CustomerFactory Reqs
	app.get("/", function (req, res) {
		res.render('index', { title: 'Store' }); 
	});

	app.get("/customers.json", function (req, res) {

		Store.find({}, function (err, customers) {
			res.json(customers);
		});
	});

	app.post("/destroy", function (req, res) {
		console.log(req.body)
		Store.remove({ _id: req.body.id }).exec();
	})

	app.post("/create", function (req, res) {
		console.log(req.body);
		var a = new Store(req.body);
		console.log(a);
		a.save(function (err, a) {
			res.json(a);
		});
	})

	// Order controller 
		// ProductFactory Reqs
	app.get("/products.json", function (req, res) {
		Product.find({}, function (err, products) {
			res.json(products);
		})
	})

	// OrderFactory Reqs

	app.get('/orders.json', function (req, res) {
		Order.find({}, function (err, orders) {
			res.json(orders);
		})
	})

	app.post("/create_order", function (req, res) {
		console.log(req.body);
		console.log(req.body.cust.customer);
		console.log(req.body.prod.product);
		console.log(req.body.quantity);
		console.log(req.body.cust._id);
		var b = new Order({
			customer: req.body.cust.customer,
			product: req.body.prod.product,
			quantity: req.body.quantity
		})
		console.log(b);
		b.save(function (err, b) {
			console.log(res.json(b));
		})

	})
}