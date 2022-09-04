function _3DProject(){
	this.container = null;
	this.renderer = null;
	this.scene = null;
	this.camera = null;
	if(typeof arguments[0] != 'undefined'){
		this.setContainer(arguments[0]);
	}
}

_3DProject.prototype.setContainer = function(containerId){
	if(typeof containerId == 'string'){
		if(document.getElementById(containerId) === null){
			throw new Error(containerId + " does not exist.")
		}else{
			this.container = document.getElementById(containerId);
		}
	}else{
		throw new Error("containerId must be string.");
	}
};

_3DProject.prototype.pre_init = function(){
	if(this.container == null){
		throw new Error("first container must be set");
	}else{
		this.renderer = new THREE.WebGLRenderer({antialias:true});
		this.renderer.setSize(this.container.offSetWidth,this.container.offSetHeight);
		this.container.appendChild(this.renderer.domElement);
		
		this.scene = new THREE.Scene();
		
		this.camera = new THREE.PerspectiveCamera(45,this.container.offSetWidth/this.container.offSetHeight,1,4000);
		this.camera.position.set(0,0,3);
		this.scene.add(this.camera);
	}
};

_3DProject.prototype.simple_light = function(){
	var light = new THREE.DirectionalLight(0xffffff,1.5);
	light.position.set(0,0,1);
	this.scene.add(light);
};