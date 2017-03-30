var para = document.querySelector('p');

para.addEventListener('click', updateName);

function updateName()
{
  var name = prompt('Enter a name');
  para.textContent = 'Player 1: ' + name;
}

// Function: creates a new paragraph and append it to the bottom of the HTML body.
function createParagraph()
{
  var para1 = document.createElement('p');
  para1.textContent = 'You clicked the button';
  document.body.appendChild(para1);
}

/*
  1. Get references to all the buttons on the page and sort them in an array.
  2. Loop through all the buttons and add a click event listener to each one.

  When any button is pressed, the createParagraph() function will be run.
*/

var buttons = document.querySelectorAll('button');

for(var i=0; i<buttons.length; i++)
{
  buttons[i].addEventListener('click',createParagraph);
}
