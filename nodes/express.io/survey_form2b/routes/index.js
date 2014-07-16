module.exports = function Route(app){
	app.get('/', function(req, res){
    	res.render('index', {title:'Welcome Page'});
	});
//you will add more routes and logic here but this is how to write the default route for your project
 	

}