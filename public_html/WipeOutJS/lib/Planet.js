/**
 * just hit the east side of the LBC on a mission to find Mr WarrenG
 *
 * @author Rolando <rolando@emptyart.xyz>
 */
var Planet = (function(){
  function Planet(){
    this.G = 6.67408;
    this.groundY = 0;
    this.M = 5.9722;
    this.GaussianGC = 3548.187;
    this.gravity = 0;
    this.length = 0;
    this.mass = 0;
    this.time = 0;
    this.is_wo = true;
    this.eventHorizon = new Wo.Helper.EventHorizon();
  }

  Planet.prototype.preRender = function(){

  }

  Planet.prototype.onRender = function(){
    this.preRender();
    this.eventHorizon.waving();
    this.postRender();
  }

  Planet.prototype.postRender = function(){

  }

  return Planet;
})();
Wo.Planet = Planet;
