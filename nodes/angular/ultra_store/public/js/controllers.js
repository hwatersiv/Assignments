StoreApp.controller('Dashboard', function ($scope) {

})

StoreApp.controller('Products', function ($scope, ProductFactory) {
	$scope.products = ProductFactory.show();
	console.log($scope.products);

	$scope.create_product = function () {
		console.log($scope.new_prod);
		ProductFactory.create($scope.new_prod);
	}
})

StoreApp.controller('Orders', function ($scope) {

})

StoreApp.controller('Customers', function ($scope, CustomerFactory) {
	$scope.customers = CustomerFactory.show()
	console.log($scope.customers);

	$scope.create_customer = function () {
		console.log($scope.new_cust);
		CustomerFactory.create($scope.new_cust);
		$scope.new_cust = '';
	}

	$scope.remove_customer = function (id) {
		console.log(id);
		CustomerFactory.destroy(id);
	}
})

StoreApp.controller('Settings', function ($scope) {

})