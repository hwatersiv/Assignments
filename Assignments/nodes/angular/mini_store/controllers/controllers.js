
store_app.controller("Customers", function ($scope, CustFactory, ProductFactory, OrderFactory) {
	// getting the customers
	$scope.customers = CustFactory.show();
	// getting the products
	$scope.products = ProductFactory.show();
	// console.log($scope.customers[0].name);
	// console.log($scope.products)

	// Creating an order
	$scope.create = function () {
		
		OrderFactory.create($scope.order);
	}
})

store_app.controller("Orders", function ($scope, OrderFactory){
	// getting the orders
	$scope.order_list = OrderFactory.show();
})