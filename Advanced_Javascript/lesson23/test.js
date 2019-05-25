// Javascript provides a default arguments object

var x = function()
{
    // var argument = [].slice.call(arguments,0);
    var argument = Array.prototype.slice.call(arguments,0);
};


//we do not know how many paramters we are going to pass here
var x = function(...args)
{
    console.log(args);
};

x(1,2,3,4);