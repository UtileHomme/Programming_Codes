<!-- How to start the service of MongoDB  -->

sudo service mongodb start

<!-- How to stop the service of MongoDB -->

sudo service mongodb stop

<!-- https://www.youtube.com/watch?v=mENTYOgtifc&t=0s&index=4&list=PLC3y8-rFHvwh11bWtwm3_qKvo46uDmaal -->

<!-- How to enter MongoDB in shell -->

- type "mongodb" in the shell prompt

<!-- How to check for available databases -->

- show dbs;

<!-- How to create a new database -->

- use "db name";

**if the db already exists, don't create a new one and switch to the existing db

<!-- How to check for current database -->

- type "db" in the shell prompt
** "db" means the current database. It can be used as a reference for the current database (As below)

<!-- How to add a new collection data inside a database -->

- db.mycol.insert({"name" : "Mark"});

<!-- How to delete the current database -->

- db.dropDatabase

<!-- https://www.youtube.com/watch?v=k4UopPslnxE&t=0s&index=5&list=PLC3y8-rFHvwh11bWtwm3_qKvo46uDmaal -->

<!-- How to create a collection -->

- db.createCollection("test")

<!-- How to show all the collections in the db -->

- show collections;

<!-- How to drop a collection -->

- db.nameOfCollection.drop()

<!-- https://www.youtube.com/watch?v=Ik4lVkapEpg&t=0s&index=6&list=PLC3y8-rFHvwh11bWtwm3_qKvo46uDmaal -->

<!-- Sample JSON file -->
<!-- https://github.com/gopinav/MongoDB-Tutorials -->

<!-- How to insert a single document in the db -->

db.employees.insert(
{
"EmpNo":"1",
"FirstName":"Andrew",
"LastName":"Neil",
"Age":"30",
"Gender":"Male",
"Skill":"MongoDB",
"Phone":"408-1234567",
"Email":"Andrew.Neil@gmail.com",
"Salary":"80000"
}
)

<!-- How to insert an array of documents in the db -->

- use the "[]" in insert function

db.employees.insert(
[
{
"EmpNo":"2",
"FirstName":"Brian",
"LastName":"Hall",
"Age":"27",
"Gender":"Male",
"Skill":"Javascript",
"Phone":"408-1298367",
"Email":"Brian.Hall@gmail.com",
"Salary":"60000"
},
{
"EmpNo":"3",
"FirstName":"Chris",
"LastName":"White",
"Age":"40",
"Gender":"Male",
"Skill":"Python",
"Phone":"408-4444567",
"Email":"Chris.White@gmail.com",
"Salary":"100000"
},
{
"EmpNo":"4",
"FirstName":"Debbie",
"LastName":"Long",
"Age":"32",
"Gender":"Female",
"Skill":"Project Management",
"Phone":"408-1299963",
"Email":"Debbie.Long@gmail.com",
"Salary":"105000"
},
{
"EmpNo":"5",
"FirstName":"Ethan",
"LastName":"Murphy",
"Age":"45",
"Gender":"Male",
"Skill":"C#",
"Phone":"408-3314567",
"Email":"Ethan.Murphy@gmail.com",
"Salary":"120000"
},
{
"EmpNo":"6",
"FirstName":"Felicia",
"LastName":"Lee",
"Age":"33",
"Gender":"Female",
"Skill":"MongoDB",
"Phone":"408-8832567",
"Email":"Felicia.Lee@gmail.com",
"Salary":"85000"
},
{
"EmpNo":"7",
"FirstName":"George",
"LastName":"Cyrus",
"Age":"36",
"Gender":"Male",
"Skill":"MongoDB",
"Phone":"408-9984567",
"Email":"George.Cyrus@gmail.com",
"Salary":"88000"
},
{
"EmpNo":"8",
"FirstName":"Hannah",
"LastName":"Johnson",
"Age":"26",
"Gender":"Female",
"Skill":"AngularJS",
"Phone":"408-7654321",
"Email":"Hannah.Johnson@gmail.com",
"Salary":"72000"
}
]
)

<!-- https://www.youtube.com/watch?v=w2BoKwUB75I&t=0s&index=7&list=PLC3y8-rFHvwh11bWtwm3_qKvo46uDmaal -->

<!-- - How to display all the data stored in a particular collection -->

- db.mycol.find();

Eg -
{ "_id" : ObjectId("5ad38af3fdf582ab58a7ad70"), "name" : "Mark" }

** A unique id is created for each document

<!-- How to display data on the terminal in a indented format -->

- db.mycol.find().pretty()

<!-- How to display the first data in the document -->

- db.mycol.findOne()

<!-- How to find the employees with employee no as "2" -->

db.employees.find(
{
 "EmpNo" : "2"
}
)

<!-- How to use the "less than" condition to query data -->

db.employees.find(
{
 "Age" : {$lt: "40"}
})

<!-- How to use the "less than or equal to" condition to query data -->

db.employees.find(
{
 "Age" : {$lte: "40"}
})

<!-- How to use the "not equal to" condition to query data -->

db.employees.find(
{
 "Age" : {$ne: "40"}
})

<!-- https://www.youtube.com/watch?v=tkVoqzCbUP4&index=8&list=PLC3y8-rFHvwh11bWtwm3_qKvo46uDmaal&t=0s -->

<!-- How to use AND/OR conditions in query data -->

<!-- We are trying to use Salary and Skill as parameter -->

db.employees.find(
{
 "Skill" : "MongoDB", "Salary": "80000"
})

<!-- We are trying to use Salary or Skill as parameter -->

db.employees.find(
{
 $or: [{"Skill":"MongoDB"},{"Salary":"80000"}]
})


<!-- Using both And and Or in one query -->

db.employees.find(
{
 "Skill":"MongoDB", $or:[{"Salary":"80000"},{"Salary":"85000"}]
})

<!-- https://www.youtube.com/watch?v=Xl-Q4HjmDoo&index=9&list=PLC3y8-rFHvwh11bWtwm3_qKvo46uDmaal&t=0s -->

<!-- How to update a document -->

db.employees.update(
{"_id" : ObjectId("5b7b58e9bacd25c35e2624c4")},
{$set: {"Salary": "90000"}}
)

db.employees.update(
{"Skill" : "MongoDB"},
{$set: {"Salary":"15000"}}
)

<!-- * Note- this is only updates one record -->

<!-- To modify all the records,do this  -->

db.employees.update(
{"Skill" : "MongoDB"},
{$set: {"Salary":"15000"}},
{multi:true}
)

<!-- https://www.youtube.com/watch?v=vJf7xZ2PSkY&index=10&list=PLC3y8-rFHvwh11bWtwm3_qKvo46uDmaal&t=0s -->

<!-- How to remove one document in MongoDB -->

db.employees.remove(
{
	"Skill": "MongoDB"
}, 1
)

<!-- How to remove all documents -->

db.employees.remove(
{
	"Skill": "MongoDB"
}
)

<!-- https://www.youtube.com/watch?v=FLv40w6u9ps&index=11&list=PLC3y8-rFHvwh11bWtwm3_qKvo46uDmaal&t=0s -->

<!-- How to select only one field out of a set of fields -->

db.employees.find(
{},
{"FirstName":1}
)

db.employees.find(
{},
{"FirstName":1, "_id":0}
)

** "0" means do not show this field
"1" means show this field

<!-- https://www.youtube.com/watch?v=sEbJCGo02RY&t=0s&list=PLC3y8-rFHvwh11bWtwm3_qKvo46uDmaal&index=12 -->

<!-- How to limit the number of records in MongoDB -->

db.employees.find({}, {"FirstName":1, "EmpNo":1, "_id":0}).pretty().limit(5)

<!-- How to skip a particular number of records -->

db.employees.find({}, {"FirstName":1, "EmpNo":1, "_id":0}).pretty().skip(3)

<!-- How to skip and limit simultaneously -->

db.employees.find({}, {"FirstName":1, "EmpNo":1, "_id":0}).pretty().skip(3).limit(2)

<!-- How to sort in the ascending order -->

db.employees.find({}, {"FirstName":1, "EmpNo":1, "_id":0}).pretty().sort({"FirstName":1})

** "1" means ascending order
** "-1" means descending order

<!-- How to sort in the descending order -->

db.employees.find({}, {"FirstName":1, "EmpNo":1, "_id":0}).pretty().sort({"FirstName":-1})

<!-- https://www.youtube.com/watch?v=JJyOFoMHkBo&t=0s&list=PLC3y8-rFHvwh11bWtwm3_qKvo46uDmaal&index=13 -->

<!-- How to create an index in MongoDB -->

db.employees.ensureIndex({"Email":1})

<!-- How to check the existing indexes -->

db.employees.getIndexes()

<!-- How to drop indexes -->

db.employees.dropIndex({"Email": 1})

** The benefit of indexes is that it reduces the querying process to fraction of a second
** Create index of fields that might be unique e.g. - Username, Email Id

<!-- https://www.youtube.com/watch?v=zcN-rM3hgrw&t=0s&list=PLC3y8-rFHvwh11bWtwm3_qKvo46uDmaal&index=14 -->

** Aggregation allows one to perform querys on a set of documents and get a single result out of them

<!-- How to find the total number of female and male employees -->

db.employees.aggregate([{$group: {_id: "$Gender", Sum: {$sum:1}}}])

** group: Grouping is done on the basis of gender
** Sum: Any word or label
** $sum: This is to be set as 1 so that is displayed

<!-- How to find the maximum age of the employees -->

db.employees.aggregate([{$group: {_id: "$Gender", MaxAge: {$max:"$Age"}}}])

** $max: since we wish to use the "max" property
** $age: the document on which the "max" property is to be applied

<!-- How to find minimum age -->

db.employees.aggregate([{$group: {_id: "$Gender", MinAge: {$min:"$Age"}}}])

<!-- https://www.youtube.com/watch?v=CHNB38MAvKY&t=0s&list=PLC3y8-rFHvwh11bWtwm3_qKvo46uDmaal&index=15 -->

<!-- How to create a backup for mongodb db -->

mongodump

** a folder "dump" will be created in which all backups will be present

<!-- How to restore the backup -->

- Go to the particular path in which the backup was originally created and type "mongorestore"

<!-- How to create a backup for a single db -->

mongodump --db "dbname"

<!-- How to restore a single database -->

mongorestore --db company dump/company

<!-- How to create backup for only a single collection from a db -->

mongodump --db newdatabase --collection mycol

<!-- How to restore a single collection -->

mongorestore --db newdatabase --collection mycol dump/newdatabase/mycol.bson
