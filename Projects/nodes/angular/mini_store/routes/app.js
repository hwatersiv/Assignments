var store_app = angular.module('store_app', ['ngRoute']);

store_app.config (function ($routeProvider) {
	$routeProvider
		.when("/", 
			{templateUrl: 'partials/customers.html',
			controller: 'Customers'
		})
		.when("/orders", 
			{templateUrl: 'partials/orders.html',
			controller: 'Orders'
		})
		.otherwise({
			redirectTo: "/"
		});
})

