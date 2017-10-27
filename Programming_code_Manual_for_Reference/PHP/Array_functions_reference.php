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
