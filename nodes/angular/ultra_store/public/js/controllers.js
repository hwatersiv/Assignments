StoreApp.controller('Dashboard', function ($scope) {

})

StoreApp.controller('Products', function ($scope, socket) {

	socket.emit("get_products");

	socket.on("product_list", function (products) {
		console.log("the list of products from the DB: ", products);
		$scope.products = products;

	})


	$scope.create_product = function () {
		console.log($scope.new_prod);
		socket.emit("new_prod", $scope.new_prod)

		socket.on("products", function () {
			$scope.new_prod = '';
			socket.emit("get_products");
		})
	}
})

StoreApp.controller('Orders', function ($scope, socket) {

//Customer Socket calls ///////////////
	socket.emit("get_customers");

	socket.on("customer_list", function (customers) {
		console.log("the list of customers from the DB: ", customers);
		$scope.customers = customers;
		console.log("Customer name: ", customers[0].customer);
	})


//Product socket calls ///////////////
	socket.emit("get_products");

	socket.on("product_list", function (products) {
		console.log("the list of products from the DB: ", products);
		$scope.products = products;
		console.log("product name: ", products[0].name);

	})

	//Dynamic quantity dropdown ///////////
	$scope.product_quantity = function (index) {
		var quantities = [];
		var item = $scope.products.indexOf($scope.new_order.prod);
		console.log("max item quantity: ", $scope.products[item].quantity);
		var item_quantity = $scope.products[item].quantity;
		for (var i = 1; i <= item_quantity ; i++) {
			quantities.push(i);
		};
		console.log(quantities);
		$scope.quantities = quantities;

	}

//Order Socket calls ////////////////
	socket.emit("get_orders");

	socket.on("order_list", function (orders) {
		console.log("list of order from the DB: ", orders.name);
		$scope.orders = orders;
	})

	$scope.create = function () {
		console.log($scope.new_order);
		socket.emit("new_order", $scope.new_order);

		socket.on("orders", function () {
			$scope.new_order = '';
			socket.emit("get_orders");
		})
	}
})

StoreApp.controller('Customers', function ($scope, socket) {

	socket.emit("get_customers");

	socket.on("customer_list", function (customers) {
		console.log("the list of customers from the DB: ", customers);
		$scope.customers = customers;
	})

	$scope.create_customer = function () {
		console.log('New Customers', $scope.new_cust);

		socket.emit("new_cust", {
			customer: $scope.new_cust.name
		});

		socket.on('customers', function () {
			$scope.new_cust = '';
			socket.emit("get_customers");
		})
	}

	$scope.destroy_customer = function (id) {
		console.log(id);
		socket.emit("destroy", id);

		socket.on("update_list", function () {
			socket.emit("get_customers");
		})
	}
})

StoreApp.controller('Settings', function ($scope) {

})