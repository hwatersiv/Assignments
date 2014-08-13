StoreApp.factory('CustomerFactory', function ($http) {
	var factory = {};
	var customers = [
		{name: "Ksenia Solo", created_at: Date.now()},
		{name: "Bill Murray", created_at: Date.now()},
		{name: "Deborah Ann Woll", created_at: Date.now()}
	];

	factory.show = function () {
		return customers;
	}

	factory.create = function (new_cust) {
		console.log(new_cust);
		customers.push({
			name: new_cust.name,
			created_at: Date.now()
		})
		console.log(customers);
	}

	factory.destroy = function (id) {
		customers.splice(id, 1);
	}
	return factory;
})

StoreApp.factory("ProductFactory", function ($http) {
	var factory = {};
	var products = [
		{name: "boots", desc: "boots", quantity: 8},
		{name: "cat food", desc: "wild diet", quantity: 3},
		{name: "black belt", desc: "black belt", quantity: 10},
		{name: "collar", desc: "collar", quantity: 99}
	];

	factory.show = function () {
		return products;		
	}

	factory.create = function (new_prod) {
		console.log(new_prod);
		products.push({
			name: new_prod.name,
			desc: new_prod.desc,
			quantity: new_prod.quantity
		})
	}
	return factory;
})