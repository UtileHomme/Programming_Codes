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
