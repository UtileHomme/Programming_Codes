//a promise can be executed in a given amount of time
let promiseToCleanRoom = new Promise(function(resolve, reject)
{
    //cleaning the room

    let isClean = false;

    if(isClean)
    {
        resolve('Clean');
    }
    else
    {
        reject('Not Clean');
    }
});

//this method is fired when the promise is resolve
// "fromResolve" will have the value of the argument passed in the above "resolve" function
promiseToCleanRoom.then(function(fromResolve)
{
    console.log('the room is' + fromResolve);
}).catch(function(fromReject)
{
    console.log('the room is ' + fromReject);
}
);