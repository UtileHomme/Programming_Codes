// closures are functions with preserved data

var addTo = function(passed)
{
    var add = function(inner)
    {
        return passed + inner;
    };

    return add;
};

//sets the values for the passed variable
var addThree = new addTo(3);

var addFour = new addTo(4);

console.log(addThree(1));
console.log(addFour(2));


