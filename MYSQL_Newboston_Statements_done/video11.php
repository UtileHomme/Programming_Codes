<?php
//valid for video 11-20

(video 11)
//using AND keyword
SELECT name,state,city FROM customers WHERE state='CA' AND city='Hollywood'

//using OR keyword
SELECT name,state,city FROM customers WHERE state='CA' OR city='Boston'

//OR and AND keyword combined
SELECT id,name,city FROM customers WHERE id=1 OR id=2 AND city='Raleigh'

//what we wanted
SELECT id,name,city FROM customers WHERE (id=1 OR id=2) AND city='Raleigh'

(video 12)
//choosing between different options
SELECT name, state FROM customers WHERE state IN('CA','NC','NY')

//not satisfying the condition given
SELECT name, state FROM customers WHERE state NOT IN('CA','NC','NY')

(video 13)

//everything after 'new' is returned
SELECT name FROM items WHERE name LIKE 'new%'

//containing keyword 'computer' at any place
SELECT name FROM items WHERE name LIKE '%computer%'

//starting with 'h' and ending with 'd' -- SQL is case-insensitive -> both H and h will be returned
SELECT city FROM customers WHERE city LIKE 'h%d'

(video 14)
//takes the characters into consideration - depending on number of dashes
SELECT name FROM items WHERE name LIKE '_ boxes of frogs'

(video 15)
//search anything which has the given 'regular expression'
SELECT name FROM items WHERE name REGEXP 'new'

//a '.' means any single character before the given word
SELECT name FROM items WHERE name REGEXP '.boxes'

//returns the results containing either the word on the left or on the right of '|' -> works like OR
SELECT name FROM items WHERE name REGEXP 'gold|car'

//searchs for all the options given in the '[]' along with other text outside
SELECT name FROM items WHERE name REGEXP '[12345] boxes of frogs'
SELECT name FROM items WHERE name REGEXP '[1-5] boxes of frogs'  //shortcut

//does the opposite -> uses '^' - Negation
SELECT name FROM items WHERE name REGEXP '[^12345] boxes of frogs'

(video 16)

//creating custom colums -> printing data in a certain way
//joins columns using characters
SELECT CONCAT(city,',',state) FROM customers

//gives the column a particular name
SELECT CONCAT(city,',',state) AS new_address FROM customers

//creating a custom column with another name
SELECT name,cost, cost-1 AS price FROM items

(video 17)

//changing to uppercase
SELECT name, UPPER(name) as NAMES FROM customers

//using numeric function
SELECT cost, SQRT(cost) FROM items

//finding average of numeric data
SELECT AVG(cost) FROM items

//finding sum
SELECT SUM(bids) FROM items

(video 18)

//counting the number of items
SELECT count(name) FROM items WHERE seller_id=6

//combining all aggregate functions
SELECT COUNT(*) AS item_count, MAX(cost) AS max, AVG(cost) AS avg FROM items
WHERE seller_id=12

(video 19)

//using GROUP BY
SELECT seller_id, COUNT(*) AS item_count FROM items GROUP BY seller_id

//using HAVING combined with GROUP BY
SELECT seller_id, COUNT(*) AS item_count FROM items GROUP BY seller_id
HAVING COUNT(*)>=3 ORDER BY item_count DESC

(video 20)

//using subqueries  * printing all the items having cost more than average cost
SELECT name, cost FROM items WHERE cost>(
SELECT AVG(cost)FROM items
) ORDER BY cost DESC

 ?>
