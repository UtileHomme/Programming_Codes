let cleanRoom = function()
{
    return new Promise(function(resolve,reject)
    {
        resolve('Clean room');
    }
    );
}

let removeGarbage = function(message)
{
    return new Promise(function(resolve,reject)
    {
        resolve(message + 'remove Garbage');
    }
    );
}

let winIcecream = function(message)
{
    return new Promise(function(resolve,reject)
    {
        resolve(message + 'won Icecream');
    }
    );
}

cleanRoom().then(function(result)
{
    return removeGarbage();
}//after garbage is removed, get icecream
).then(function(result)
{
    return winIcecream();
}
).then(function(result)
{
    console.log("finished" + result);
}
);