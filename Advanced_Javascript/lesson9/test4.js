//since functions are also objects
var Pizza = function () {
    //this won't be shown
    //this is a private variable
    var crust = 'thin';

    //this will be shown
    this.hasBacon = true;

    var toppings = 3;

    this.getHasBacon = function()
    {
        return this.hasBacon;
    };
    this.getHasCrust = function()
    {
        //since it's a private variable we can access it without this
        return crust;
    };

    //this won't be accessed by the object
    var getToppings = function()
    {
        return toppings;
    };

    //this is closure
    var tmp = {};
    tmp.getToppings = getToppings;

    return tmp;
};

var pizzaA = new Pizza();

console.dir(pizzaA);
console.log(pizzaA.getHasBacon());
console.log(pizzaA.getHasCrust());
console.log(pizzaA.getToppings());
