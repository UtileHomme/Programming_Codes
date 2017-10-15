<!-- What is Javascript -->

- It is a client side scripting language that runs in a web browser
- it is used to program the "behaviour" of the webpages

1. It is a high level language
  - doesn't need to know the suble details of the underlying computer
  - we don't have to manage memory, the processor etc.

2. It is a dynamic language
  - one can extend certain aspects of the language by typing in some new code or introducing
    new object
  - rules are not set

3. It is untyped
  - we don't need to declare the type of the variable before its usage

4. It is interpreted
  - no compilation or creation of executable binary file
  - the interpreter translates the instructions back and forth

5. It is standardized
  - name of the standard - ECMAScript
  - any browser that implements the standard will offer the same features as any other browser

* It is a prototypal language(also a OO language).
  - all objects in JS are based on prototypes

- Prototype-programming involves reuse of objects (like in inheritance) by cloning existing objects that
serve as prototypes

- Here there is no such thing as classes
- we simply define an object and introduce what functionality is necessary.
- when we wish to add functionality to an existing object, you do so by adding it to the object's prototype

- If we attempt to call a method of an object, if the method is not found in that object, then the searching
will move one level up the chain and try to find the method

- When we make a change to an object using its prototype, it is accessible to anyone who uses that object

<!-- What are the common built-in Objects -->

1. Object
  - the base object from which all objects inherit some basic functionality

2. Function
  - Even functions are objects
  - When we create a new function, we are creating a reference to an object of "Function" type
  - Functions have properties that we can inspect during runtime (eg - arguments)

3. Boolean
  - "true" and "false" are understood as objects here

4. Number
  - object for "int", "float", "double" etc.

5. Date
  - for time zones

6. String
  - an object with properties of its own

*** In Javascript, String variable are immutable
    - they cannot be altered once created

<!-- We cannot do this -->

var myStr = "Bob";
myStr[0] = "J";

-- The individual letters of a string cannot be changed. We'll have to change the entire string

var myStr = "Bob";
myStr = "Job";

*** Unlike strings, the entries of arrays are mutable and can be changed freely.

<!-- Where to put the "script" tag -->

- it doesn't have to go inside the "head" of the document
- it is better to put it at the bottom of the body (just before closing the "body" tag)
    - make sure that all the HTML content has been read by the browser before it applies JS to it

- Placing scripts at the bottom of the <body> element improves the display speed, because script compilation slows down the display.

<!-- What is a function in Javascript -->

- a block of Javascript code that runs when an "event" happens

<!-- What is an "event" -->

- an action taken by the user like a "click"

<!-- Different methods of displaying output -->

1. Writing into an HTML element using "innerHTML"

<!-- Eg- -->
<!DOCTYPE html>
<html>
<body>

<h1>My First Web Page</h1>
<p>My First Paragraph</p>

<p id="demo"></p>

<script>
document.getElementById("demo").innerHTML = 5 + 6;
</script>

</body>
</html>

2. Using "document.write()"

- to be used only for testing purposes
- if used after entire HTML load, it will delete all the existing HTML

<!-- Eg -  -->

<!DOCTYPE html>
<html>
<body>

<h1>My First Web Page</h1>
<p>My first paragraph.</p>

<script>
document.write(5 + 6);
</script>

</body>
</html>

3. Using "window.alert()"

- gives an alert box to display data

<!DOCTYPE html>
<html>
<body>

<h1>My First Web Page</h1>
<p>My first paragraph.</p>

<script>
window.alert(5 + 6);
</script>

</body>
</html>

4. Using "console.log()"

- used for debugging process

<!DOCTYPE html>
<html>
<body>

<script>
console.log(5 + 6);
</script>

</body>
</html>

<!-- How to define variables in JS -->

var x, y, z;
x = 5;
y = 6;
z = x + y;

<!-- What will be the output of the following -->

var x = 16 + 4 + "Volvo";

Result:  20Volvo

var x = "Volvo" + 16 + 4;

Result: Volvo164

** Javascript types are dynamic
- this means that the same variable can hold different data types

<!-- What is the use of "typeof" operator -->

- it helps in finding the datatype of the Js variable

Eg -
typeof "John"              // Returns "string"

typeof [1,2,3,4]             // Returns "object" (not "array")

typeof null                  // Returns "object"

typeof function myFunc(){}   // Returns "function"

<!-- What are events -->

- things that happen to HTML elements

<!-- How to initiate an event for an element -->

<element event="some JavaScript">

Eg -
<button onclick="document.getElementById('demo').innerHTML = Date()">The time is?</button>

- It is common to see a function initiating the event

Eg -  <button onclick="displayDate()">The time is?</button>

<script>
function displayDate() {
    document.getElementById("demo").innerHTML = Date();
}
</script>

<!-- How to calculate the length of a given string -->

var txt = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
var sln = txt.length;

<!-- How to create string of "Object" type -->

var y = new String("John");

** Comparing two JavaScript objects will always return false.

** Javascript numbers are always 64-bit floating point numbers

** Integers are accurate upto 15 digits

** Floating point is not always accurate

<!-- Different results when "strings" and "integers" are added -->

<!-- Eg 1 -->

var x = 10;
var y = 20;
var z = x + y;           // z will be 30 (a number)

<!-- Eg 2 -->

var x = "10";
var y = "20";
var z = x + y;           // z will be 1020 (a string)

<!-- Eg 3 -->

var x = 10;
var y = "20";
var z = x + y;           // z will be 1020 (a string)

<!-- Eg 4 -->

var x = "10";
var y = 20;
var z = x + y;   // z will be 1020 (a string)

<!-- Eg 5 -->

var x = 10;
var y = 20;
var z = "30";
var result = x + y + z; // result will be 3030

<!-- Division and Product with string and integers -->

<!-- Eg 1 -->

var x = "100";
var y = "10";
var z = x / y;       // z will be 10

<!-- Eg 2  -->

var x = "100";
var y = "10";
var z = x * y;       // z will be 1000

<!-- Eg 3  -->

var x = "100";
var y = "10";
var z = x - y;       // z will be 90

<!-- Eg 4 -->

<!-- What is "NaN" -->

- it is a JS reserved word indicating that a number is not a legal number

<!-- Eg -  -->

var x = 100 / "Apple";  // x will be NaN (Not a Number)

<!-- Exception -->

var x = 100 / "10";     // x will be 10

<!-- Eg - -->

typeof NaN;            // returns "number"

<!-- How to output decimal numbers a hexa, octa and binary -->

- use "toString" method

<!-- Eg - -->

var myNumber = 128;
myNumber.toString(16);  // returns 80
myNumber.toString(8);   // returns 200
myNumber.toString(2);   // returns 10000000

<!-- How to create a Object of numbers -->

var y = new Number(123);
