function Employee(name)
{
  this.name = name;
}

// another way of adding a function in the class Employee
//functions will be loaded once irrespective of the number of objects
Employee.prototype.getName = function()
{
  return this.name;
}
