// Here we'll define our function somewhere and execute it in a different block

/*jshint esversion: 6 */

let f = () =>
{
    let i = 1;
    let j = 2;

    return () =>
    {
        //we'll see "i" as the closure
        console.log(i);
    };
};

//this will generate a closure
console.dir(f());