// var myHeading = document.querySelector('h1');
// myHeading.textContent = 'Hello World';
//
// document.querySelector('html').onclick = function()
// {
//   alert('Ouch');
// }

var myImage = document.querySelector('img');
myImage.onclick = function()
{
  var mySrc = myImage.getAttribute('src');
  if(mySrc === '/home/scrabbler/Jatin/Programming Codes/MDN_Project/images/firefox.png')
  {
    myImage.setAttribute('src','/home/scrabbler/Jatin/Programming Codes/MDN_Project/images/chrome.png')
  }
  else {
    myImage.setAttribute('src','/home/scrabbler/Jatin/Programming Codes/MDN_Project/images/firefox.png');
  }
}

var myButton = document.querySelector('button');
var myHeading = document.querySelector('h1');

function setUserName()
{
  var myName = prompt('Please enter your name');
  localStorage.setItem('name', myName);
  var MyHeading = document.querySelector('h1');
  myHeading.textContent = 'Mozilla is cool ' + myName;
}

if(!localStorage.getItem('name'))
{
  setUserName();
}
else {
  var storedName = localStorage.getItem('name');
  myHeading.textContent = 'Mozilla is cool, ' + storedName;
}

myButton.onclick = function()
{
  setUserName();
}
