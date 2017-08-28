<!-- This is how the "while" loop works in PHP -->

<?php

$counter = 1;

while($counter<=10)
{
  echo $counter.' Hello<br />';
  $counter++;
}

?>

<!-- This is how a "do while" loop works in PHP -->

<?php

$counter = 1;

//do while loop will always run the block
do
{
  echo 'This will ALWAYS show once. <br />';
  $counter++;
} while ($counter <= 10);

?>

<!-- This is how a "for loop" works in PHP -->

<?php

for($count=10; $count>=1; $count--)
{
  echo $count.'<br />';
}
?>

<!-- This is how a "switch statement" works in PHP -->

<?php

$day = 'Saturday';

switch($day)
{
  case 'Saturday':
  case 'Sunday':
  echo 'It is a weekend.';
  break;
  default: echo 'Not a wekend';
  break;
}

?>

<!-- This is how we define and call a "function" in PHP -->

<?php

function MyName()
{
  echo 'Alex';
}

echo 'My name is ';
MyName();

?>

<!-- This is how we pass "arguments" into a function in PHP -->

<?php

$number1 = 10;
$number2 = 5;

function add($number1, $number2)
{
  return $number1 + $number2;
}

echo $sum = add($number1,$number2);
echo '<br />';

?>

<!-- This is how we return a value from a function so that it can be used elsewhere -->

<?php

function addS($number1, $number2)
{
  $result = $number1 + $number2;
  return $result;
}

function divide($number1, $number2)
{
  $result = $number1 / $number2;
  return $result;
}

$sum = divide(addS(10,10), addS(5,5));
echo $sum;

?>

<!-- This is how we use a "global" variable inside a function  -->

<?php

//returns the user ip address;
$user_ip = $_SERVER['REMOTE_ADDR'];

function echo_ip()
{
  global $user_ip;
  //$user_ip is not in scope of the function so needs to be globalized
  $string = 'Your IP address is '.$user_ip;
  echo $string;
}

echo_ip();

?>

<!-- This is how we count the number of letters in a string -->

<?php

//also contains some part of video 35

$string = 'This is an example string.';

echo '$string = This is an example string.;<br />';
echo '$str_word_count = str_word_count($string)<br />';    //full stop is not included
echo '<br />';
echo 'Answer to above '.$str_word_count = str_word_count($string).'<br />';    //full stop is not included


echo '$str_word_count1 = str_word_count($string, 0)<br />';
echo '<br />';
echo 'Answer to above '.$str_word_count1 = str_word_count($string, 0).'<br />';  //same as above -> returns integer value

echo '<br />';
echo '$str_word_count2 = str_word_count($string, 1)<br />';
echo '<br />';
echo 'Answer to above '.$str_word_count2 = str_word_count($string, 1).'<br />';     //returns an Array

echo '<br />';
echo 'print_r($str_word_count2)<br />';
echo '<br />';
echo 'Answer to above <br /><br />';
print_r($str_word_count2);    //returns the array with corresponding index of each word
echo '<br />';

$str_word_count3 = str_word_count($string, 2);
echo '<br />';
echo '$str_word_count3 = str_word_count($string, 2)<br />
var_dump($str_word_count3);<br />';
echo '<br />';
echo 'Answer to above <br /><br />';
var_dump($str_word_count3);   //returns an array giving the starting position of each word

$string2 = 'This is an example string & this is a tutorial.';
echo '$string2 = This is an example string & this is a tutorial.;<br />';
echo '<br />'.
$str_word_count5 = str_word_count($string2, 1,'&.');
echo '<br />';
echo '$string2 = This is an example string & this is a tutorial.
$str_word_count5 = str_word_count($string2, 1,&.)<br />
var_dump($str_word_count5);<br />';
echo '<br />';
echo 'Answer to above <br /><br />';
var_dump($str_word_count5);
?>

<!-- This is how we shuffle the string letters -->

echo $string_shuffled = str_shuffle($string);

-- use "str_shuffle" for this purpose

<!-- How to reverse a string  -->

echo $str_reversed = strrev($string);

-- use "strrev($s)"

<!-- How to capture a part of the string -->

$half = substr($string_shuffled, 2 , 5);      //returns the sub string from position

- format for "substr" = substr(string, start_position, no_of_characters);

<!-- How to get the length of a string -->

$length = strlen(string_name);

<!-- How to check how different two string are by getting the "percentage" as a value -->

similar_text($string1, $string2, $result);

- the value will be stored in the "$result" variable
- simply echo it

<!-- How to remove spaces from both sides of a string -->

$string_trimmed = trim($string);

<!-- How to add slashes before any special chars -->

$string1 = 'This is a <img scr="image.jpg" /> string ';

echo $string_slashes = htmlentities(addslashes($string1));
echo $string_strip = stripslashes(($string_slashes));

- use "addslashes" function to add the slashes so that everything is treated as an html
- use "stripslashes" function if we want to convert an "html" to normal string

<!-- How to use "preg_match" for finding whether a substring exists in a string or not -->

if(preg_match('/is/', $string))       //Search for 'is' in the string
{
  echo 'Match found';
}
else
{
    echo 'No match found';
}

<!-- How to convert lowercase to uppercase and vice versa -->

echo $string_lower = strtolower($string);
echo $string_upper = strtoupper($string);

<!-- How to find position of a substring in a string -->

-- use "strpos(string_name, string_to_search, position_to_start_from)" function

<!-- How to find the multiple positions where that substring has occurred -->

$offset = 0;
$find = ' is  ';
$find_length = strlen($find);

$string = 'This is a string, and it is an example';
echo strpos($string, $find);     //third argument is offset -> from where to start checking
echo '<br />';

//we'll loop through the string by finding the string , going forward the find_length value until the next occurrenc eis found
while($string_pos = strpos($string,$find,$offset))
{
  echo '<strong>'.$find.'</strong> found at '.$string_pos.'<br />';
  $offset = $string_pos + $find_length;
}

<!-- How to replace a string part with another string depending on position and number of characters to replace -->

$string = 'This part do not search. This part search';

echo $string_new = substr_replace($string, 'alex', 29, 4);
//29 specifies the position we want to start replacing; 4 specifies the number of characters to replace
// alex is the string we want to replace

- use "substr_replace(string_name, string_we_want_to_replace_with,starting_position,no_of_characters)" function

<!-- How to replace a word when the word to replace with is known -->

$find = array('is', 'string', 'example');
$replace = array('IS', 'STRING', ' ');

$string = 'This is a string, and is an example';

//the function will look for all the strings in the array
echo $new_string = str_replace($find, $replace, $string);

str_replace(find_the_substring_we_wish_replace, the_string_that_we_want_to_replace_the_found_string, the_string_in_which_the_changes_are_to_be_made)

<!-- This is how we create a word censoring program in BASIC PHP -->
$find = array('alex', 'billy', 'dale');
$replace = array('a**x', 'bil', ' ');

if(isset($_POST['user_input']) && !empty($_POST['user_input']))
{
  $user_input = $_POST['user_input'];
//  $user_input_lc = strtolower($user_input);

//str_ireplace is case insensitive
  $user_input_new = str_ireplace($find, $replace, $user_input);

  echo $user_input_new;
}
 ?>

 <hr />
 <form action="video52.php" method="POST">
   <textarea name="user_input" rows="6" cols="30"></textarea><? php echo $user_input ?><br /><br />
   <input type="submit" value="submit" />
 </form>

<!-- This is how we check for a GET variable in PHP -->

if(isset($_POST['user_input']) && !empty($_POST['user_input']))
{
  $user_input = $_POST['user_input'];
//  $user_input_lc = strtolower($user_input);

//str_ireplace is case insensitive
  $user_input_new = str_ireplace($find, $replace, $user_input);

  echo $user_input_new;

  <!-- This is how we create a "Find and Replace" Application in PHP -->

  $offset = 0;
  if(isset($_POST['text']) && isset($_POST['searchfor']) && isset($_POST['replacewith']))
  {
    $text = $_POST['text'];
    $searchfor = $_POST['searchfor'];
    $replacewith = $_POST['replacewith'];

  //search length is the length of the string we are searching for
    $search_length = strlen($searchfor);
    echo '<br />';


    if(!empty($text) && !empty($replacewith) && !empty($searchfor) )
    {
       //find the position of the first occurrence of that substring
       //offset is the place we need to start the search from
      while($strpos = strpos($text, $searchfor, $offset))
      {
        $strpos.'<br />';

       //increment the offset so that it starts from a position after the substring
        $offset = $strpos + $search_length;
        $text = substr_replace($text, $replacewith, $strpos, $search_length);
      }
      echo $text;
    }
    else
    {
      echo 'Please fill in all fields';
    }
  }

<!-- This is how retrieve the current time -->

$time = time();
$actual_time = date('H:i:s', $time);

- "H:i:s" displays Hour in numbers, minutes in numbers and seconds in numbers
- "D M Y" displays Date in String, Month in String, Year in Numbers

<!-- This is how we retrieve the date and time together -->

$time = time();

$time_now = date('d M Y @ H:i:s a', $time);

<!-- How to reduce or increase the time by seconds -->

$time_modified = date('d M Y @ H:i:s', $time-60);

OR

echo $time_modified1= date('d M Y @ H:i:s', strtotime('-1 week'));
//+1 year or week or +1 week 2 hours 30 seconds
