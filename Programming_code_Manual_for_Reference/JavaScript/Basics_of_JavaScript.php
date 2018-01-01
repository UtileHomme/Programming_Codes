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

<!-- What is the use of "toString" method -->

- it returns a number as a string

<!-- Eg -->

var x = 123;
x.toString();            // returns 123 from variable x
(123).toString();        // returns 123 from literal 123
(100 + 23).toString();   // returns 123 from expression 100 + 23

<!-- What is the use of "toExponential" method -->

- returns a string with a number rounded and written using exponential notation

<!-- Eg -->

var x = 9.656;
x.toExponential(2);     // returns 9.66e+0
x.toExponential(4);     // returns 9.6560e+0
x.toExponential(6);     // returns 9.656000e+0

<!-- What is the use of "toFixed" method -->

- returns a string, with the number written with a specified number of decimals

<!-- Eg -->

var x = 9.656;
x.toFixed(0);           // returns 10
x.toFixed(2);           // returns 9.66
x.toFixed(4);           // returns 9.6560
x.toFixed(6);           // returns 9.656000

<!-- What is the use of "toPrecision" method  -->

- returns a string, with a number written with a specified length

var x = 9.656;
x.toPrecision();        // returns 9.656
x.toPrecision(2);       // returns 9.7
x.toPrecision(4);       // returns 9.656
x.toPrecision(6);       // returns 9.65600

<!-- What is the use of "valueof" method -->

- returns a number as a number

var x = 123;
x.valueOf();            // returns 123 from variable x
(123).valueOf();        // returns 123 from literal 123
(100 + 23).valueOf();   // returns 123 from expression 100 + 23

** In Javascript, a number can be a primitive value (typeof = number) or an object(type = object)

- it is used internally to convert Number objects to primitive values

<!-- What are 3 methods used to convert variables to numbers -->

1. Number()
- returns a number converted from its argument

2. parseInt()
- parses its argument and returns a float point number

3. parseFloat()
- parses its argument and returns an integer

<!-- The Number() method -->
- is used to convert Javascript variables to numbers

<!-- Eg -->

Number(true);          // returns 1
Number(false);         // returns 0
Number("10");          // returns 10
Number("  10");        // returns 10
Number("10  ");        // returns 10
Number("10 20");       // returns NaN
Number("John");        // returns NaN

** if a number cannot be converted, NaN (Not a number) is returned

** Number() can also be convert a date to a number

Number(new Date(2017-09-30));   // returns 1506729600000

<!-- The parseInt() Method -->

- parses a string and returns a whole number
- spaces are allowed
- only the first number is returned

<!-- Eg -->

parseInt("10");         // returns 10
parseInt("10.33");      // returns 10
parseInt("10 20 30");   // returns 10
parseInt("10 years");   // returns 10
parseInt("years 10");   // returns NaN

<!-- The parseFloat() method -->

- parses a string and returns a number
- spaces are allowed
- Only the first number is returned

<!-- Eg -->

parseFloat("10");        // returns 10
parseFloat("10.33");     // returns 10.33
parseFloat("10 20 30");  // returns 10
parseFloat("10 years");  // returns 10
parseFloat("years 10");  // returns NaN

<!-- What are some Number Properties -->

1. MAX_VALUE
- returns the largest number possible in JS

2. MIN_VALUE
- returns the smalles number possible in JS

3. NEGATIVE_INFINITY
- represents negative infinity (Returned on overflow)

4. NaN
- represents a "Not-a-Number" value

5. POSITIVE_INFINITY
- represents infinity (Returned on overflow)

<!-- Eg -->

var x = Number.MAX_VALUE;

** We cannot use this
var x = 6;
var y = x.MAX_VALUE;    // y becomes undefined

<!-- What is the JS Math object -->
- allows one to perform mathematical tasks on numbers

<!-- Eg -->
1. Math.PI;            // returns 3.141592653589793

2. Math.round(x)
- returns the value of "x" rounded to its nearest integer

<!-- Eg -->
Math.round(4.7);    //returns 5
Math.round(4.4);    //returns 4

3. Math.pow()
- Math.pow(x,y) returns the value of "x" to the power of "y"

<!-- Eg -->
Math.pow(8,2);     //returns 64

4. Math.sqrt()
- returns the square root of x

<!-- Eg  -->
Math.sqrt(64);      //returns 8

5. Math.ceil()
- returns the value of "x" rounded up to its nearest integer

<!-- Eg -->
Math.ceil(4.4);     //returns 5

6. Math.floor()
- returns the value of "x" rounded down to its nearest integer

<!-- Eg -->
Math.floor(4.7)     //returns 4

7. Math.min() and Math.max()
- returns the lowest or highest value in the list of arguments

<!-- Eg -->
Math.min(0,150,30,20,-8,-200)   //returns -200

Math.max(0, 150, 30, 20, -8, -200);  // returns 150

8. Math.random()
- returns a random number between 0(inclusive) and 1(exclusive)

Math.random();  //returns a random number

<!-- How to get random numbers from 0 to highest 2 digit number -->

<!-- Eg -->

Math.floor(Math.random() * 10)          //returns a number between 0 and 9

 Math.floor(Math.random() * 11);      // returns a number between 0 and 10

 Math.floor(Math.random() * 101);     // returns a number between 0 and 100

 Math.floor(Math.random() * 10) + 1;  // returns a number between 1 and 10

 Math.floor(Math.random() * 100) + 1; // returns a number between 1 and 100

<!-- A proper Random function to get a random number between min and max -->

<!-- Eg -->

function Rand(min, max)
{
    return Math.floor(Math.random() * (max-min)) + min;
}

* Highest value is excluded here

function getRndInteger(min, max) {
    return Math.floor(Math.random() * (max - min + 1) ) + min;
}

* both values are included here

<!-- How to work with dates -->

- The "Date" object lets us work with dates(years, months, days, hours, minutes, seconds and milliseconds)

- A JS date can be written as a string as "Mon Jan 01 2018 13:12:34 GMT+0530 (IST)" or as a number as "1514792554661"

<!-- How to create date objects -->
- Date objects are created with the "new Date()" constructor

- There are 4 ways of initiating a date
1. new Date()
2. new Date(milliseconds)
3. new Date(dateString)
4. new Date(year,month, day, hours, minutes, seconds, milliseconds)

<!-- How to create a date using the "new" keyword -->

<p id="demo"></p>
<p id="demo1"></p>
<p id="demo2"></p>

<script type="text/javascript">
    var d = new Date();
    document.getElementById("demo").innerHTML = d;
</script>

<script type="text/javascript">
var d1 = new Date("October 13, 2014 11:13:00");
document.getElementById("demo1").innerHTML = d1;
</script>

<script type="text/javascript">
var d = new Date(99, 5, 24, 11, 33, 30, 0);
document.getElementById("demo2").innerHTML = d;
</script>
