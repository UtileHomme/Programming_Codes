<?php

require 'connect.php';

$query = $conn->query('SELECT * from users');
/*
$r = $query->fetch(PDO::FETCH_NUM);   //for fetching only the first one

echo '<pre>',print_r($r), '
</pre>';

echo '<br />';

$r = $query->fetch(PDO::FETCH_ASSOC);   //for fetching an associative array

echo '<pre>', print_r($r),  '</pre>';

echo '<br />';
*/
while($r = $query->fetch(PDO::FETCH_OBJ))   //for fetching as an object
{
    echo $r->firstname.'<br />';
}


 ?>
