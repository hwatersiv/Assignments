var StoreApp = angular.module("StoreApp", ['ngRoute']);

StoreApp.config(function ($routeProvider) {
	$routeProvider
		.when('/', 
			{templateUrl: "partials/dashboard.html",
			controller: 'Dashboard'
		})
		.when('/products',
			{templateUrl: "partials/products.html",
			controller: 'Products'

		})
		.when('/orders', 
			{templateUrl: "partials/orders.html",
			controller: 'Orders'
		})
		.when('/customers', 
			{templateUrl: 'partials/customers.html',
			controller: 'Customers'
		})
		.when('/settings',
			{templateUrl: 'partials/settings.html',
			controller: 'Settings'
		})
		.otherwise({
			redirectTo: '/'
		})
})
