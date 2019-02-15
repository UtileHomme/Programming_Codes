// Here we'll define our function somewhere and execute it in a different block

/*jshint esversion: 6 */

for(var i=0; i<3; i++)
{
    setTimeout(() =>
    {
        console.log(i);
    }, 1000);

    f();
}

console.log('after the loop');

