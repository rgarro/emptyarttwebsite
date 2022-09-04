Object.create = function (o) {
	​//It creates a temporary constructor F()​
	        function F() {
	        }
	​//And set the prototype of the this constructor to the parametric (passed-in) o object​
	​//so that the F() constructor now inherits all the properties and methods of o​
	        F.prototype = o;
	​
	​//Then it returns a new, empty object (an instance of F())​
	​//Note that this instance of F inherits from the passed-in (parametric object) o object. ​
	​//Or you can say it copied all of the o object's properties and methods​
	        return new F();
	    }