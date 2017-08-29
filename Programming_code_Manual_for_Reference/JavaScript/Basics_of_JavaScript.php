<!-- What is Javascript -->

- It is a client side scripting language that runs in a web browser

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
