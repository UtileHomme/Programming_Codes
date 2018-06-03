<!-- What is PHP  -->

- It stands for PHP(Personal Home Page) Hypertext Preprocessor.
- It is a server side programming language
- It is used to create dynamic content on a website
- PHP is a case sensitive language (all variable names are case-sensitive but not the keywords).
- is a loosely typed language, .i.e., we do not have to tell which data type the variable is

- When a PHP page is accessed, the PHP code is read or parsed by the server the page resides on.
- The output from the PHP functions are returned as HTML code which can be read by the browser

<!-- What can PHP do -->

- It can generate dynamic page content
- It can create, open, read, write, delete and close files on the server
- can collect form data
- can send and receive cookies
- can add, delete and modify data in a database
- can be used to control user-access
- can encrypt data


<!-- How to open a server in php -->

php -S localhost:8000

<!-- What does Parsing in PHP mean -->

- It means processing and analysis of data in PHP in order to output data structures in a certain way.

<!-- Is PHP compiled or interpreted -->

- the PHP language is interpreted
- The binary (Zend Engine) that lets us interpret PHP is compiled

- The PHP compiler's job is to parse the PHP code and convert it into a form suitable for the runtime engine. It's tasks are as follows:
- Ignore comments
- Resolve variables, function names, and so forth
- Construct the abstract syntax tree of the program
- Write the bytecode

- If the script isn't changed, the compilation happens only the first time after which it is cached and reused.
- if modified, compilation step happens again.

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

Eg -

<?php
$x = 5;
$y = 10;

function myTest() {
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y; // outputs 15
?>

*** PHP stores all global variables inside an array called $GLOBALS [index].
- the "index" holds the name of the variable

Eg -

<?php
$x = 5;
$y = 10;

function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; // outputs 15
?>

<!-- What is global and local scope -->

- A variable declared outside a function has "global" scope and can be accessed outside a function

Eg -

<?php
$x = 5; // global scope

function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

- A variable declared within a function has "local" scope and can be accessed "inside" a function

Eg -

<?php
function myTest() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>

- We can have "local variables" with the same name in different functions

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

** include/require_once will check whether the file contents have been included beforehand. If yes , then don't include again

<!-- How to search for a substring in a string -->

-- use "preg_match" function

<!-- How to change the "case" of a string -->

-- use "strtolower" or "strtoupper" respectively

<!-- How to find position of a substring in a string -->

-- use "strpos(string_name, string_to_search, position_to_start_from)" function

<!-- How to replace part of a string if the position to replace from and no. of characters to replace is known -->

- use "substr_replace(string_name, string_we_want_to_replace_with,starting_position,no_of_characters)" function

<!-- How to replace a word when the word to replace with is known -->

- use "str_replace(find_the_substring_we_wish_replace, the_string_that_we_want_to_replace_the_found_string, the_string_in_which_the_changes_are_to_be_made)" function

** use "str_ireplace" when we are looking for case_insensitivity

<!-- What are timestamps  -->

- It is an integer value giving the number of seconds passed starting from Jan 1970

- use "time()" for getting the timestamp
- use "date('format', timestamp_variable)" for getting the timestamp in a nice format

<!-- How to increase or decrease time  -->

- use "strtotime" as the second argument of the date function

<!-- How to generate a random number -->

-- use the "rand" function

-- use the " getrandmax" function to get the max allowed limit of the numbers

-- to echo a number between 2 numbers , use rand(min limit, max limit)

<!-- How to display the current files name -->

-- use $_SERVER['SCRIPT_NAME'];

<!-- How to access the name of the server -->

-- use $_SERVER['HTTP_HOST']

** We need to use the "header" function before the content

This is how we do it:
header('Location: '.$redirect_page);

<!-- How to use "ob_start" to solve header problem -->

-- use "ob_start()" in the beginning php tag
-- put the html content
-- then again the php tags
-- in the end use "ob_end_flush" to flush the output and show it on the screen

** ob_start() stores the output inside a buffer
** ob_end_clean() is used to clean the output but not show it on the screen

<!-- How to capture the user IP's address in a non-conventional way -->

$_SERVER['REMOTE_ADDR']

//checks the INTERNET ip address
$_SERVER['HTTP_CLIENT_IP']

//checks for proxy
$_SERVER['HTTP_X_FORWARDED_FOR']

<!-- How to filter "html" tags inside a form-field -->

-- use "htmlentities" function
Eg- htmlentities($_GET['day']);

<!-- How are sessions stored and accessed in PHP -->

- Sessions are stored on the server
- We store some data inside a session on one php page
- We will have to run this page once to set the session

- this session value can be accessed in any other place by writing "session_start()"

This is how we set a session

session_start();
$_SESSION['username'] = 'Alex';

<!-- How to unset a session -->

unset($_SESSION['username']);

<!-- How to unset all sessions -->

session_destroy();

<!-- What is the "explode" function -->

-- the "explode" function is used for converting the "character" separated data into an array

<!-- What is the "implode" function -->

-- converts an array into an "character" separated data

Eg - $arr = Array ("A","E","I","O","U");

$str = implode("-", $arr);

<!-- How to check for browser type  -->

$_SERVER["HTTP_USER_AGENT"]

<!-- What is the use of "htmlspecialchars" -->

- There is a possibility that some content might have "HTML" tags attached to them
- To avoid storing HTML embedded code into a database, pass the data into "htmlspecialchars"
- Protects from XSS protection
- it will replace "<" with &lt

<!-- How to show the name of the files which we are uploading -->

$name = $_FILES['file']['name'];

<!-- How to get the size of the files being uploaded -->

$size = $_FILES['file']['size'];

<!-- How to get the format of the file being uploaded -->

$type = $_FILES['file']['type'];

<!-- How to find the temporary location of the uploaded file -->

$temp_name = $_FILES['file']['tmp_name'];
- this will contain the temporary file name of the file on the server
- it is a placeholder on the server until you process the file

<!-- This is how we store a file in a particular location -->

$location = '/home/scrabbler/Jatin/Programming Codes/PHP_Newboston_codes/uploads/';
if(move_uploaded_file($temp_name, $location.$name))
{
    echo 'Uploaded';
}
else
{
    echo 'There was an error';
}

<!-- How to extract the extension of a filename -->

//Will help in extracting the extension of the file name
$extension = strtolower(substr($name, strpos($name, '.')+1));

<!-- How to delete a file -->

unlink($file_name)

<!-- How to rename a file -->

//first argument is filename , second is the one to rename to
rename($filename, $rand.'.txt')

<!-- How to define constants -->

define(name, value, case-sensitivity)

<!-- How to find the no of elements in an array -->

$a = count(array_name);

<!-- How to create an "associative array" -->

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

<!-- How to return the filename of a currently executing script -->

- use "$_SERVER['PHP_SELF']"

<!-- How to return the IP address of the host server -->

- use "$_SERVER['SERVER_ADDR']"
- returns the IP address of the server the PHP code is running

<!-- How to return the name of the host server like www.youtube.com-->

- use "$_SERVER['SERVER_NAME']"

<!-- How to return the name of the information protocol like HTTP/1.1 -->

- use "$_SERVER['SERVER_PROTOCOL']"

<!-- How to return the kind of HTTP method used to access the page -->

- use "$_SERVER['REQUEST_METHOD']"

<!-- how to return the complete URL of the current page -->

- use "$_SERVER['HTTP_REFERER']"

<!-- how to return the IP address from where the user is viewing the current page -->

- use "$_SERVER['REMOTE_ADDR']"

<!-- how to return the Host name from where the user is viewing the current page -->

- use "$_SERVER['REMOTE_HOST']"

<!-- how to return the path of the current script -->

- use "$_SERVER['SCRIPT_NAME']"

<!-- Difference between "sanitizing" and "validating" -->

- Validating = Determine if the data is in proper form
- Sanitizing = Remove any illegal character from the data

<!-- How to sanitize a "string" -->

- this will remove all HTML tags

<?php
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
?>

<!-- How to validate an "integer" -->

<?php
$int = 0;

if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("Integer is valid");
} else {
    echo("Integer is not valid");
}
?>

<!-- How to validate an IP address -->

$ip = "127.0.0.1";

if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo("$ip is a valid IP address");
} else {
    echo("$ip is not a valid IP address");
}
?>

<!-- How to sanitize and validate an email address -->

<?php
$email = "john.doe@example.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo("$email is a valid email address");
} else {
    echo("$email is not a valid email address");
}
?>

<!-- How to sanitize and validate an URL -->

<?php
$url = "https://www.w3schools.com";

// Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
    echo("$url is a valid URL");
} else {
    echo("$url is not a valid URL");
}
?>

<!-- Differences between PHP 5.6 and 7 -->

1. New Zend Engine
- Zend is an open-source execution engine written in C that interprets the PHP language
- PHP 5.xx series used Zend Engine II that enhanced the functionality of the initial engine and added an object model and a significant performance enhancement to the language
- PHP 7 received a new version called PHP#NG(Next Generation)

2. Twice the speed
- significant performance improvement
- optimized memory usage
- not only the code will be executed faster but we will also need fewer servers to serve the amount of users

3. Facilitates Error Handling

4. 64-Bit Windows Systems Support
- PHP 5.xx series didn't provide support for 64-bit integer or large file support
- PHP 7 does

5. New Spaceship operator
- looks like "<=>"
- returns "0" if both operands are equal, "1" if the left is greater and "-1" if the right is greater
- also called three-way comparison operator

<!-- Implementation screenshot -->
https://imgur.com/a/3zZd4

6. Null Coalescing operator

- denoted by two question marks (??)
- used when we want to check if something exists and returns a default value, in case it doesn't
- returns the result of the first operand if it exists and is not null, and the second operand in any other cases

Eg -

<!-- $username = isset($_GET['user']) ? $_GET['user']: 'nobody'  -->
$username = $_GET['user'] ?? 'nobody';

7. Enables accurate type declarations
- we can now declare the type of value to be returned when declaring a function

Eg-

function foo(): array
{
    return [];
}

- allows for "int, float, string and bool"

8. Support of ASP tags "<% %>" tags has been removed

<!-- Why should one omit closing tags  -->

- for avoiding blanks and other characters at the end of the file when using "include" and "require"
- any character that is accidently added behind the closing tag would trigger an error when trying to modify header info

- the actual production servers on which we will be deploying our code do not always follow the latest PHP trends

- Inexplicable functionality loss
- say, we are implementing a kind of payment gateway and redirect user to a specific URL after successful confirmation by the payment processor
- If some kind of PHP error or warning or an excess line ending happens, the payment remains unprocessed and the user may still seemed unbilled

- We may get "Page loading cancelled" type of errors in Internet Explorer even in the most recent versions
- this is because the AJAX response/json include contains something that it shouldn't contain, because of excess line endings in some PHP files

- If we have some file downloads in the app, they can break too

- Many PHP frameworks require omission of the closing tag as a coding standard

<!-- Do we need a trailing semicolon just before closing the PHP tags  -->

- Not necessary, because the closing tag of the block of PHP code automatically implies a semi-colon

<!-- What does exit(0) and exit(1) mean -->

- exit(0) - success
- exit(1) - fail

<!-- Difference between functions and language constructs -->

- both behave the same way
- the difference lies in the way PHP engine interprets a language construct and a built-in function

- Any computer language is made up of basic elements and these elements are known by their respective language parsers
Eg - "if" is a basic element in PHP and the PHP parser is aware of it

- So, when the PHP file is going through the parser, if it sees an "if" , it knows there should be a left parenthesis next to it
- If not, the parser will through an error
- Here, we call "if" a language construct bcz PHP parser knows what is without further analyzing it

Eg - print(), isset(), empty(), require(), die(), include()

** Language constructs are relatively faster

** language constructs do not need parenthesis
- we need parenthesis for built-in functions

<!-- What is considered as "false" in boolean  -->

- the boolean FALSE itself
- the integer 0
- the float 0.0
- the empty string and the string "0"
- an array with zero elements
- an object with zero member variables
- the special type NULL

** everything else is considered as "TRUE"

<!-- Why do we use "HEREDOCs" and how -->

- we do not need to escape double quotes

$sql = <<<"SQL" (without quotes)
select *
from $tablename
where id in [$order_ids_list]
and product_name = "widgets"
SQL;

<!-- Difference between isset and empty -->

- "empty" checks whether a variable is set and it checks for null, "", 0 etc.
- "isset" just checks if it is set, it could be anything but null

** With empty , the following are considered empty
- "" (an empty string)
- 0 (0 as an integer)
- 0.0 (0 as a float)
- "0" (0 as a string)
- NULL
- FALSE
- array() (an empty array)

<!-- What happens in PDO -->

- The SQL statement that is passed to the "prepare" function is parsed and compiled by the db server
- By specifying parameters (either a "?" or a named parameter like :name), we are tellling the db engine where we want to filter on
- Then when we call the "execute" method, the prepared statement is combined with the parameter values we specify

- We are sending the actual SQL separately from the parameters to limit the risk of sending malicious data
- any data that is sent using a prepared statement is converted into a string

- Another benefit is that if we execute the same statement many times in the same session , it will only be parsed and compiled once, giving some speed gains

<!-- Difference between GET and POST -->

- The HTTP protocol defines GET-type requests as being idempotent
- this means that GET is used for viewing something without changing it while POST is used for changing something

Eg - A search page should use GET , while a form that changes your password should use POST

<!-- GET -->
- parameters remain in browser history because they are part of the URL
- can be bookmarked
- GET method should not be used when sending passwords or other sensitive information
- 7607 character max size

<!-- POST -->
- parameters are not saved in browser history
- can not be bookmarked
- POST method used when sending passwords or other sensitive information
- 8 MB max size for POST method

<!-- When to use "foreach" and when to use "for" -->

- If we just need to walk through all the elements of an object or array, use "foreach"

* Cases where we need to include "for" loop
- When we explicitly need to do things with the numeric index
- When we need to use previous or next elements from within an iteration
- When we need to change the counter during an iteration

<!-- What is the header function used for -->

- it is used for changing the page location
- it is used for setting the timezone
- it is used for setting the caching control

<!-- How to use the "header" function -->

1. allows you to send many messages to the browser,

Eg -

<?php

header("Location: http://kirupa.com");

?>

- This will send a new location to the browser and it will immediately redirect

2. allows us to control the content type that the browser will treat the document as:

<?php

header("Content-Type: text/css");

?>

3. can also force the browser to display the download prompt and have a recommended filename for the download

<?php

header("Content-Type: image/jpeg");
header("Content-Disposition: attachment; filename=file.jpg");
?>

4. can send specific errors to the browser using the header function.

<?php

header("HTTP/1.0 404 Not found");

?>

<!-- What is the use of "Content-Type" in headers -->

- it tells the browser what kind of file we are sending it
- if we say "text/html", it will try to display what we give to the webpage
- if we say "application/pdf", it'll try to display or download it as a PDF file

<!-- What is the reason for "headers already sent" error in php   -->

- whitespaces before <?php  or after ?>
- print , echo and other functions producing some output
- raw "html" sections prior to the "PHP" code

<!-- Typical HTTP response looks like this -->
HTTP/1.1 200 OK
Powered-By: PHP/5.3.7
Vary: Accept-Encoding
Content-Type: text/html; charset=utf-8

<html><head><title>PHP page output page</title></head>
<body><h1>Content</h1> <p>Some more output follows...</p>
    and <a href="/"> <img src=internal-icon-delayed> </a>

    - PHP scripts mainly generates HTML content, but it also passes a set of HTTP/CGI headers to the webserver

    - the page/output always follows the headers
    - PHP has to pass the headers to the webserver first
    - it can only do that once

    - When PHP receives the first output(print, echo, <html>), it will flush all the collected headers
    - Afterwards it will send all the output it wants.
    - But sending further HTTP headers is impossible then

    <!-- What is JSON and How to extract data from a JSON in php -->

    - JSON is not an array, an object or a data structure
    - JSON is a text-based serialization format

    - we can decode it using json_decode($json)

    Eg - How to access object elements

    <?php

    $json = '
    {
        "type": "donut",
        "name": "Cake"
    }';

    $yummy = json_decode($json);

    echo $yummy->type;
    ?>

    Eg- How to access array elements

    <?php
    $json = '
    [
        "Glazed",
        "Chocolate with Sprinkles",
        "Maple"
        ]';

        $toppings = json_decode($json);

        echo $toppings[1];

        ?>

        Eg- Accessing nested items

        <?php

        $json = '
        {
            "type": "donut",
            "name": "Cake",
            "toppings": [
                { "id": "5002", "type": "Glazed" },
                { "id": "5006", "type": "Chocolate with Sprinkles" },
                { "id": "5004", "type": "Maple" }
            ]
        }';

        $yummy = json_decode($json);

        echo $yummy->toppings[2]->id;

        ?>

        - When we pass "true" as the second argument to "json_decode", we get associative arrays

        <?php

        $json = '
        {
            "type": "donut",
            "name": "Cake",
            "toppings": [
                { "id": "5002", "type": "Glazed" },
                { "id": "5006", "type": "Chocolate with Sprinkles" },
                { "id": "5004", "type": "Maple" }
            ]
        }';

        $yummy = json_decode($json, true);

        echo $yummy['toppings'][2]['type']; //Maple

        ?>

        <!-- Difference between "==" and "===" -->

        - The operator "==" casts between two different types if they are different, while the "===" operator is a 'typesafe comparison'
        - This means it will only return "true" if both the operands have the same type and the same value

        Eg -
        <?php
        1 === 1: true
        1 == 1: true
        1 === "1": false // 1 is an integer, "1" is a string
        1 == "1": true // "1" gets casted to an integer, which is 1
        "foo" === "foo": true // both operands are strings and have the same value
        ?>

        <!-- Difference between "$a" and "$$a" in php -->

        "$a" represents a variable
        "$$a" represents a variable with the content of $a

        Eg -

        <?php
        $test = "hello world";
        $a = "test";
        echo $$a; //hello world
        ?>

        <!-- What is output buffering -->

        - Without output buffering, the HTML is sent to the browser in pieces as PHP processes through the script
        - With output buffering , the HTML is stored in a variable and sent to the browser as one piece at the end of the script

        Advantages of using output buffering
        - Turning on output buffering alone decreases the amount of time it takes to download and render our HTML because it's not sent to the browser in pieces as PHP processes the HTML
        - solves the "header already sent by (output)" error

        - it gives some degree of control over how the output generated by a particular PHP script is handled

        - According to HTTP standards, we cannot send headers to the browser after data has already been sent

        <!-- How output buferring works -->

        <?php

        ob_start();

        // content

        ob_end_flush();
        ?>

        - Here, rather than having PHP send output directly to the standard output device (the browser) as the script gets executed, we have chosen to define a special output buffer which
        stores all the output generated by the script during its lifetime
        - When this is done, the output of the script is never seen by the user

        - we use "ob_get_contents()" to extract the current contents of the output buffer to a PHP variable

        <!-- How to echo HTML in PHP -->

        <!-- Method 1 -->

        <?php
        if(condition)
        {
            ?>
            <!-- HTML here     -->
            <?php
        }
        ?>

        <!-- Method 2 -->

        <?php
        if(condtion)
        {
            echo "HTML here";
        }
        ?>

        <!-- Method 3 -->

        <?php
        echo '<input type="text" name="" value="">';

        OR

        echo "<input type=\"text\" name="" value="">"
        ?>

        <!-- Difference between PUT and POST -->

        <!-- PUT -->
        - PUT puts a file or resource at a specific URI and exactly at that URI
        - if there is already a file or resource at the URI, PUT replaces that file or resource
        - If there is no file or resource, PUT created one

        <!-- POST -->
        - sends data to a specific URI and expects the resource at that URI to handle the request
        - the webserver can at this point determine what to do with the data in the context of the specified resource
