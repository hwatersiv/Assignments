StoreApp.factory("CustomerFactory", function ($http) {
	var factory = {};
	var customers = []

	factory.show = function () {
		// $http.get('/customers.json')
		// 	.success(function (output) {
		// 		customers = output
		// 	})
		// 	.error(function (output) {

		// 	})
		return customers;
	}

	factory.create = function (callback) {
		$http.get('/add_customer').success(function (output) {
			customers = output
			callback(output)	
		});
	}

	factory.destroy = function (id) {
		customers.splice(id, 1);
	}

	return factory;
});

StoreApp.factory('ProductFactory', function () {
	var factory = {};
	var products = [
	{product: 'Cat Food'},
	{product: 'Candy'},
	{product: 'Video Game'},
	{product: 'Bachelor Chow'},
	{product: 'Socks'}
	]

	factory.show = function () {
		return products;
	}

	return factory;
})

StoreApp.factory('OrderFactory', function () {
	var factory = {};
	var orders = []

	factory.show = function () {
		return orders;
	}

	factory.create = function (order) {
		orders.push({
			cust: order.cust.name,
			product: order.prod.product,
			quantity: order.quantity,
			date: Date.now()
		})
		console.log(orders);
	}

	return factory;
})