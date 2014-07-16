

function Paddle () {
	this.x = 336;
	this.y = 50;
	this.width = '73px';
	this.height = '15px';
}

function Ball () {
	this.x_start = 366;
	this.y_start = 64;
	this.x = 366;
	this.y = 64;
	this.radius = 5;
	this.velocity = 1;
	this.color = 'silver';

}

paddle = new Paddle();
ball = new Ball();

