<?php

// How to display all the databases in the server
SHOW DATABASES

// How to display all tables in a database
SHOW TABLES

//How to display the names of the columns and the information associated with each column for that table
SHOW COLUMNS FROM customers

// How to write a basic "select" query
SELECT city FROM customers

// How to select multiple columns
SELECT name,zip FROM customers

// How to select all columns
SELECT * FROM customers

// How to return distinct data
SELECT DISTINCT state FROM customers

//How to return limited rows
SELECT id,name FROM customers LIMIT 5

// How to start from a particular position and print some data from there on

//starts from 5th row (not included) and goes on to print next 10 rows
SELECT id,name FROM customers LIMIT 5,10

// How to select fully qualified names
SELECT customers.address FROM customers

//How to sort the data by a particular column

SELECT name FROM customers ORDER BY name

OR

//order by first criteria then by second after the first has been implemented
SELECT state,city,name FROM customers ORDER BY state,name
//for every same state, the name will be in alphabetical order

// How to sort by "ascending" or "descending"

//sort information in desc or asc
SELECT name, id FROM customers ORDER BY id DESC
//use LIMIT to get highest or lowest

// How to select particular column values using "where" clause
SELECT `username` , `password` FROM users where `id`=1

SELECT `firstname` , `surname` FROM users where `username`='alex' AND `password`='password'

//How to update a particular row using "where" clause
UPDATE `users` SET `firstname`='Dale' where `id`=1

//How to delete a particular row using "where" clause
DELETE FROM `users` where `id`=1

// How to insert into a particular table some row
INSERT INTO `users` VALUES('','alex','password','Alex','Pumpkin')

//How to arrange records in a particular order
SELECT `firstname`, `surname` FROM `users` ORDER BY `id` DESC

// How to use JOINS in SQL

//returns the data based on the matching condition between two tables and Null is printed for the Right table when data doesn't exists
SELECT `people`.`name`, `pets`.`pet` FROM `people` LEFT JOIN `pets` ON `people`.`id`=`pets`.`people_id`

//displays data (NULL for no match found) for all data which is matched
SELECT `people`.`name`, `pets`.`pet` FROM `people` RIGHT JOIN `pets` ON `people`.`id`=`pets`.`people_id`

//displays data only where matching condition is met
SELECT `people`.`name`, `pets`.`pet` FROM `people` JOIN `pets` ON `people`.`id`=`pets`.`people_id`

// How to return data using "LIKE" and "NOT LIKE"

//Return all names have surname as garrett
SELECT `name` FROM `names` WHERE `name` LIKE '%garrett'

//Returns the names not having 'g' inside it
SELECT `name` FROM `names` WHERE `name` NOT LIKE '%g%'

// How to select distinct data from a table

//return distinct names
SELECT DISTINCT `surname` FROM `peoples`
SELECT DISTINCT `firstname`, `surname` FROM `peoples`

 ?>
