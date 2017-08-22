<!-- What is PHP  -->

- It stands for PHP(Personal Home Page) Hypertext Preprocessor.
- It is a server side programming language
- It is used to create dynamic content on a website
- PHP is a case sensitive language.

- When a PHP page is accessed, the PHP code is read or parsed by the server the page resides on.
- The output from the PHP functions are returned as HTML code which can be read by the browser

<!-- What does Parsing in PHP mean -->

- It means processing and analysis of data in PHP in order to output data structures in a certain way.

<!-- What is php.ini  -->

- It is a PHP configuration file
- We have to restart the server after making any changes to the php.ini file

<!-- How to use 'echo' and 'print' statement -->

<!-- This is a way of putting HTML inside php -->
echo "<strong>Hello world</strong>";

print ('<strong>Hello!</strong>');

<!-- How to put PHP inside HTML -->

<input type="text" value="<?php echo $text; ?>"  />
<!-- assuming "$text" has some value -->

<!-- How to display errors while developing -->

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

<!-- This is how you display variables in echo  -->

echo 'The date is <strong>'.$day.' '.$date.' '.$year.'</strong>';
echo '<br />';

echo "The date is $day $date $year";

- By default, "/" will give a "float" result
- To get an integer result use this:

echo $result1 = intval($result).'<br />';

<!-- Difference between 'echo' and 'print' -->

- ECHO
- can be used with or without parenthesis
- can pass multiple strings separated as ','
- doesn't return a value

echo $name, $profile, age ;   //will work

- PRINT
- can be used with or without parenthesis
- can't pass multiple arguments
- always returns "1"

print $name , $profile , $age, " years old"; // will return an error

<!-- What do var_dump and print_r do -->

VAR_DUMP

- prints out the detailed dump of a variable
- includes its type and the type of any sub-items(like array or object)
- also gives the number of items in that variable

PRINT_R

- prints a variable in a more human-readable form
- strings are not quoted, type information is omitted, array sizes are not given etc.

Eg - $values = array(0, 0.0, 'false');

- print_r will consider '0', '0.0','false' as same

Array
(
[0] => 0
[1] => 0
[2] =>
[3] =>
)

<!-- How to write HTML in PHP -->

<?php
echo "<table>";
echo "<tr>";
echo "<td>Name</td>";
echo "<td>".$name."</td>";
echo "</tr>";
echo "</table>";
?>

<!-- How to write PHP in HTML -->

<?php /*Do some PHP calculation or something*/ ?>
<table>
  <tr>
    <td>Name</td>
    <td><?php echo $name;?></td>
  </tr>
</table>

<!-- How to print a variable by putting it in { } braces -->

$variable = 'hack';

// now I want to append 'ed' to $variable:

echo "my name is {$variable}";   // prints my name is hack

echo "my name is {$variable}ed"; // prints my name is hacked

<!-- Another way -->

$money=10;

print "you have earned ${$money}.00"; //would now output 'you have earned $10.00'

<!-- What is the difference between "==" and "===" -->

- The operator "==" casts between two different types if they are different
- even if they are of the different type but signify same value, it will return true

- The operator "===" performs a 'typesafe' comparison
- This means that it will only be true if both the operands have the same type and the same value

Eg -
a. 1 === 1;   // true
b. 1 == 1;    //true
c. 1 === "1"   //false -- because one of them is "int" other is "string"
d. 1 == "1"    //true  -- the "string" gets cast to int. 1

<!-- What is the difference between "$a" and "$$a" -->

"$a" represents a variable

"$$a" represents a variable with the content of "$a". Also called, variable variable

Eg - $test = 'hello world';
$a = "test";
echo $$a;     // $(test)  --> hello world

<!-- What is the difference between "<?php ?>" and "<? ?>"  -->

<?php ?>  = safe open and close tag variation

<? ?> = short-open tag
- is not always available
- can be confused with "xml" version

**** $_SERVER['REMOTE_ADDR']; returns the server IP address

*** use "global $variable_name" inside the function to use the global variable

<!-- How to use "str_word_count" for counting letters in a string -->

 str_word_count($s, 'another argument for the way the data is returned', 'argument for an special characters to be considered');

<!-- How to shuffle the letters of a string -->

-- use "str_shuffle($s)" for this purpose

<!-- How to reverse the letters of a string -->

-- use "strrev($s)"

<!-- How to capture a part of the string -->

- use "substr" function
- format for "substr" = substr(string, start_position, no_of_characters);

<!-- How to get the string length of the string -->

- use "strlen" function

<!-- How to get the difference between 2 strings in the form of a "percentage" -->

- use "similar_text($string1, $string2, $result)" function

<!-- How to remove spaces from both sides of a string -->

- use "trim" function with the variable inside it
- use "rtrim" for right space removal and "ltrim" for left space removal

<!-- How to add elements to an array -->

$food = array('Pasta', 'Salad', 'Salad');

<!-- What are associative arrays and how do we define them -->

//associative arrays help rename the index to our own choice

$food = array('Pasta'=>300, 'Pizza'=>1000, 'Salad'=>150, 'Vegetable'=>50);

<!-- What are Multi-dimensional arrays and how do we define them -->

$food = array('Healthy'=>
                                      array('Salad', 'Vegetables', 'Pasta'),
                      'Unhealthy'=>
                                      array('Pizza', 'Ice cream') );

//This is how it looks

                        0                1              2
Healthy       |  Salad  | Vegetables | Pasta
Unhealty     |  Pizaa  |  Ice Cream


<!-- How to traverse through a Multi-dimensional array -->

$food = array('Healthy'=>
                                      array('Salad', 'Vegetables', 'Pasta'),
                      'Unhealthy'=>
                                      array('Pizza', 'Ice cream') );

foreach($food as $element => $inner_array)
{
  echo '<br />';
  echo '<strong>'.$element.'</strong><br />';
  foreach($inner_array as $item)
  {
    echo $item.'<br />';
  }
}

- "$element" gives the index
- "$inner_array" gives the value at that index

<!-- Difference between include and require -->

- Both are used for including code from another page
- code that might be wanted in many pages - this is to avoid DRY

- include will work and "continue" reloading the page even if the "mentioned" file is not found
- require will "kill" the page if the mentioned file is not found

//This is how both are declared
include 'video42(header.inc).php';
require 'video42(header.inc).php

<!-- How to search for a substring in a string -->

-- use "preg_match" function

<!-- How to change the "case" of a string -->

-- use "strtolower" or "strtoupper" respectively

<!-- How to find position of a substring in a string -->

-- use "strpos(string_name, string_to_search, position_to_start_from)" function

<!-- How to replace part of a string if the position to replace from and no. of characters to replace is known -->

- use "substr_replace(string_name, string_we_want_to_replace_with,starting_position,no_of_characters)" function
