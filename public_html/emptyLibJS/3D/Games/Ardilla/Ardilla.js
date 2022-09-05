/**
 * una ardilla de 0.73 kg cae de un poste de luz y llega al suelo
 * en la mitad que dura el canto de un sanate negro  (1.7s) en el mes de junio  ...
 * 
 * Years later they know me as the squirrel wrangler, chasing roaming chipmucks on the road from a bike ..
 *
 * @author Rolando <rolando@emptyart.xyz>
 */
function Ardilla(){
  this.ini_camera_x = 235;
  this.ini_camera_y = 36;
  this.ini_camera_z = 33;

  this.show_stats = true;
  this.show_control_gui = true;
  this.control = null;
  this.floorTextureUrl = '/emptyLibJS/3D/Games/Kalero/assets/floorb.png';
  this.clearColor = 0xa5b6c5;
  this.l = new Light();

  //this.planet = new Wo.Planet();
  this.enable_shadows = true;
  this.Helicoptero = null;
  this.ball = null;
  this.cameraControl = null;

  this.g = 0.1;//acceleration due gravity
  this.x = 50;
  this.y = 80;
  this.vx = 2;
  this.vy = 0;
  this.radius = 50;
  Game.call(this.p);
}

Ardilla.prototype = Object.create(eO._3D.Templates.Game.prototype);

Ardilla.prototype.constructor = Ardilla;

Ardilla.prototype.postInit = function(){
  this.floorAndSky();
  this.Helicoptero = new Helicoptero();
  this.Helicoptero.setGame(this);
  this.Helicoptero.loadModel(this.Helicoptero.modelUrl);
  this.initBouncingBall();
}

Ardilla.prototype.initBouncingBall = function(){
  var geometry = new THREE.SphereGeometry(5,5,5);
  var material = new THREE.MeshBasicMaterial({color:0xefa526});
  this.ball = new THREE.Mesh(geometry,material);
  this.ball.position.y = this.y;
  this.scene.add(this.ball);
}

Ardilla.prototype.renderBouncingBall = function(){
  this.vx += this.g;
  this.x -= this.vx;
  this.y -= this.vy;
  if(this.y < 0){
    this.y = 10;
    this.vy *= -0.8;
  }
  this.ball.position.y = this.y;
  this.ball.position.x = this.x;
}

Ardilla.prototype.setControl = function(){
  this.cameraControl = new THREE.OrbitControls(this.camera);
}

Ardilla.prototype.preRender = function(){
  this.cameraControl.update();
//  this.scene.getObjectByName('ambient').color = new THREE.Color(0x111111);
  //this.scene.getObjectByName('directional').color = new THREE.Color(0xffffff);
  //this.planet.onRender();
  this.renderBouncingBall();
}
