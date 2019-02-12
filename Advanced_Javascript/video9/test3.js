//since functions are also objects
var Pizza = function () {
    this.crust = 'thin';

    this.toppings = 3;

    this.hasBacon = true;
};

//won't give us the properties and the values
console.dir(Pizza);

//To access the properties do this
//create a constructor
var PizzaA = new Pizza();

console.log(PizzaA.crust);
console.log(PizzaA instanceof Pizza);

console.log(PizzaA.constructor);
