<!-- How to place scripts in external Javascript file -->

- Define the file as function.js
- Put the code inside the javascript file

function myFunction()
{
   document.getElementById("demo").innerHTML = "Paragraph changed.";
}

Include the file like this :

<!DOCTYPE html>
<html>
<body>

<script src="myScript.js"></script>

</body>
</html>

<!-- Advantages of doing the above -->

- separates HTML and code
- makes HTML and Javascript easier to maintain and code
- cached JS files can speed up the process

<!-- How to reference external cdns etc. -->

<script src="https://www.w3schools.com/js/myScript1.js"></script>

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

<!-- How to declare objects in JS -->

var person = {firstName:"John", lastName:"Doe", age:50, eyeColor:"blue"};

<!-- How to access the property of an object -->

person.lastName;

OR

person["lastName"]

<!-- How to access the function of an object -->

person.fullName();

<!-- How to set empty values in a variable -->

var car = "";              // The value is "", the typeof is "string"

<!-- This is how a nested array is created -->

var ourArray = [["the universe", 42], ["everything", 101010]];

<!-- How to declare a functtion in Javascript -->

function myFunction(p1, p2) {
    return p1 * p2;              // The function returns the product of p1 and p2
}

<!-- How to prompt the user to enter something inside a field -->

var user_name = prompt('Please enter your name');

<!-- How to select all elements with a particular "class name" -->

var acc = document.getElementsByClassName("accordion");

<!-- How to select an element by its "id" and change its content -->

document.getElementById("demo").innerHTML = "Hello JavaScript";

<!-- How to select an element and change its attribute -->

<button onclick="document.getElementById('myImage').src='images/med1.jpg'">Dog Meditating 1</button>

<!-- How to change the style of an element -->

<button type="button" onclick="document.getElementById('demo').style.fontSize='35px'">Click Me!</button>

<!-- How to hide an element -->

<button type="button" onclick="document.getElementById('demo').style.display='none'">Click me</button>

<!-- How to display a hidden element -->

<button type="button" onclick="document.getElementById('demo').style.display='block'">Click Me!</button>

<!-- How to display date and time when a button is clicked -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <h2>My First Javascript</h2>

        <button type="button" onclick="document.getElementById('demo').innerHTML = Date()">
            Click me to display Date and Time
        </button>

        <p id = "demo"></p>
</body>
</html>

<!-- How to change an image at the same place using Button click -->

<!DOCTYPE html>
<html>
<body>

<h2>What Can JavaScript Do?</h2>

<p>JavaScript can change HTML attributes.</p>

<p>In this case JavaScript changes the src (source) attribute of an image.</p>

<button onclick="document.getElementById('myImage').src='images/med1.jpg'">Dog Meditating 1</button>

<img id="myImage" src="images/med2.jpg" style="width:100px">

<button onclick="document.getElementById('myImage').src='images/med2.jpg'">Dog Meditating 2</button>

</body>
</html>

<!-- How to change the style(font size) of an element in Javascript -->

<!DOCTYPE html>
<html>
<body>

<h2>What Can JavaScript Do?</h2>

<p id="demo">JavaScript can change the style of an HTML element.</p>

    <button type="button" onclick="document.getElementById('demo').style.fontSize='35px'">Click Me!</button>

</body>
</html>

<!-- How to change the style(hide) of an element in Javascript -->

<!DOCTYPE html>
<html>
<body>

<h2>What Can JavaScript Do?</h2>

<p id="demo">JavaScript can hide HTML elements.</p>

<button type="button" onclick="document.getElementById('demo').style.display='none'">Click me</button>

</body>
</html>

<!-- How to toggle between different classes -->

document.getElementById("myDropdown").classList.toggle("show");

<!-- How to display a hidden element -->

<!DOCTYPE html>
<html>
<body>

<h2>What Can JavaScript Do?</h2>

<p>JavaScript can show hidden HTML elements.</p>

<p id="demo" style="display:none">Hello JavaScript!</p>

<button type="button" onclick="document.getElementById('demo').style.display='block'">Click Me!</button>

</body>
</html>

<!-- How to calculate the length of a given string -->

var txt = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
var sln = txt.length;

<!-- How to find the position of the first occurence of a substring in a string -->

var str = "Please locate where 'locate' occurs!"
var pos = str.indexOf("locate");

var str = "Please locate where 'locate' occurs!";
var pos = str.search("locate");

** if you want to start at a particular position , do this

var str = "Please locate where 'locate' occurs!";
var pos = str.indexOf("locate",15);

<!-- How to find the position of the last occurence of a substring in a string -->

var str = "Please locate where 'locate' occurs!"
var pos = str.lastIndexOf("locate");
