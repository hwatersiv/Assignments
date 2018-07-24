var StoreApp = angular.module('StoreApp', ['ngRoute']);

StoreApp.config(function ($routeProvider) {
	$routeProvider
		.when('/',
			{templateUrl: 'partials/customers.html',
			controller: 'Customers'

		})
		.when('/orders',
			{templateUrl: 'partials/orders.html',
			controller: 'Orders'
		})
		.otherwise({
			redirectTo: '/'
		});
})