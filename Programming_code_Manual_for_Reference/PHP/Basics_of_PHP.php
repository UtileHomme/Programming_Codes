<!-- What is PHP  -->

- It stands for PHP(Personal Home Page) Hypertext Preprocessor.
- It is a server side programming language
- It is used to create dynamic content on a website

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
