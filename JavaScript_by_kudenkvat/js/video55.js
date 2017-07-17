var PragimTech = PragimTech || {};
PragimTech.TeamA = PragimTech.TeamA || {};


PragimTech.TeamA.customer = function(firstName, lastName)
{
  this.firstName = firstName;
  this.lastName = lastName;
  this.getFullName = function()
  {
    return this.firstName + " " + this.lastName;
  }

  return this;
}
