var mongoose = require('mongoose'),
	Customer = mongoose.model('Customer'),
	Product = mongoose.model("Product"),
	Order = mongoose.model('Order');
	
module.exports = function Routes (app){

	app.get("/", function (req, res) {
		res.render('index');
	});


// Customer Sockets //////////////////////

	app.io.route("get_customers", function (req) {
		Customer.find({}, function (err, customers) {
			req.io.emit("customer_list", customers);
		})
	})

	app.io.route('new_cust', function (req, res) {
		console.log(req.data);
		var a = new Customer(req.data);
		console.log(a);
		a.save(function (err, a) {
			console.log(a);
			req.io.emit('customers');
		})
	})

	app.io.route('destroy', function (req) {
		// console.log("this is the req: ", req.data);
		Customer.remove({ _id: req.data }).exec();
		req.io.emit("update_list");
	})


// Product Sockets ////////////////////////

	app.io.route("get_products", function (req) {
		Product.find({}, function (err, products) {
			// console.log(products);
			req.io.emit("product_list", products);
		})
	})
	
	app.io.route("new_prod", function (req) {
		// console.log("REQUEST read out: ", req.data);
		var b = new Product(req.data);
		console.log("The model: ", b);
		b.save(function (err, b){
			console.log(b);
			req.io.emit("products");
		})
	})

// Order Sockets ///////////////////////
	app.io.route("get_orders", function (req) {
		Order.find({}, function (err, orders) {
			// console.log(orders);
			req.io.emit("order_list", orders);
		})
	})

	app.io.route("new_order", function (req) {
		console.log("new order: ", req.data);
		console.log("Customer: ", req.data.cust.customer);
		console.log("Customer id: ", req.data.cust._id);
		console.log("Product: ", req.data.prod.name);
		console.log("Product id: ", req.data.prod._id);
		console.log("Quantity: ", req.data.quantity);

		var c = new Order({
			customer: req.data.cust.customer,
			customer_id: req.data.cust._id,
			product: req.data.prod.name,
			product_id: req.data.prod._id,
			quantity: req.data.quantity,
			created_at: { type: Date, default: Date.now }
		})
		console.log("THE order: ", c);
		c.save(function (err, c) {
			// console.log("The order after saving to the database: ", c);
			req.io.emit("orders");
		})
	})
}