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
- Will also call accuracy problems

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
