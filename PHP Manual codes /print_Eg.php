<!-- http://php.net/manual/en/function.print.php -->

<?php
print("Hello World\n");

print "print() also works without parentheses.\n";

print "This spans
multiple lines. The newlines will be
output as well\n";

print "This spans\nmultiple lines. The newlines will be\noutput as well.";
echo "\n";
print "escaping characters is done \"Like this\".";

// You can use variables inside a print statement
$foo = "foobar";
$bar = "barbaz";

print "foo is $foo"; // foo is foobar

// You can also use arrays
$bar = array("value" => "foo");

print "this is {$bar['value']} !"; // this is foo !

// Using single quotes will print the variable name, not the value
print 'foo is $foo'; // foo is $foo

// If you are not using any other characters, you can just print variables
print $foo;          // foobar

print <<<END
This uses the "here document" syntax to output
multiple lines with $variable interpolation. Note
that the here document terminator must appear on a
line with just a semicolon no extra whitespace!
END;
?>

<!-- Be careful when using print. Since print is a language construct and not a function, the parentheses around the argument is not required.
In fact, using parentheses can cause confusion with the syntax of a function and SHOULD be omited.

Most would expect the following behavior: -->
<?php
    if (print("foo") && print("bar")) {
        // "foo" and "bar" had been printed
    }
?>

<!-- But since the parenthesis around the argument are not required, they are interpretet as part of the argument.
This means that the argument of the first print is

    ("foo") && print("bar")

and the argument of the second print is just

    ("bar")

For the expected behavior of the first example, you need to write:  -->
<?php
    if ((print "foo") && (print "bar")) {
        // "foo" and "bar" had been printed
    }
?>
