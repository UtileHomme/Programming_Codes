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

<!-- How to use "foreach" loop -->

- it is used to loop through each key/value pair in an array

Eg -

<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}
?>

<!-- How to loop through an associative array -->

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>

<!-- How to sort an array in ascending order on the basis of values -->

<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
?>

** for descending order, use "rsort"

<!-- How to sort an associative array in ascending order on the basis of values -->

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
?>

<!-- How to sort an associative array in ascending order on the basis of keys -->

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
?>

<!-- How to sort an associative array in descending order on the basis of values -->

<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);
?>

**krsort for descending on the basis of keys


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

    <!-- How to create a random number -->

    <?php

    // echo $rand = rand();
    echo '<br />';

    $max = getrandmax();      //specifies max integer

    if(isset($_POST['roll']))
    {
        $rand = rand(1,6);      //min and max limit for arguments
        echo 'You rolled a '.$rand;
    }
    ?>

    <!-- How to redirect a user to any other page -->


    <!--won't work because output is being sent here-->
    <h1>Page</h1>

    <?php
    //header is used to redirect the user to another page
    //it cannot be used after output has been sent to another page

    //header();   -- wont Work
    $redirect_page = 'http://google.com';
    $redirect = true;

    if($redirect==true)
    {
        header('Location: '.$redirect_page);
    }
    ?>

    <!-- How to solve the problem above of not being able to send headers -->

    <?php
    ob_start();                           //the page output will be stored in an output buffer
    ?>
    <h1>Page</h1>
    This is my Page.
    <?php
    //header is used to redirect the user to another page
    //it cannot be used after output has been sent to another page

    //header();   -- wont Worker
    $redirect_page = 'http://google.com';
    $redirect = true;

    if($redirect==true)
    {
        header('Location: '.$redirect_page);
    }

    ob_end_flush();     //This flushes the content and gives the output stored in the output buffer

    //ob_end_clean   //cleans the output buffer but doesn't give any output -- used during redirection
    ?>

    <!-- How to get the user's IP address -->

    <?php

    //checks the INTERNET ip address
    $http_client_ip = $_SERVER['HTTP_CLIENT_IP'];

    //checks for proxy
    $http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];

    $remote_addr = $_SERVER['REMOTE_ADDR'];

    if(!empty($http_client_ip))
    {
        $ip_address = $http_client_ip;
    }
    else if (!empty($http_x_forwarded_for))
    {
        $ip_address = $http_x_forwarded_for;
    }
    else
    {
        $ip_address = $remote_addr;
    }

    echo $ip_address
    ?>

    <!-- How to use "GET" variables -->

    <?php
    //htmlentities ensures that no html code can be put in the form
    //valid for video 69 and 72

    if(isset($_GET['day']) && isset($_GET['date']) && isset($_GET['year']))
    {
        $day = htmlentities($_GET['day']);
        $date = htmlentities($_GET['date']);
        $year = htmlentities($_GET['year']);

        if(!empty($day) && !empty($date) &&!empty($year))
        {
            echo 'It is '.$day.' '.$date.' '.$year;
        }
        else {
            echo 'Fill in all fields';
        }
    }
    ?>

    <!-- How to use "POST" variables -->

    <?php

    //when typing something in a text box and submitting it or uploading files
    //we should use POST
    //sets the data directly in the form and does not send it to URL
    //great for passwords and long registration forms
    //there's a limit to the max chars in URL for GET

    $match='pass123';

    if(isset($_POST['password']))
    {
        $password = $_POST['password'];
        if(!empty($password))
        {
            if($password==$match)
            {
                echo 'This is correct';
            }
            else
            {
                echo 'This is incorrect';
            }
        }
        else
        {
            echo 'Please fill in the details';
        }
    }


    ?>

    <!-- This is how we store sessions in PHP -->

    <!-- Here we are setting the session -->

    <?php

    //sessions store info about the user that is currently visiting the website
    //sessions are stored on the server
    //useful for user login - to keep them logged in

    session_start();    //this is to be declared before doing anything using sessions

    $_SESSION['username'] = 'Alex';     //this will be available in all pages of the website
    ?>

    <!-- Here we are accessing a session here. We won't need to include a file just to access variables from that file. Sessions will suffice -->
    <?php

    session_start();      //we won't need to include the other php file because a session is active

    //echo $_SESSION['name'];

    if(isset($_SESSION['username']))
    {
        echo 'Welcome '.$_SESSION['username'];      //to make this run, we have to call the .php file once
    }
    else {
        echo 'Please log in';
    }
    ?>

    <!-- How to set a cookie and unset it -->

    <?php
    /*
    a cookie is a piece of data/file that is stores some info which is unique to the website / user is viewing.
    depending on the expiration time of the cookie , the info will be relayed from user's computer to website
    can be stored on the user's computer for later purposes
    session is closed as soon as browser is closed
    we can use cookies for years
    not good for sensitive data
    */

    // syntax

    setcookie(name, value, expire, path, domain, secure, httponly);

    //valid for video 75-76
    $time = time();

    //variable, value, time of expiration(in seconds)
    setcookie('username' , 'alex', $time+15);

    //this will unset the cookie
    setcookie('username' , 'alex', $time-1000);

*** the setcookie function must appear before the "html" tag

// How to check if "cookies" are enabled or not

<?php
if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
} else {
    echo "Cookies are disabled.";
}
?>

    /*
    we need to unset to log the user out -> done while clicking LOG OUT button
    */

    ?>

    <!-- How to access a cookie -->

    <?php

    echo $_COOKIE['username'];    //this will be displayed only for 1000 seconds

    ?>

    <!-- This is how we write data into a file -->

    <?php

    /*
    w - for writing
    r  - for reading
    a - appending
    */

    //name of the file, type of operation on file
    $handle = fopen('names.txt', 'w ');

    //handle, data
    fwrite($handle, 'Alex'."\n");      //write the data to file 'names.txt'
    fwrite($handle, 'Billy');

    //closes the connection with the file
    fclose($handle);
    ?>

    ** if we close the file after writing once, open it again, and try to write into it, the previous data will be overwritten

    <!-- How to read a data on a line by line basis -->

    <?php

    if(isset($_POST['name']))
    {
        $name = $_POST['name'];
        if(!empty($name))
        {
            $handle = fopen('names.txt', 'a');
            fwrite($handle,$name."\n");
            fclose($handle);

            echo 'Current names in file'.'<br />';
            //this is used for reading purposes
            $count = 1;
            $readin = file('names.txt');
            $readin_count = count($readin);

            foreach($readin as $fname)
            {
                echo trim($fname);
                if($count<$readin_count)
                {
                    echo ', ';
                }
                $count++;
            }
            echo '<br /><br /><br />';
            foreach($readin as $fname)
            {
                echo trim($fname).',  ';
            }
        }
        else
        {
            echo 'Please type a name';
        }
    }
    ?>

    <!-- How to read data from a file using "readfile" function -->

    <?php
    echo readfile("webdictionary.txt");
    ?>

    -- "webdictionary.txt" is the file name

    <!-- How to append data to a file -->

    <?php
    /*
    $handle = fopen('names1.txt', 'a');
    fwrite($handle,'Alex'."\n");
    fclose($handle);
    echo 'Written';
    */

    if(isset($_POST['name']))
    {
        $name = $_POST['name'];
        if(!empty($name))
        {
            $handle = fopen('names1.txt', 'a');
            fwrite($handle,$name."\n");
            fclose($handle);
        }
        else
        {
            echo 'Please type a name';
        }
    }

    ?>

    <!-- How to retrieve data from a file -- second way
    Also, contains the explode function code
-->

<?php
/*The file may have comma separated values
We wish to output data without the comma
*/
$filename = 'names1.txt';
$handle = fopen($filename, 'r');
$datain = fread($handle, filesize($filename));    //This will read the data depending on the number of Characters

//explode function will convert all character separated data in arrays

$names_array = explode(',' , $datain );
foreach($names_array as $name)
echo $name.'<br />';
echo '<br />';

//echo $names_array[1];
?>

<!-- How to use "implode" -->

<?php

$names_array = array('Alex', 'Billy', 'Dale');
$string = implode(', ', $names_array);

echo $string;

?>

<!-- How to read a single line from a file -->

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);
?>

<!-- How to check for "end of file" -->

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>

<!-- How to read a single character from a file -->

<?php
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($myfile)) {
  echo fgets($myfile) . "<br>";
}
fclose($myfile);
?>

<!-- How to convert date from one format to another -->

$Fromdate = date('Y-m-d', strtotime($Fromdate));

<!-- How to check for browser type  -->

$_SERVER["HTTP_USER_AGENT"]

<!-- How to loop through a directory and see the files that are present in it -->

<?php
// valid for video 82-83

$directory = '/home/scrabbler/Jatin/Programming Codes/PHP_Newboston_codes';

if($handle = opendir($directory.'/'))
{
    echo 'Looking inside '.$directory.': <br />';

    while($file = readdir($handle))       //file is in string format
    {
        if($file!='.' && $file!='..')
        {
            echo '<a href=" '.$directory. '/'.$file.' ">'.$file.'</a><br />';
        }
    }

}

?>

<!-- This is how we specifiy the form part for uploading files -->

<!-- enctype helps enable file upload-->
<form action="87. Uploading_Files.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" /><br /><br />
    <input type="submit" value="Submit" />
</form>


<!-- How to upload a file with limits on type and size -->

<?php
//valid for video 87-88, then 90-91, then 89

//shows the file name of the file the user has uploaded
$name = $_FILES['file']['name'];
//size is measured in bytes
$size = $_FILES['file']['size'];    //not required for uploading file
$type = $_FILES['file']['type'];    //not required for uploading file

//Will help in extracting the extension of the file name
$extension = strtolower(substr($name, strpos($name, '.')+1));
$max_size = 2097152;
//This file is stored in a temporary folder which an alias
echo $temp_name = $_FILES['file']['tmp_name'];


if(isset($name))
{
    if(!empty($name))
    {
        if(($extension=='jpg' || $extension=='jpeg') && ($type=='image/jpeg')  && $size<=$max_size)
        {
            //now we need to move the temporary file from temp location to its actual location
            $location = '/home/scrabbler/Jatin/Programming Codes/PHP_Newboston_codes/uploads/';
            if(move_uploaded_file($temp_name, $location.$name))
            {
                echo 'Uploaded';
            }
            else
            {
                echo 'There was an error';
            }
        }
        else {
            echo 'File must be jpeg / jpg and must be 2mb or less';
        }
    }
    else {
        echo 'Please choose a file';
    }
}
?>
<!-- enctype helps enable file upload-->
<form action="87. Uploading_Files.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="file" /><br /><br />
    <input type="submit" value="Submit" />
</form>

<!-- How to check if the file_exists or not -->

$filename = 'file.txt';
if(file_exists($filename))
//returns true if file exists else false and create a new one
{
    echo 'File already exists';
}
else
{
    $handle = fopen($filename, 'w');
    fwrite($handle, 'Nothing');
    fclose($handle);
}
?>

<!-- This is how we delete a file -->

//how to delete an uploaded file
$filename = 'video85(filedelete).txt';

if(unlink($filename))
{
    echo 'File <strong>'.$filename.'</strong> has been deleted.';
}
else
{
    echo 'File cannot be deleted';
}

<!-- How to rename a file -->

$filename = 'video85(filerename).txt';
$rand = rand(10000,99999);

//how to rename an uploaded file
if(rename($filename, $rand.'.txt'))
{
    echo 'File '.$filename.' has been renamed to <strong>'.$rand.'.txt</strong>';
}
else
{
    echo 'Error renaming';
}

<!-- How to read a password from a file and check it with the entered password -->

$filename = 'video96(hash).txt';
if(isset($_POST['user_password']) && !empty($_POST['user_password']))
{
    $user_password = sha1($_POST['user_password']);

    $handle = fopen($filename, 'r');
    $file_password = fread($handle, filesize($filename));
    $file_password = trim($file_password);

    if($user_password==$file_password)
    {
        echo 'Password ok';
    }
    else
    {
        echo 'Incorrect Password';
    }
}
else
{
    echo 'Please enter a password';
}
?>

<form action="video96.php" method="POST">
    Password: <input type="password" name="user_password" /><br /><br />
    <input type="submit" value="Submit" />
</form>

<!-- How to make a 2D - array in php when we have all the values and know the keys -->

$statuscounts[] = array
(
"0" => $newcount2,"1"=>$inprogresscount2, "2" =>$convertedcount2,"3"=>$droppedcount2,"4"=>$deferredcount2
);

<!-- How to throw an exception -->

function divide($num1, $num2)
{
    if($num2==0)
    {
        throw new Exception('Cannot divide by zero. ');
    }
    else
    {
        return ($num1/$num2);
    }
}

echo divide(10,0);
?>

<!-- //How to use try, throw and catch while throwing an exception -->

try
{
    if($age>18)
    {
        echo 'You are old enough';
    }
    else
    {
        throw new Exception('Not old enough');    //if something goes wrong, throw the message
    }
} catch (Exception $e)
{
    echo 'Error: '.$e->getMessage();
}

-- try is used to check whether the Exception occured or not
-- throw generates the exception message if the try part comes out true
-- catch takes action for the Exception thrown

<!-- How to define "constants" in PHP -->

<!-- defaults case sensitivity is "false", this means that only the defined "sensitivity" can be used  -->
<?php
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?>

<?php
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;
?>

** constants are global. They can be accessed inside any function

<!-- How to validate "names" in INPUT fields -->

$name = test_input($_POST["name"]);
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
    $nameErr = "Only letters and white space allowed";
}

<!-- How to validate "emails" in INPUT fields -->

$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $emailErr = "Invalid email format";
}

<!-- How to validate "URL" in INPUT fields -->

$website = test_input($_POST["website"]);
if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
    $websiteErr = "Invalid URL";
}

<!-- How to keep some values inside the form even after it has been submitted -->

Name: <input type="text" name="name" value="<?php echo $name;?>">

<!-- How to define Multi-dimensional arrays -->

$cars = array
(
array("Volvo",22,18),
array("BMW",15,13),
array("Saab",5,2),
array("Land Rover",17,15)
);

<!-- How to access Multi-dimensional arrays -->

<?php
for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}
?>

<!-- What is the format for dates in PHP -->

date(format,timestamp)

<!-- How to represent timestamp in the form of dates -->

<?php
echo "Today is " . date("Y/m/d") . "<br>";
echo "Today is " . date("Y.m.d") . "<br>";
echo "Today is " . date("Y-m-d") . "<br>";
echo "Today is " . date("l");
?>

- "l" is the day of the week

<?php
echo "The time is " . date("h:i:sa");
?>

- "h" is in 12 hour format
- "i" from 00 to 59
- "s" from 00 to 59
- "a" is lowercase a.m. or p.m.

<!-- This is how we set a default timezone -->

<?php
date_default_timezone_set("America/New_York");
echo "The time is " . date("h:i:sa");
?>

<!-- How to use "mktime" to generate a date based on parameters -->

mktime(hour,minute,second,month,day,year)

<?php
$d=mktime(11, 14, 54, 8, 12, 2014);
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>

<!-- How to use "strtotime" to generate a date -->

<?php
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
?>

<!-- How to generate time based on the string values -->

<?php
$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Saturday");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
?>

<?php
$startdate = strtotime("Saturday");
$enddate = strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
    echo date("M d", $startdate) . "<br>";
    $startdate = strtotime("+1 week", $startdate);
}
?>

<!-- Outputting time for today , yesterday and day before yesterday -->

<?php

$hour = 12;

$today              = strtotime($hour . ':00:00');
$yesterday          = strtotime('-1 day', $today);
$dayBeforeYesterday = strtotime('-1 day', $yesterday);

 ?>

 <!-- Outputing date and time after 7 days -->

<?php
 echo "Today is ".date('Y-m-d H:i:s');
echo "<br/>";
echo "After 7 days: ".date('Y-m-d H:i:s',strtotime('+7 day'));

 ?>

<!-- How to output days until a given day -->

<?php
$d1=strtotime("July 04");
$d2=ceil(($d1-time())/60/60/24);
echo "There are " . $d2 ." days until 4th of July.";
?>

<!-- How to  convert date into timestamp -->

<?php

$timestamp = strtotime('22-09-2008');

 ?>

<!-- or  -->

<?php

$a = strptime('22-09-2008', '%d-%m-%Y');
$timestamp = mktime(0, 0, 0, $a['tm_mon']+1, $a['tm_mday'], $a['tm_year']+1900);

 ?>


<!-- How to print "true" or "false" in text format -->

$bool = false;
echo $bool ? 'true' : 'false';

or...

echo $bool ? 'yes' : 'no';
echo $bool ? '1' : '0';

<!-- How to get integer value after division -->

- use round()
Eg - round(8/3) = 3

- use floor()
Eg - floor(8/3) = 2

In PHP 7, use intdiv()
Eg - intdiv(8, 3) = 2

<!-- How to convert integer value to string  -->

$var = 5;
$items = string($var);
$items = strval($var);

<!-- How to compare two floats  -->

$a = 0.17;
$b = 1 - 0.83; //0.17

if (abs(($a-$b)/$b) < 0.00001) {
  echo "same";
}

<!-- How to convert float into int -->

Eg - (int)$var or intval($var)

Eg - floor($var) or ceil($var)

Eg - round($var)

<!-- How to echo this particular array using "foreach" loop -->

Array
(
  [data] => Array
    (
      [0] => Array
        (
          [page_id] => 204725966262837
          [type] => WEBSITE
        )

      [1] => Array
        (
          [page_id] => 163703342377960
          [type] => COMMUNITY
        )
      )
)

foreach($results['data'] as $result) {
    echo $result['type'], '<br>';
}

<!-- How to add elements to an empty array -->

<?php
$cart = array();
$cart[] = 13;
$cart[] = 14;
// etc
?>

<?php
$cart = array();
array_push($cart, 13);
array_push($cart, 14);

// Or
$cart = array();
array_push($cart, 13, 14);
?>

<!-- How to add array elements from one array to another and then comma separate them -->

<?php
$locations = [];
foreach ($volunteer_panel_location as $plocations)
{
    $locations[] = $plocations->location;
}
echo implode(",",$locations);
?>

<!-- How to loop through the elements of the array defined below -->

<!-- Array (
  [0] => Array (
           [fid] => 14
           [list] => 1
           [data] => Array (
                       [alt] =>
                       [title] =>
                     )
           [uid] => 1
           [filename] => trucks_10785.jpg
           [filepath] => sites/default/files/trucks_10785.jpg
           [filemime] => image/jpeg
           [filesize] => 143648
           [status] => 1
           [timestamp] => 1291424171
           [nid] => 8
         )
  [1] => Array (
           [fid] => 19
           [list] => 1
           [data] => Array (
                       [alt] =>
                       [title] =>
                     )
           [uid] => 1
           [filename] => school.jpg
           [filepath] => sites/default/files/school.jpg
           [filemime] => image/jpeg
           [filesize] => 115355
           [status] => 1
           [timestamp] => 1292029563
           [nid] => 8
         )
  [2] => Array (
           [fid] => 20
           [list] => 1
           [data] => Array (
                       [alt] =>
                       [title] =>
                     )
           [uid] => 1
           [filename] => Life_is_wonderful_by_iNeedChemicalX.jpg
           [filepath] => sites/default/files/Life_is_wonderful_by_iNeedChemicalX_0.jpg
           [filemime] => image/jpeg
           [filesize] => 82580
           [status] => 1
           [timestamp] => 1292029572
           [nid] => 8
         )
  [3] => Array (
           [fid] => 21
           [list] => 1
           [data] => Array (
                       [alt] =>
                       [title] =>
                     )
           [uid] => 1
           [filename] => school_rural.jpg
           [filepath] => sites/default/files/school_rural.jpg
           [filemime] => image/jpeg
           [filesize] => 375088
           [status] => 1
           [timestamp] => 1292029582
           [nid] => 8
         )
) -->

<?php

foreach($array as $item) {
    echo $item['filename'];
    echo $item['filepath'];

    // to know what's in $item
    echo '<pre>'; var_dump($item);
}

 ?>

<!-- OR  -->

<?php

foreach($array as $i => $item) {
    echo $array[$i]['filename'];
    echo $array[$i]['filepath'];

    // $array[$i] is same as $item
}

?>

<!-- OR -->

<?php

for ($i = 0; $i < count($array); $i++) {
    echo $array[$i]['filename'];
    echo $array[$i]['filepath'];
}

 ?>

 <!-- How to extract a numerical value from a string -->

<?php

preg_match( '/\[#(\d+)\]/', '[#1234] Subject', $matches);
echo $matches[1]; // 1234

 ?>

 <!-- How to check if a string contains a particular word or not  -->

 <?php

 $a = 'How are you?';

 if (strpos($a, 'are') !== false) {
     echo 'true';
 }

  ?>

<!-- How to count the number of elements in an array -->

$a = array('jatin', 'Sharma','kritika');
$b = count($a);

<!-- How to count the number of elements in a multi-dimensional array -->

$families = array
(
"Test"=>array
(
  "test1",
  "test2",
  "test3"
)
);

echo count($families["Test"]);

<!-- How to print true or false for a boolean variable -->

<?php

$bool_val = (bool)false;

echo $bool_val ? 'true':'false';


 ?>

<!-- How to get the key and value of the first element of the array -->

Eg -

array(4 => 'apple', 7 => 'orange' , 13 => 'plum')

<?php

reset($array)   //returns apple

OR

array_values($array)[0];

OR

$array[key($array)];


key($array)    //returns 4

 ?>

<!-- How to remove double square brackets from a string -->

$string = str_replace(array('[[',']]'),' ', $string);
