 // https://www.youtube.com/watch?v=0ik6X4DJKCc&list=PLillGF-RfqbYE6Ik_EuXA2iZFcE082B3s&index=2&t=45s

// For examining the document object
// console.dir(document);

//For examining the domain name
// console.log(document.domain);

//For examining the URL
// console.log(document.URL);
//
// console.log(document.title);
//
// console.log(document.doctype);
//
// console.log(document.body);
//
// console.log(document.head);
//
// console.log(document.all);
//
// console.log(document.all[10]);
//
// console.log(document.forms);
//
// console.log(document.links);
//
// console.log(document.images);

// GET ELEMENTS BY ID

// console.log(document.getElementById('header-title'));

var headerTitle1 = document.getElementById('header-title');
// console.log(headerTitle);
console.log(headerTitle1.textContent);
// headerTitle.textContent = "Hello";
// headerTitle.innerText = "Goodbye";

/*
textContent doesn't take into consideration the styling used on an element
innerHTML does pay attention to the styling
*/

headerTitle1.innerHTML = '<h3>Hello</h3>';

var headerTitle = document.getElementById('main-header')
headerTitle.style.borderBottom = 'solid 3px #000';

// GET ELEMENTS BY CLASS NAME

var items = document.getElementsByClassName('list-group-item');
console.log(items);
console.log(items[1]);

items[1].textContent = 'Hello 2';
items[1].style.fontWeight = 'bold';
items[1].style.backgroundColor = 'yellow';

for(var i=0;i<items.length;i++)
{
  items[i].style.backgroundColor = "grey";
}

// GET ELEMENTS BY TAG NAME

var li = document.getElementsByClassName('list-group-item');
console.log(li);
console.log(li[1]);

li[1].textContent = 'Hello 2';
li[1].style.fontWeight = 'bold';
li[1].style.backgroundColor = 'yellow';

for(var i=0;i<li.length;i++)
{
  li[i].style.backgroundColor = "red";
}

// QUERY SELECTOR
var header2 = document.querySelector('#main-header');
header2.style.borderBottom= 'solid 4px #ccc';

var input = document.querySelector('input');
input.value = 'Hello world';

var submit = document.querySelector('input[type="submit"]');
submit.value = "SEND";

var item = document.querySelector('.list-group-item');
item.style.color = 'red';

var lastItem = document.querySelector('.list-group-item:last-child');
lastItem.style.color = 'blue';

//Css sudo selectors (nth - child (2) - selects the second item in the list)
var lastItem = document.querySelector('.list-group-item:nth-child(2)');
lastItem.style.color = 'coral';

// QUERYSELECTORALL

var titles = document.querySelectorAll('.title');

// console.log(titles);
titles[0].textContent = 'Hello';

var odd = document.querySelectorAll('li:nth-child(odd)');
var even = document.querySelectorAll('li:nth-child(even)');

for(var i=0;i<odd.length;i++)
{
  odd[i].style.backgroundColor = "#f4f4f4";
  even[i].style.backgroundColor = "#ccc";
}

//TRAVERSING THE DOM

// https://www.youtube.com/watch?v=mPd2aJXCZ2g&index=2&list=PLillGF-RfqbYE6Ik_EuXA2iZFcE082B3s

var itemList = document.querySelector('#items');

//parentNode
console.log(itemList.parentNode);
itemList.parentNode.style.backgroundColor = 'yellow';

console.log(itemList.parentNode.parentNode);

//parentElement
console.log(itemList.parentElement);
itemList.parentElement.style.backgroundColor = 'red';

console.log(itemList.parentElement.parentElement);

//childNodes
console.log(itemList.childNodes);

//children
console.log(itemList.children);
console.log(itemList.children[1]);

itemList.children[1].style.backgroundColor = 'yellow';

//firstChild
console.log(itemList.firstChild);

//firstElementChild
console.log(itemList.firstElementChild);
itemList.firstElementChild.textContent = 'Hello 1';

//lastChild
console.log(itemList.lastChild);

//lastElementChild
console.log(itemList.lastElementChild);
itemList.lastElementChild.textContent = 'Hello 4';

//nextSibling
console.log(itemList.nextSibling);

//nextElementSibling
console.log(itemList.nextElementSibling);

//previousSibling
console.log(itemList.previousSibling);

//previousElementSibling
console.log(itemList.previousElementSibling);

//createElement

// create a div
var newDiv = document.createElement('div');

newDiv.className = 'hello';

//Add id
newDiv.id = 'hello1';

//Add attribute
newDiv.setAttribute('title','Hello Div');

//create text node
var newDivText = document.createTextNode('Hello World');

// Add text to div
newDiv.appendChild(newDivText);

//Add the above to the DOM
var container = document.querySelector('header .container');
var h1 = document.querySelector('header h1');

console.log(newDiv);

newDiv.style.fontSize = '30px';

container.insertBefore(newDiv, h1);

// EVENTS

// https://www.youtube.com/watch?v=wK2cBMcDTss&t=0s&list=PLillGF-RfqbYE6Ik_EuXA2iZFcE082B3s&index=4

// var button = document.getElementById('button').addEventListener('click',function()
// {
//   console.log(123);
// }
// );

var button = document.getElementById('button').addEventListener('click',buttonClick );

function buttonClick(e)
{
  // console.log('Button clicked');
  // document.getElementById('hedader-title').textContent = 'Changed';
  // document.querySelector('#main').style.backgroundColor = '#f4f4f4';

  //e.target gives us the elements from which it was fired
  console.log(e.target);

  //gives the id of the target
  console.log(e.target.id);

  //gives the class name of the target
  console.log(e.target.className);


  //gives the list of all classes of the target
  console.log(e.target.classList);

  var output = document.getElementById('output');
  output.innerHTML = '<h3>'+e.target.id+'</h3>';

  //the type of event that has occurred
  console.log(e.type);

  //position from the window
  console.log(e.clientX);
  console.log(e.clientY);

  //position from the element
  console.log(e.offsetX);
  console.log(e.offsetY);

  //tells whether the ALT key has been pressed along with the click
  console.log(e.altKey);

  //tells whether the CTRL key has been pressed along with the click
  console.log(e.ctrlKey);

  //tells whether the SHIFT key has been pressed along with the click
  console.log(e.shiftKey);

}

var button1 = document.getElementById('button').addEventListener('click',runEvent );

function runEvent(e)
{
  console.log('EVENT TYPE:' + e.type);
}

var button2 = document.getElementById('button').addEventListener('dblclick',runEvent1 );

function runEvent1(e)
{
  console.log('EVENT TYPE:' + e.type);
}

var button3 = document.getElementById('button').addEventListener('mousedown',runEvent2 );

function runEvent2(e)
{
  console.log('EVENT TYPE:' + e.type);
}

var button4 = document.getElementById('button').addEventListener('mouseup',runEvent3 );

function runEvent3(e)
{
  console.log('EVENT TYPE:' + e.type);
}

var box = document.getElementById('box'). addEventListener('mouseenter',runEvent4);

function runEvent4(e)
{
  console.log('EVENT TYPE: ' + e.type);
}

var box1 = document.getElementById('box'). addEventListener('mouseleave',runEvent5);

function runEvent5(e)
{
  console.log('EVENT TYPE: ' + e.type);
}

var box2 = document.getElementById('box'). addEventListener('mouseover',runEvent6);

function runEvent6(e)
{
  console.log('EVENT TYPE: ' + e.type);
}

var box3 = document.getElementById('box'). addEventListener('mouseout',runEvent7);

function runEvent7(e)
{
  console.log('EVENT TYPE: ' + e.type);
}

var box4 = document.getElementById('box'). addEventListener('mousemove',runEvent8);

function runEvent8(e)
{
  console.log('EVENT TYPE: ' + e.type);

  output.innerHTML = '<h3>MouseX: '+ e.offsetX+'</h3><h3>MOuseY:'+e.offsetY+'</h3>';

}

var box5 = document.getElementById('box');

box5.addEventListener('mouseover',runEvent9)
function runEvent9(e)
{
  console.log('EVENT TYPE: ' + e.type);

  output.innerHTML = '<h3>MouseX: '+ e.offsetX+'</h3><h3>MOuseY:'+e.offsetY+'</h3>';

  box5.style.backgroundColor = "rgb("+e.offsetX+","+e.offsetY+",40)";
}

var itemInput = document.querySelector('input[type="text"]');

var form = document.querySelector('form');

itemInput.addEventListener('keydown', runEvent10);

function runEvent10(e)
{
  console.log('EVENT TYPE: '+e.type);

  console.log(e.target.value);

  document.getElementById('output').innerHTML = '<h3>'+e.target.value+'</h3>';


}

itemInput.addEventListener('keyup', runEvent11);

function runEvent11(e)
{
  console.log('EVENT TYPE: '+e.type);


}

itemInput.addEventListener('keypress', runEvent12);

function runEvent12(e)
{
  console.log('EVENT TYPE: '+e.type);
}

itemInput.addEventListener('focus', runEvent13);

function runEvent13(e)
{
  console.log('EVENT TYPE: '+e.type);
}

itemInput.addEventListener('blur', runEvent14);

function runEvent14(e)
{
  console.log('EVENT TYPE: '+e.type);
}

itemInput.addEventListener('cut', runEvent15);

function runEvent15(e)
{
  console.log('EVENT TYPE: '+e.type);
}

itemInput.addEventListener('paste', runEvent16);

function runEvent16(e)
{
  console.log('EVENT TYPE: '+e.type);
}

itemInput.addEventListener('input', runEvent17);

function runEvent17(e)
{
  console.log('EVENT TYPE: '+e.type);
}

var select = document.querySelector('select');

select.addEventListener('change',runEvent18);

function runEvent18(e)
{
  console.log('EVENT TYPE: '+e.type);
}

form.addEventListener('submit', runEvent19);

function runEvent19(e)
{
  e.preventDefault();
  console.log('EVENT TYPE: ' + e.type )
}
