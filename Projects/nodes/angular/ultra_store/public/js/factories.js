StoreApp.factory('socket', function ($rootScope) {
	var socket = io.connect();
	var factory = {};

	factory.on = function (eventName, callback) {
		socket.on(eventName, function () {
			var args = arguments;
			// console.log("eventname", eventName, 'callback', callback, 'arguments', args);
			$rootScope.$apply(function () {
				callback.apply(socket, args);
			});
		});
	},
		
	factory.emit = function (eventName, data, callback) {
		socket.emit(eventName, data, function () {
			var args = arguments;
			$rootScope.$apply(function () {
				if(callback) {
					callback.apply(socket, args);
				}
			});
		});
	}

	return factory;
})