module.exports = function(app){
	return {
		log_app: function() { console.log(app); },
		sum: function(a,b) { return a+b; },
		Person: function Person(name) {
			this.name = name;
			this.introduce = function() {
				console.log('my name is', this.name);
			}
		}
	}
}
