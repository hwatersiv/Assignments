StoreApp.controller('Customers', function ($scope, CustomerFactory) {
	CustomerFactory.show(function (data){
		$scope.customers = data;
		// [{name: "Von", date: "some date"}, {name: "Aaron", date: "some other date"}];
		console.log("new_cust scope is now ", $scope.customers)
		
	});

	$scope.create = function () {
		console.log($scope.new_cust);
		CustomerFactory.create($scope.new_cust);
		$scope.new_cust = '';
	}

	$scope.destroy = function (id) {
		// console.log(id);
		CustomerFactory.destroy(id);
	}
})

StoreApp.controller('Orders', function ($scope, CustomerFactory, ProductFactory, OrderFactory) {
	CustomerFactory.show(function (data) {
		$scope.customers = data;
		console.log("order controller, Customer factory", data); 
	});

	ProductFactory.show(function (data) {
		$scope.products = data;
	});
	
	OrderFactory.show(function (data) {
		$scope.orders = data;
		console.log($scope.orders);
	});

	$scope.create = function (data) {
		console.log($scope.order);
		OrderFactory.create($scope.order);
		$scope.order = '';
	}
})