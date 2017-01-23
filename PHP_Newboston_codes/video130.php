<?php
//valid for video 130-131

//refer to 'names' table for this

//Return all names have surname as garrett
SELECT `name` FROM `names` WHERE `name` LIKE '%garrett'

//Returns the names not having 'g' inside it
SELECT `name` FROM `names` WHERE `name` NOT LIKE '%g%'




 ?>
