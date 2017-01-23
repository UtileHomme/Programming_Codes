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
