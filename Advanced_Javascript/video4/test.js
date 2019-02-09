let x = function()
{
    console.log("I am called from inside a function");
}

let y = function(callback)
{
    console.log('do something');
    callback();
}

y(x);