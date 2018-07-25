store_app.factory ("CustFactory", function () {
	var factory = {};
	var customers = [
		{name: 'Von Waters'},
		{name: 'Jenica Waters'},
		{name: 'Nezumi'}
	]

	factory.show = function () {
		return customers;
	}

	return factory;
})

store_app.factory ("ProductFactory", function () {
	var factory = {};
	var products = [
		{name: 'Nike Shoes'},
		{name: 'Black Belts'},
		{name: 'Ice Creams'},
		{name: 'Candles'}
	]

	factory.show = function () {
		return products;
	}

	return factory;
})

store_app.factory("OrderFactory", function () {
	var factory = {};
	var orderList = []

	factory.show = function () {
		return orderList;
	}

	factory.create = function (order) {
		console.log(order);
		orderList.push({
			name: order.cust.name,
			quantity: order.quantity,
			product: order.prod.name,
			date: Date.now()
		})
		console.log(orderList);
	}

	return factory
})