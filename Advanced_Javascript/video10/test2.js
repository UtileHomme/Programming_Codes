var Pizza = {
    crust: 'thin',
    toppings: 3,
    hasBacon: true,
    howmanyToppings: function () {
        return this.toppings;
    }
};

Pizza.price = '12$';

console.log(Pizza.howmanyToppings());

console.log(Pizza.crust);
console.log(Pizza);

//to remove a property from an object
delete(Pizza.crust);
console.log(Pizza.crust);
