<!-- http://php.net/manual/en/function.echo.php -->

<?php
echo "Hello World<br />";

echo "This spans
multiple lines. The newlines will be
output as well<br />";

echo "This spans \n multiple lines. The newlines will be\noutput as well.<br />";

echo "Escaping characters is done \"Like this\".<br />";

// You can use variables inside of an echo statement
$foo = "foobar";
$bar = "barbaz";

echo "foo is $foo<br />";

// You can also use arrays
$baz = array("value" => "foo");

echo "this is {$baz['value']}<br />";

// Using single quotes will print the variable name, not the value
echo 'foo is $foo<br />'; // foo is $foo

// If you are not using any other characters, you can just echo variables
echo $foo.'<br />';          // foobar
echo $foo,$bar.'<br />';     // foobarbarbaz

// Strings can either be passed individually as multiple arguments or
// concatenated together and passed as a single argument
echo 'This ', 'string ', 'was ', 'made ', 'with multiple parameters.', chr(10).'<br />';
echo 'This ' . 'string ' . 'was ' . 'made ' . 'with concatenation.' . "\n".'<br />';

//here doc syntax
echo <<<END
This uses the 'here doc' syntax to
output multiple lines of code.
END;

// Because echo does not behave like a function, the following code is invalid.

// ($some_var) ? echo 'true':echo 'false';    ---- won't work

// However, the following examples will work:
echo '<br />';
($some_var) ? print 'true' : print 'false'.'<br />';
// print is also a construct,
// it behaves like a function,
// it may be used in this context.

// this will work in the case of echo
echo $some_var ? 'true': 'false'.'<br />'; // changing the statement around


// NOTES

// The {} syntax is useful for printing non array variables as well, an example to illustrate:

$foo = "foobar";
$bar = "barbaz";

//Will produce the error: Undefined variable: $foo_
echo "$foo_$bar".'<br />';

//Will print the intended string: "foobar_barbaz"
echo "{$foo}_$bar".'<br />';


// <!-- Could even be worth getting into the habit of enclosing all variables in {} when writing echo strings, to be on the safe side. -->
?>
