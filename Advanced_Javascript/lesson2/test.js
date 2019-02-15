//we didn't pass the variable "passed" into the function
//still it returned the sum

//In JS, the variables defined outside a function are automatically available inside
//since it uses lexical scoping

var passed = 3;

var addTo = function()
{
    var inner = 2;
    return passed + inner;
};

console.log(addTo(3));
console.dir(addTo);