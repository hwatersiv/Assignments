StoreApp.controller('Customers', function ($scope, CustomerFactory) {
	$scope.customers = CustomerFactory.show();

	$scope.create = function () {
		CustomerFactory.create($scope.new_cust);
		$scope.new_cust = '';
	}

	$scope.destroy = function (id) {
		CustomerFactory.destroy(id);
	}
})

StoreApp.controller('Orders', function ($scope, CustomerFactory, ProductFactory, OrderFactory) {
	$scope.customers = CustomerFactory.show();
	$scope.products = ProductFactory.show();
	$scope.orders = OrderFactory.show();

	console.log($scope.customers);
	$scope.create = function () {
		console.log($scope.order);
		OrderFactory.create($scope.order)
	}
})