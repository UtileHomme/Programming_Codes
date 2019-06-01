db.employees.find()

db.employees.find().pretty()

db.employees.findOne()

db.employees.find(
{
 "EmpNo" : "3"
}
)

db.employees.find(
{
 "Age" : {$lt: "40"}
})

db.employees.find(
{
 "Age" : {$lte: "40"}
})

db.employees.find(
{
 "Age" : {$ne: "40"}
})

