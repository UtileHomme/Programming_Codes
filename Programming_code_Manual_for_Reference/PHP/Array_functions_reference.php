<!-- How to change the "case" of the keys in an associative array -->

<?php

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
var_dump(array_change_key_case($age, CASE_UPPER));

// For lowercase, use "CASE_LOWER"
 ?>

 <!-- How to get particular "index" values (works for Multi-dimensional only)  -->

<!-- array_column(array,column_key,index_key); -->

<?php

$a = array(
array(
'id' => 5698,
'first_name' => 'Peter',
'last_name' => 'Griffin',
),
array(
'id' => 4767,
'first_name' => 'Ben',
'last_name' => 'Smith',
),
array(
'id' => 3809,
'first_name' => 'Joe',
'last_name' => 'Doe',
)
);

$last_names = array_column($a, 'last_name');
$last_id_names = array_column($a, 'last_name','id');
var_dump($last_names);
var_dump($last_id_names);
 ?>

<!-- How to combine array key values with the actual values -->

- use "array_combine(keys, values)";
- creates an array by using the elements from one "keys" array and one "values" array
- both the arrays have equal number of elements

<?php

$fname = array("Peter", "Ben", "Joe");
$age = array("35","37","43");

$c = array_combine($fname, $age);
var_dump($c);

 ?>

<!-- How to count the number of times all values occur in the array -->

- use "array_count_values($array)"
- returns an associative array, where the keys are the original array values and the values are the number of occurrences

<?php
$a=array("A","Cat","Dog","A","Dog");
print_r(array_count_values($a));
?>

<!-- How to compare the values of two different arrays -->

- use the "array_diff()" function
- Returns an array containing the entries from array1 that are not present in any of the other arrays

<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");

$result=array_diff($a1,$a2);
print_r($result);  //Array ( [d] => yellow )
?>
