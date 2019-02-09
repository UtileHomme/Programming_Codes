window.onload = function()
{
    var fruits = ['banana', 'apple', 'pear'];

    function callback(val)
    {
        console.log(val);
    }

    fruits.forEach(callback);
};