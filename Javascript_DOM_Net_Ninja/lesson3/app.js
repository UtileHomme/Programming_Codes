//this will be an HTML collection which looks like an array
var titles = document.getElementsByClassName('title');

var lis = document.getElementsByTagName('li');

//converting titles from an HTML collection to an array
console.log(Array.isArray(titles));  //false

console.log(Array.isArray(Array.from(titles)));

Array.from(titles).forEach(function(title)
{
    console.log(title);
});