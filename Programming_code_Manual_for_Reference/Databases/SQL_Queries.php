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

 ?>
