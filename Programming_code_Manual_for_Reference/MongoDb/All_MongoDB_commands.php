<!-- How to enter MongoDB in shell -->

- type "mongodb" in the shell prompt

<!-- How to check for available databases -->

- show dbs;

<!-- How to create a new database -->

- use "db name";

<!-- How to check for current database -->

- type "db" in the shell prompt
** "db" means the current database. It can be used as a reference for the current database (As below)

<!-- How to add a new collection data inside a database -->

- db.mycol.insert({"name" : "Mark"});

<!-- How to show all the collections in the db -->

- show collections;

<!-- - How to display all the data stored in a particular collection -->

- db.mycol.find();

Eg -
{ "_id" : ObjectId("5ad38af3fdf582ab58a7ad70"), "name" : "Mark" }

** A unique id is created for each document 
