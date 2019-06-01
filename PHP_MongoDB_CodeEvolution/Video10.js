db.employees.find(
{},
{"FirstName":1}
)

db.employees.find(
{},
{"FirstName":1, "_id":0}
)