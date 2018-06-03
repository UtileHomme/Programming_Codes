<!-- What is a database -->

- It is a systematic collection of random data.

<!-- What is a DBMS -->

- It is a collection of programs which enables its users to access its db, manipulate data and helps in the representation
of data
- It also helps control access to the database by different users

<!-- Why do we need databases -->

1. Size of data
- Spreadsheet files are not "scalable". They work for less records

2. Ease of Updating
- Multiple people cannot edit a file at the same time
- People will overwrite other people changes

3. Accuracy
- There is no validation mechanism. So integer data might be getting entered in the string place

4. Security
- Anyone can access the files and see the data

5. Redundancy
- Duplication of data is a big problem
- Will also cause accuracy problems

** Using DBs we can track who did what
** Backup and recovery is possible

<!-- Types of DBMS -->

1. Hierarchical
    - applies the Parent Child relationship of storing data
    - nodes represent data and branches representing fields
Eg - Windows registry

2. Network
    - supports Many to Many relationships

3. Relational
    - defines data relationships in the form of tables
    - doesn't support Many to Many relationships

4. Object Oriented Relation
    - supports storage of new datatypes
    - data is stored in the form of objects
    - objects to be stored have attributes

Eg - PostGre SQL

<!-- What is SQL -->

    - Structured Query language
    - standard language for dealing with dbs
    - CRUD - Create , Read, Update and Delete

<!-- What are DDL, DML, TCL and DCL commands -->

1. Data Definition Language(DDL)
- statements used to define the database structure or schema

a. Create
    - to create objects in db

b. Alter
    - to alter structure of db

c. Drop
    - delete objects from db

d. Truncate
    - remove all records from table

2. Data Manipulation Language(DML)
- statements used to manage data with schema objects

a. Select
- retrieve data from a db

b. Insert
- insert data into a table

c. Update
- update existing data within a table

d. Delete
- delete all records from a table

3. Data Control Language

a. Grant
- gives user's access privileges to db

b. Revoke
- withdraw access privileges given with the GRANT command

4. Transaction Control Language (TCL)
- used to manage changes made by DML commands
- allows statements to be grouped together into logical transactions

a. Commit
- save work done

b. Savepoint
- identify a point in the transaction to which we can roll back

c. Rollback
- undo the modification made since the last COMMIT

<!-- Difference between Truncate, Delete and Drop commands -->

<!-- Delete command -->
- is used to remove some or all rows from the table
- we can perform a COMMIT or ROLLBACK to make the change permanent or undo it
- this operation causes all DELETE triggers on the table to fire
- we can use "WHERE" with it

<!-- Truncate command -->
- removes all rows from the table
- the operation cannot be rolled back and no triggers will be fired
- it is faster and doesn't use as much undo space as DELETE
- we can't use "WHERE" with it

<!-- Drop command -->
- removes the table from the db
- all the tables' rows, indexes and privileges will also be removed
- no triggers will be fired
- the operation cannot be rolled back
