var mongoose = require('mongoose');
var CustomerSchema = new mongoose.Schema({
	Customer: String, 
	created_date: {type: Date, default: Date.now }
})


CustomerSchema.path('Customer').required(true, 'Customer name cannot be blank');
mongoose.model('Store', CustomerSchema);