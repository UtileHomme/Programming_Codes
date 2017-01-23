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
