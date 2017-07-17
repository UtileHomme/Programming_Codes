var PragimTech = PragimTech || {};
PragimTech.TeamB = PragimTech.TeamB || {};


PragimTech.TeamB.customer = function(firstName, middleName, lastName)
{
  this.firstName = firstName;
  this.lastName = lastName;
  this.middleName = middleName;
  this.getFullName = function()
  {
    return this.firstName + " " + this.middleName + " " + this.lastName;
  }

  //will return customer object instance
  return this;
}
