db.employees.find()

db.employees.update(
{"_id" : ObjectId("5b7b595bbacd25c35e2624c5")},
{$set: {"Salary": "30000"}}
)

db.employees.update(
{"Skill" : "MongoDB"},
{$set: {"Salary":"16000"}}
)