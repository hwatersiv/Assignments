var mongoose = require('mongoose');

var CustomerSchema = new mongoose.Schema({
	customer: String,
	created_at: { type: Date, default: Date.now }
});
mongoose.model('Customer', CustomerSchema);


var ProductSchema = new mongoose.Schema({
	name: String,
	url: String,
	desc: String,
	quantity: String,
	created_at: { type: Date, default: Date.now }
});
mongoose.model("Product", ProductSchema);

var OrderSchema = new mongoose.Schema({
	customer: String,
	customer_id: String,
	product: String,
	product_id: String,
	quantity: Number,
	created_at: { type: Date, default: Date.now }
});
mongoose.model("Order", OrderSchema);