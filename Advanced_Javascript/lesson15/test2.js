//event capturing is the opposite of event bubbling

var p = document.querySelector('#parent');


//"true" ensures the parent is clicked first
p.addEventListener('click',function()
{
    console.log('parent clicked');
}, true);

var c = document.querySelector('#child');

c.addEventListener('click', function()
{
    console.log('child clicked');

},true);