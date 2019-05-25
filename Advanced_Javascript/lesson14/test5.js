//Problem

// var x = function()
// {
//     this.val = 1;

//     setTimeout(function()
//     {
//         //this is not recognized in the setTime out function
//         this.val++;
//         console.log(this.val);
//     },1);
// };

//Solution

var x = function()
{
    var that = this;
    this.val = 1;

    setTimeout(function()
    {
        //this is not recognized in the setTime out function
        that.val++;
        console.log(that.val);
    },1);
};




var xx = new x();