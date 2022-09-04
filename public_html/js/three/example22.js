
function example22(p){
	_3DProject.call(this,p);
	this.cube = null;
	this.animating = false;
}

example22.prototype = Object.create(_3DProject.prototype);

example22.prototype.constructor = example22;

example22.prototype.play = function(){
	this.pre_init();
	this.simple_light();
	var mapUrl = "/img/redHare.png";
	var map = THREE.ImageUtils.loadTexture(mapUrl);
	var material = new THREE.MeshPhongMaterial({map:map});
	var geometry = new THREE.CubeGeometry(1,1,1);
	this.cube = new THREE.Mesh(geometry,material);
	this.cube.rotation.x = Math.PI / 5;
	this.cube.rotation.y = Math.PI / 5;
	this.scene.add(this.cube);
	// Add a mouse up handler to toggle the animation
	this.addMouseHandler();
	// Run our render loop
	this.run();
	//this.renderer.render( this.scene, this.camera );
};

example22.prototype.run = function(evt)
{
	console.log("her");
	console.log(this.renderer);	
	console.log(evt);
	this.renderer.render(this.scene,this.camera);
	if (this.animating)
	{
		this.cube.rotation.y -= 0.01;
	}
	
	
	// Render the scene
	this.renderer.render( this.scene, this.camera );
	
	// Spin the cube for next frame
	if (this.animating)
	{
		this.cube.rotation.y -= 0.01;
	}
	
	// Ask for another frame
	requestAnimationFrame(this.run);	
};

example22.prototype.addMouseHandler = function()
{
	var dom = this.renderer.domElement;
	
	dom.addEventListener( 'mouseup', this.onMouseUp, false);
};

example22.prototype.onMouseUp = function(event)
{
	event.preventDefault();
	
	this.animating = !this.animating;
};	