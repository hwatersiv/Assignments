StoreApp.factory("CustomerFactory", function ($http) {
	var factory = {};
	var customers = [];

	factory.show = function (callback) {
		$http.get('/customers.json').success(function (data) {
			console.log("In the factory With your datas ",data);
			customers = data;
			callback(data);
		});
	};

	factory.create = function (data) {
		console.log(data.name);
		$http.post('/create', {'customer': data.name}).success(function (output) {
			console.log("In the create function ", output)
			customers.push(output);
		});
	};

	factory.destroy = function (id) {
		console.log(id);
		$http.post("/destroy", { 'id': id }).success(function (data) {
			console.log("In the destroy function ", data);
		})
		console.log(customers);
		for (var i = 0; i < customers.length; i++) {
			if (customers[i]._id == id){
				// alert("found "+i+"with id "+id)
				customers.splice(i, 1);
			}
		};
	}

	return factory;
});

StoreApp.factory('ProductFactory', function ($http) {
	var factory = {};
	var products = [];

	factory.show = function (callback) {
		$http.get('/products.json').success(function (data) {
			console.log("In the products factory with your datas", data);
			products = data;
			callback(data);
		})
	}

	return factory;
})

StoreApp.factory('OrderFactory', function ($http) {
	var factory = {};
	var orders = [];

	factory.show = function (callback) {
		$http.get('/orders.json').success(function (data) {
			orders = data;
			callback(data);
		})
	}

	factory.create = function (order) {
		// orders.push({
		// 	cust: order.cust.name,
		// 	product: order.prod.product,
		// 	quantity: order.quantity,
		// 	date: Date.now()
		// })
		console.log(order);
		$http.post('/create_order', order).success( function (data) {
			console.log(data);
			orders.push(data);
			console.log(orders);
		})
	}

	return factory;
})