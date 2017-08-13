 <!-- What are scripting languages? How are they different from markup and programming languages -->

- Scripting Languages are programming languages that do not require an explicit compilation step
- The purpose of the scripts is usually to enhance the performance or perform routine tasks for an application.

- Programming Languages are the basic foundation of the Application. Scripting languages are an
extension to Programming Languages.

* Javascript is a scripting Language
- The browsers have been built with some other language but Javascript allows users to interact
with browsers in a nice way (hence an extension)

- SL have less access to computer's native abilities since they run on a subset of original programming
languages
Eg - JS won't be able to access the computer's file system

- They are designed to execute a set of tasks which require us to run other programs and pass their outputs
as inputs to other programs.
- Since they do not require explicit compilation they are easier to update and modify.

- Markup languages are not designed for general purpose programming but for processing and presenting text

Programming Languages Eg. - Java, C++
Scripting Languages Eg. - Ruby, PHP
Markup Languages Eg - HTML, XML

<!-- What is a run-time environment -->
- It is the place where all the application code is run. It includes the settings (like environment variables),
common libraries, directory structure, network neighbours etc.

<!-- 3 Important terms -->
- Run time environment
-  Everything you need to execute a program but no tools to change it

Build Environment
- Given some code written by someone, everything we need to compile it or otherwise prepare an
executable that you put into a RTE.
Here we can't modify the code

Development Environment
- Everything we need to write code, build and test it.

<!-- What is Run-time then -->
- It is the actual execution of the program. It contains implementation of basic low-level commands and may
also implement higher level commands and may support type-checking, debugging and code generation/optimization.

- These instructions are not written explicitly but are necessary for proper execution of the code

<!-- What is strongly, weakly,statically and dynamically typing in languages -->

1. Static typing
  - here, the type is bound to the VARIABLE
  - these are checked at compile time

Eg - In Java, String s = "jatin" will always be bound to the type "String"
   - it can point to any other string but it can never point to an interger or float etc.

2. Dynamic Typing
  - here, the type is bound to the VALUE
  - these are checked at run time

Eg - In PHP, any variable can have any type of value, be it, string, integer,float

3. Weak typing
  - this means that we can club or sum or do anything with different datatypes
  - the interpreter or compiler will automatically change the type of one of the values to the appropriate type

Eg - String s = "abc" + 123 will give abc123
   - Here, the integer was implicitly converted to a string

4. Strong typing
  - complete opposite of Weak typing
  - here, we have to explicitly convert the integer to string to make the output possible
