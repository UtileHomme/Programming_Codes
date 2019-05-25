
//Arrow function

var x = function()
{
    this.val = 1;

    setTimeout(() =>
    {
        //this is not recognized in the setTime out function
        this.val++;
        console.log(this.val);
    },1);
};

var xx = new x();