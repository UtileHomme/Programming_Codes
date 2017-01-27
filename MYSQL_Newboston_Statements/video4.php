<?php
//valid for videos 4-10

// displays all the databases for the current server
SHOW DATABASES

//displays all the tables for the current database
SHOW TABLES

//displays the names of the columns and the information associated with each column for that table
SHOW COLUMNS FROM customers

(video 5)
SELECT city FROM customers

(video 6)
//returning multiple colums
SELECT name,zip FROM customers

(video 7)

//returns distinct data
SELECT DISTINCT state FROM customers

//returns limited rows
SELECT id,name FROM customers LIMIT 5

//starts from 5th row (not included) and goes on to print next 10 rows
SELECT id,name FROM customers LIMIT 5,10

(video 8)
//fully qualified names
SELECT customers.address FROM customers

//sorting
SELECT name FROM customers ORDER BY name

//order by first criteria then by second after the first has been implemented
SELECT state,city,name FROM customers ORDER BY state,name
//for every same state, the name will be in alphabetical order

(video 9)
//sort information in desc or asc
SELECT name, id FROM customers ORDER BY id DESC
//use LIMIT to get highest or lowest

(video 10)
//using where condition
SELECT id, name FROM customers WHERE id=54

SELECT id, name FROM customers WHERE id !=54

SELECT id, name FROM customers WHERE id < 8

SELECT id, name FROM customers WHERE id <= 8

SELECT id, name FROM customers WHERE id BETWEEN 25 AND 30

SELECT id, name FROM customers WHERE state='CA'
 ?>
