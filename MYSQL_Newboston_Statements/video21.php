<?php
//valid for videos 21-30

(video 21)

//subqueries - seller_ids returned are 68,6,18)
SELECT name , MIN(cost) FROM items WHERE name LIKE '%boxes of frogs' AND seller_id IN(
SELECT seller_id FROM items WHERE name LIKE '%boxes of frogs'
)

(video 22)

//joining two tables to give complete result
SELECT customers.id, customers.name, items.name, items.cost FROM customers, items
WHERE customers.id = items.seller_id
GROUP BY customers.id

(video 23)

//renaming tables for join
SELECT i.seller_id, i.name, c.id FROM customers AS c, items AS i
WHERE i.seller_id=c.id

//using outer join
SELECT customers.name, items.name FROM customers LEFT OUTER JOIN items
ON customers.id = seller_id
//shows all customers and their corresponding items (even if item is not present give null)

//right outer join -> take all items from right and null for those on left
SELECT customers.name, items.name FROM customers RIGHT OUTER JOIN items
ON customers.id = seller_id

(video 24)
//using UNION --- columns for both queries should be same
SELECT name, cost, bids FROM items WHERE bids>190
UNION
SELECT name, cost, bids FROM items WHERE cost>1000

//when duplicates are allowed in UNION
SELECT name, cost, bids FROM items WHERE bids>190
UNION ALL
SELECT name, cost, bids FROM items WHERE cost>1000

(video 25)

//using alter command to add FULLTEXT functionality
ALTER TABLE items ADD FULLTEXT(name)

//searching for a particular text in a column
SELECT name,cost FROM items WHERE Match(name) Against('baby')

//different boolean modes for above query
SELECT name,cost FROM items WHERE Match(name) Against('+baby' IN BOOLEAN MODE)
//will only give results for included word 'baby'

SELECT name,cost FROM items WHERE Match(name) Against('+baby -coat' IN BOOLEAN MODE)
//will omit 'coat'

(video 26)

//Inserting data into a Table
INSERT into items VALUES('101','bacon strips','9.95','1','0')

(video 27)

//inserting multiple rows
INSERT into items(id,name,cost,seller_id,bids)
VALUES('104','beef chops','7.99','1','0'),
('105','jelly pockets','4.50','1','0'),
('106','sack of ham','9.95','1','0')

//inserting rows from other tables with same column structure
INSERT into items(id,name,cost,seller_id,bids)
SELECT id,name,cost,seller_id,bids FROM faketable
//might not be good way because duplicacy may occur

(video 28)

//Using UPDATE and DELETE commands
UPDATE items SET name='pudding hammock' WHERE id=106

DELETE FROM items WHERE id=104

(video 29)

//Creating a table
CREATE TABLE users1(
id int,
username varchar(30),
password varchar(20),
PRIMARY KEY(id)
)

(video 30)

//using NOT NULL and AUTO_INCREMENT
CREATE TABLE bacon(
id int NOT NULL AUTO_INCREMENT,
username varchar(30) NOT NULL,
password varchar(20) NOT NULL,
PRIMARY KEY(id)
)











 ?>
