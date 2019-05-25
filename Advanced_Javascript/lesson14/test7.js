// How to get arguments list using array index

// var x = function()
// {
//     //gives the first argument i.e. 1
//     console.log(arguments[0]);
// };

//using spread operators
var x = (...args) =>
{
    console.log(args[0]);
}

x(1,2,3);

