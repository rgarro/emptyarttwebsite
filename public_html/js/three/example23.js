function example23(p){
	_3DProject.call(this,p);
	this.pre_init();
}

example23.prototype = Object.create(_3DProject.prototype);

example23.prototype.constructor = example23;

example23.prototype.main = function(){
	var geometry = new THREE.BoxGeometry(700,700,700,10,10,10);
	var material = new THREE.MeshBasicMaterial({color:0xfffff,wireframe:true});
	var cube = new THREE.Mesh(geometry,material);
	this.scene.add(cube);
};

example23.prototype.render = function(){
	requestAnimationFrame(this.render);
	this.renderer.render(this.scene,this.camera);
};