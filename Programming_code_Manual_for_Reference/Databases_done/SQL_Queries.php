<?php

// How to display all the databases in the server
SHOW DATABASES

// How to display all tables in a database
SHOW TABLES

//How to display the names of the columns and the information associated with each column for that table
SHOW COLUMNS FROM customers

//How to create a database
CREATE DATABASE testDB;

// How to drop a database
DROP DATABASE testDB;

// How to create a new table
CREATE TABLE Persons (
  PersonID int,
  LastName varchar(255),
  FirstName varchar(255),
  Address varchar(255),
  City varchar(255)
);

// How to drop a table (along with the data in it)
DROP TABLE Shippers;

// How to drop only the data but retain the table in it
TRUNCATE TABLE table_name;

// What is the use of "ALTER TABLE" command
- it is used to add, delete or modify columns in an existing table
- is used to add or drop various constraints on an existing table

// How to add a column in a table

// syntax
ALTER TABLE table_name
ADD column_name datatype;

Eg -
ALTER TABLE Persons
ADD DateOfBirth date;

// How to drop a column
ALTER TABLE table_name
DROP COLUMN column_name;

Eg-
ALTER TABLE Persons
DROP COLUMN DateOfBirth;

// How to modify a column
Eg-
ALTER TABLE Persons
ALTER COLUMN DateOfBirth year;

// What are constraints in a table
- can be specified when the table is created or modified with "ALTER TABLE" statement

//types of constraints

NOT NULL - Ensures that a column cannot have a NULL value
UNIQUE - Ensures that all values in a column are different
PRIMARY KEY - A combination of a NOT NULL and UNIQUE. Uniquely identifies each row in a table
FOREIGN KEY - Uniquely identifies a row/record in another table
CHECK - Ensures that all values in a column satisfies a specific condition
DEFAULT - Sets a default value for a column when no value is specified
INDEX - Used to create and retrieve data from the database very quickly

// How to put "NOT NULL" constraint on a column

CREATE TABLE Persons (
  ID int NOT NULL,
  LastName varchar(255) NOT NULL,
  FirstName varchar(255) NOT NULL,
  Age int
);

// What is a UNIQUE constraint
- ensures that the column has distinct values
- we can have only one "PRIMARY KEY" but many "UNIQUE" columns in a table

CREATE TABLE Persons (
  ID int NOT NULL,
  LastName varchar(255) NOT NULL,
  FirstName varchar(255),
  Age int,
  UNIQUE (ID)
);

//using ALTER
ALTER TABLE Persons
ADD CONSTRAINT UC_Person UNIQUE (ID,LastName);

//Dropping a "UNIQUE" constraint
ALTER TABLE Persons
DROP INDEX UC_Person;

// How to add a "PRIMARY KEY" constraint

CREATE TABLE Persons (
  ID int NOT NULL,
  LastName varchar(255) NOT NULL,
  FirstName varchar(255),
  Age int,
  PRIMARY KEY (ID)
);

//using ALTER
ALTER TABLE Persons
ADD CONSTRAINT PK_Person PRIMARY KEY (ID,LastName);

//Dropping a "PRIMARY KEY" constraint
ALTER TABLE Persons
DROP PRIMARY KEY;

// What is a "FOREIGN KEY"
-  it is a field (or collection of fields) in one table that refers to the PRIMARY KEY of another table

Eg -

CREATE TABLE Orders (
  OrderID int NOT NULL,
  OrderNumber int NOT NULL,
  PersonID int,
  PRIMARY KEY (OrderID),
  FOREIGN KEY (PersonID) REFERENCES Persons(PersonID)
);

//using ALTER
ALTER TABLE Orders
ADD CONSTRAINT FK_PersonOrder
FOREIGN KEY (PersonID) REFERENCES Persons(PersonID);

//Dropping a "Foreign Key"
ALTER TABLE Orders
DROP FOREIGN KEY FK_PersonOrder;

// What is the use of "CHECK" constraint
- limits the range of values that can be put in a particular column

Eg -

CREATE TABLE Persons (
  ID int NOT NULL,
  LastName varchar(255) NOT NULL,
  FirstName varchar(255),
  Age int,
  CHECK (Age>=18)
);

//using ALTER
ALTER TABLE Persons
ADD CHECK (Age>=18);

// Dropping a "CHECK" constraint
ALTER TABLE Persons
DROP CHECK CHK_PersonAge;

// How to use "DEFAULT" constraint

CREATE TABLE Persons (
  ID int NOT NULL,
  LastName varchar(255) NOT NULL,
  FirstName varchar(255),
  Age int,
  City varchar(255) DEFAULT 'Sandnes'
);

//using ALTER
ALTER TABLE Persons
ALTER City SET DEFAULT 'Sandnes';

//Dropping the "DEFAULT" constraint
ALTER TABLE Persons
ALTER City DROP DEFAULT;

// What is the use of "INDEX" in queries
- they are used to retrieve data from the db very fast

** Updating the table with indexes takes more time than updating a table without it
- create indexes only when we frequently want to search for something

//creating index on a combination of columns
CREATE INDEX idx_pname
ON Persons (LastName, FirstName);

//drop an index
ALTER TABLE table_name
DROP INDEX index_name;

// How to set "AUTO_INCREMENT" on a particular column
CREATE TABLE Persons (
  ID int NOT NULL AUTO_INCREMENT,
  LastName varchar(255) NOT NULL,
  FirstName varchar(255),
  Age int,
  PRIMARY KEY (ID)
);

//how to alter the starting value of "Auto Increment"
ALTER TABLE Persons AUTO_INCREMENT=100;

// How to create a view
- a VIEW is a virtual table

Eg -
CREATE VIEW [Current Product List] AS
SELECT ProductID, ProductName
FROM Products
WHERE Discontinued = No;

** we can query data from a view as well

// Updating a view

CREATE OR REPLACE VIEW [Current Product List] AS
SELECT ProductID, ProductName, Category
FROM Products
WHERE Discontinued = No;

// Dropping a view
DROP VIEW view_name;


// How to write a basic "select" query
SELECT city FROM customers

// How to select multiple columns
SELECT name,zip FROM customers

// How to select all columns
SELECT * FROM customers

// How to return distinct data
SELECT DISTINCT state FROM customers

// How to return count of distinct data
SELECT COUNT(DISTINCT Country) FROM Customers;

or

SELECT Count(*) AS DistinctCountries
FROM (SELECT DISTINCT Country FROM Customers);

// Different operators in "WHERE" clause
https://imgur.com/a/GVQsi

// How to use "AND" and "OR" in queries
SELECT * FROM Customers
WHERE Country='Germany' AND City='Berlin';

SELECT * FROM Customers
WHERE City='Berlin' OR City='München';

// How to use "NOT" in queries
SELECT * FROM Customers
WHERE NOT Country='Germany';

// How to combine "AND", "OR" and "NOT"
SELECT * FROM Customers
WHERE Country='Germany' AND (City='Berlin' OR City='München');

SELECT * FROM Customers
WHERE NOT Country='Germany' AND NOT Country='USA';

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

// How to order one column by "Ascending" and another by "Desceding"
SELECT * FROM Customers
ORDER BY Country ASC, CustomerName DESC;

// How to select particular column values using "where" clause
SELECT `username` , `password` FROM users where `id`=1

SELECT `firstname` , `surname` FROM users where `username`='alex' AND `password`='password'

//How to update a particular row using "where" clause
UPDATE `users` SET `firstname`='Dale' where `id`=1

//How to delete a particular row using "where" clause
DELETE FROM `users` where `id`=1

// How to delete all records
DELETE * FROM table_name;

// How to insert into a particular table some row(s)
INSERT INTO `users` VALUES('','alex','password','Alex','Pumpkin')

OR

INSERT INTO Customers (CustomerName, ContactName, Address, City, PostalCode, Country)
VALUES ('Cardinal', 'Tom B. Erichsen', 'Skagen 21', 'Stavanger', '4006', 'Norway');

// How to test for "NULL" data
SELECT LastName, FirstName, Address FROM Persons
WHERE Address IS NULL;

// How to test whether some field is "NOT NULL"
SELECT LastName, FirstName, Address FROM Persons
WHERE Address IS NOT NULL;

//How to arrange records in a particular order
SELECT `firstname`, `surname` FROM `users` ORDER BY `id` DESC

// How to get the top records in a table
SELECT * FROM Customers
LIMIT 3;

// How to get the minimum data from particular column
SELECT MIN(Price) AS SmallestPrice
FROM Products;

// How to get the maximum data from particular column
SELECT MAX(Price) AS LargestPrice
FROM Products;

// How to get the count in a column
SELECT COUNT(ProductID)
FROM Products;

// How to get the average in a column
SELECT AVG(Price)
FROM Products;

// How to get the sum in a column
SELECT SUM(Quantity)
FROM OrderDetails;

// How to return data using "LIKE" and "NOT LIKE"

//Return all names have surname as garrett
SELECT `name` FROM `names` WHERE `name` LIKE '%garrett'

//Returns the names not having 'g' inside it
SELECT `name` FROM `names` WHERE `name` NOT LIKE '%g%'

// How to select data having 'r' at the second position
SELECT * FROM Customers
WHERE CustomerName LIKE '_r%';

// How to select all the customers that start with "a" and are at least 3 characters in length
SELECT * FROM Customers
WHERE CustomerName LIKE 'a_%_%';

// How to select customers starting with any of the three characters
SELECT * FROM Customers
WHERE City LIKE '[bsp]%';

OR


SELECT * FROM Customers
WHERE City LIKE '[a-c]%';

// How to select customers not starting with the mentioned characters
SELECT * FROM Customers
WHERE City LIKE '[!bsp]%';

OR

SELECT * FROM Customers
WHERE City NOT LIKE '[bsp]%';

// How to select data from a series of options
SELECT * FROM Customers
WHERE Country IN ('Germany','France','UK')

SELECT * FROM Customers
WHERE Country NOT IN ('Germany','France','UK')

// How to select data beteeen two values
SELECT * FROM Products
WHERE Price BETWEEN 10 AND 20

SELECT * FROM Products
WHERE Price NOT BETWEEN 10 AND 20;

//for strings
SELECT * FROM Products
WHERE ProductName BETWEEN 'Carnarvon Tigers' AND 'Mozzarella di Giovanni'
ORDER BY ProductName;

//for dates
SELECT * FROM Orders
WHERE OrderDate BETWEEN #07/04/1996# AND #07/09/1996#;

OR

SELECT * FROM Orders WHERE OrderDate='2008-11-11'


// How to select distinct data from a table

//return distinct names
SELECT DISTINCT `surname` FROM `peoples`
SELECT DISTINCT `firstname`, `surname` FROM `peoples`

// How to define an alias for column names
SELECT CustomerID as ID, CustomerName AS Customer
FROM Customers;

OR

SELECT o.OrderID, o.OrderDate, c.CustomerName
FROM Customers AS c, Orders AS o
WHERE c.CustomerName="Around the Horn" AND c.CustomerID=o.CustomerID;

//for aliases with spaces in between, we required "[ ]"
SELECT CustomerName AS Customer, ContactName AS [Contact Person]
FROM Customers;

// How to combine multiple columns into a single Alias
SELECT CustomerName, CONCAT(Address,', ',PostalCode,', ',City,', ',Country) AS Address
FROM Customers;

// How to use JOINS in SQL

//returns the data based on the matching condition between two tables and Null is printed for the Right table when data doesn't exists
SELECT `people`.`name`, `pets`.`pet` FROM `people` LEFT JOIN `pets` ON `people`.`id`=`pets`.`people_id`

//displays data (NULL for no match found) for all data which is matched
SELECT `people`.`name`, `pets`.`pet` FROM `people` RIGHT JOIN `pets` ON `people`.`id`=`pets`.`people_id`

//displays data only where matching condition is met
SELECT `people`.`name`, `pets`.`pet` FROM `people` JOIN `pets` ON `people`.`id`=`pets`.`people_id`

// With Example-

// Let one of the tables be

OrderID 	CustomerID 	OrderDate
10308    	          2          	1996-09-18
10309    	          37             1996-09-19
10310                  77             1996-09-20

// Let the second table be

CustomerID        CustomerName                                               ContactName                        Country
1                         Alfreds Futterkiste                                               Maria Anders                        Germany
2                        Ana Trujillo Emparedados y helados                         Ana Trujillo                Mexico
3                        Antonio Moreno Taquería                                    Antonio Moreno              Mexico

// Since the customerid match in the two tables, we can use them to fetch records from both tables

SELECT Orders.OrderID, Customers.CustomerName, Orders.OrderDate
FROM Orders
INNER JOIN Customers ON Orders.CustomerID=Customers.CustomerID;

// Different types of SQL Joins

(INNER) JOIN: Returns records that have matching values in both tables
LEFT (OUTER) JOIN: Return all records from the left table, and the matched records from the right table
RIGHT (OUTER) JOIN: Return all records from the right table, and the matched records from the left table
FULL (OUTER) JOIN: Return all records when there is a match in either left or right table

// What is INNER join
- selects the records that have matching values in both tables

Eg -

//here we are joining 3 tables
SELECT Orders.OrderID, Customers.CustomerName, Shippers.ShipperName
FROM ((Orders
INNER JOIN Customers ON Orders.CustomerID = Customers.CustomerID)
INNER JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID);

// What is LEFT join
- returns all records from the left table and the matched records from the right table
- for unmatched records, display NULL in the right table

Eg -
SELECT Customers.CustomerName, Orders.OrderID
FROM Customers
LEFT JOIN Orders ON Customers.CustomerID = Orders.CustomerID
ORDER BY Customers.CustomerName;

// What is RIGHT join
- - returns all records from the right table and the matched records from the left table
- for unmatched records, display NULL in the left table

Eg -
SELECT Orders.OrderID, Employees.LastName, Employees.FirstName
FROM Orders
RIGHT JOIN Employees ON Orders.EmployeeID = Employees.EmployeeID
ORDER BY Orders.OrderID;

// What is FULL Outer join
- returns all records when there is match either in the left table or the right table

EG -
SELECT Customers.CustomerName, Orders.OrderID
FROM Customers
FULL OUTER JOIN Orders ON Customers.CustomerID=Orders.CustomerID
ORDER BY Customers.CustomerName;

// What is SELF Join
- here a table is joined with itself

EG -
SELECT A.CustomerName AS CustomerName1, B.CustomerName AS CustomerName2, A.City
FROM Customers A, Customers B
WHERE A.CustomerID <> B.CustomerID
AND A.City = B.City
ORDER BY A.City;

-- whereever the customer ids do not match but the customers city match print the customer1 name
and customer2 name

// What is the use of "UNION"
- it is used to the result sets from two or more SELECT statements

* each select statement with UNION must have the same number of columns
* the columns must have have similar data types
* the columns in each SELECT statement must be in the same order

* UNION gives "distinct" data
* To get ALL data use "UNION ALL"

Eg -
SELECT City FROM Customers
UNION
SELECT City FROM Suppliers
ORDER BY City;

Eg-
SELECT City FROM Customers
UNION ALL
SELECT City FROM Suppliers
ORDER BY City;

//selects all the different German Cities from the two tables
Eg-
SELECT City, Country FROM Customers
WHERE Country='Germany'
UNION
SELECT City, Country FROM Suppliers
WHERE Country='Germany'
ORDER BY City;

// How to use "GROUP BY" in queries
- it is used with aggregate functions (COUNT, MAX, MIN, SUM, AVG) to group the result set by one or more columns

Eg-
//list the number of customers in each country

SELECT COUNT(Customer ID), Country
FROM Customers
GROUP BY Country;
ORDER BY COUNT(CustomerID) DESC;

//using JOIN
SELECT Shippers.ShipperName, COUNT(Orders.OrderID) AS NumberOfOrders FROM Orders
LEFT JOIN Shippers ON Orders.ShipperID = Shippers.ShipperID
GROUP BY ShipperName;

// How to use "HAVING" clause in queries
- After the "GROUP BY" has been applied we used having to put a condition on the results received from "GROUP BY"

Eg -
SELECT COUNT(CustomerID), Country
FROM Customers
GROUP BY Country
HAVING COUNT(CustomerID) > 5
ORDER BY COUNT(CustomerID) DESC;

// How to use "EXISTS" Operator in queries
- it is used to test the existence of any record in a subquery

Eg-

//returns TRUE and lists the suppliers with a product price less than 20
SELECT SupplierName
FROM Suppliers
WHERE EXISTS (SELECT ProductName FROM Products WHERE SupplierId = Suppliers.supplierId AND Price < 20);


// How to copy data from one table into another table

// syntax
SELECT *
INTO newtable [IN externaldb]
FROM oldtable
WHERE condition;

Eg-
SELECT * INTO CustomersBackup2017 IN 'Backup.mdb'
FROM Customers;

OR

//syntax
INSERT INTO table2
SELECT * FROM table1
WHERE condition;

Eg-
INSERT INTO Customers (CustomerName, City, Country)
SELECT SupplierName, City, Country FROM Suppliers;

// How to create a new empty table using the schema of another

SELECT * INTO newtable
FROM oldtable
WHERE 1 = 0;

// What is the use of "IFNULL / COALESCE" function
- it lets us return an alternative if an expression is NULL

Eg -
SELECT ProductName, UnitPrice * (UnitsInStock + IFNULL(UnitsOnOrder, 0))
FROM Products

?>
