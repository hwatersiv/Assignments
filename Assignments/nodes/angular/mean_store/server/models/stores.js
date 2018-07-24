var mongoose = require('mongoose');

var StoreSchema = new mongoose.Schema({
	customer: String, 
	created_at: {type: Date, default: Date.now }
});
mongoose.model('Store', StoreSchema);


var ProductSchema = new mongoose.Schema({
	product: String
});
mongoose.model('Product', ProductSchema);


var OrderSchema = new mongoose.Schema({
	customer: String,
	product: String,
	quantity: Number,
	created_at: { type: Date, default: Date.now }
})
mongoose.model('Order', OrderSchema);