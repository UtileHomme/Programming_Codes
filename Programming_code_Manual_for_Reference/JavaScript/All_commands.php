<!-- How to define a variable in JS -->
var myName;

<!-- Another way of concatenation -->

var ourStr = "I come first. ";
ourStr += "I come second.";

<!-- This is how we find the length of a variable  -->

var myVar = "I am here";
var myLength = myVar.length;

<!-- This is how we get the length of the last letter of a string -->

var lastName = "Lovelace";
var lastLetterOfLastName = lastName[lastName.length-1];

<!-- How to find "Nth to last" letter of a string -->

var lastName = "Lovelace";

//second to last
var secondToLastLetterOfLastName = lastName[lastName.length-2];

<!-- This is how we declare an array -->

var myArray = ["Jatin", 44];

<!-- This is how a nested array is created -->

var ourArray = [["the universe", 42], ["everything", 101010]];

<!-- How to prompt the user to enter something inside a field -->

var user_name = prompt('Please enter your name');

<!-- How to select all elements with a particular "class name" -->

var acc = document.getElementsByClassName("accordion");
