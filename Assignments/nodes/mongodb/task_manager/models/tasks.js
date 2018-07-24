var mongoose = require('mongoose');
var TaskSchema = new mongoose.Schema({
    task: String,
    priority: String,
    date: String,
    created_at: {type: Date, default: Date.now}
});

TaskSchema.path('task').required(true, "Task name cannot be blank");
TaskSchema.path('priority').required(true, "Task priority must be set");
TaskSchema.path('date').required(true, "Task deadline must be completed");

mongoose.model('Task', TaskSchema);