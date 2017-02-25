<?php
//valid for video 120 - 122, 127-129

SELECT `username` , `password` FROM users where `id`=1

SELECT `firstname` , `surname` FROM users where `username`='alex' AND `password`='password'

UPDATE `users` SET `firstname`='Dale' where `id`=1

DELETE FROM `users` where `id`=1

INSERT INTO `users` VALUES('','alex','password','Alex','Pumpkin')

SELECT `firstname`, `surname` FROM `users` ORDER BY `id` DESC

//returns the data based on the matching condition between two tables and Null is printed for the Right table when data doesn't exists
SELECT `people`.`name`, `pets`.`pet` FROM `people` LEFT JOIN `pets` ON `people`.`id`=`pets`.`people_id`

//displays data (NULL for no match found) for all data which is matched
SELECT `people`.`name`, `pets`.`pet` FROM `people` RIGHT JOIN `pets` ON `people`.`id`=`pets`.`people_id`

//displays data only where matching condition is met
SELECT `people`.`name`, `pets`.`pet` FROM `people` JOIN `pets` ON `people`.`id`=`pets`.`people_id`
?>
