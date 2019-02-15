// webworker allows us to run a separate script in backgournd
//this introduces multi-threading


/*
webworker has no access to

- window object
- document object
- parent object

*/
this.onmessage = function(e)
{
    if(e.data.addThis!=undefined)
    {
        this.postMessage({result: e.data.addThis.num1 + e.data.addThis.num2});
    }
};