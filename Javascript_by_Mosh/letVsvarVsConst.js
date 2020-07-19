// https://www.youtube.com/watch?v=XgSjoHgy3Rk&list=PLTjRvDozrdlxEIuOBZkMAK5uiqp8rHUax&index=14

function start() {
    for (let i = 0; i < 5; i++) {
        console.log(i);
    }
}

//the scope for Var variables are limited to the function but not to the for loop in which it is defined
function startVar() {
    for (var i = 0; i < 5; i++) {
        if (true) {
            var color = "red";
        }
        console.log(i);
    }

    //accessible
    console.log(color);
}

start();
startVar();

/* var declared variables are attached to the window object.

The window object is global and has only one instance

*/